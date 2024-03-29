<?php
/*
* 2007-2012 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2012 PrestaShop SA
*  @version  Release: $Revision: 7077 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class BlockLink_mod extends Module
{
	/* @var boolean error */
	protected $error = false;
	
	public function __construct()
	{
		$this->name = 'blocklink_mod';
		$this->tab = 'front_office_features';
		$this->version = '1.6';
		$this -> author = 'IQIT-COMMERCE.COM';
		$this->need_instance = 0;
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->l('Link block mod');
		$this->description = $this->l('Adds a block with additional links.');
		$this->confirmUninstall = $this->l('Are you sure you want to delete all your links ?');
	}
	
	public function install()
	{
		$this->_clearCache('blocklink_mod.tpl');
		if (!parent::install() ||
			!$this->registerHook('displayAdditionalFooter') ||
			!Db::getInstance()->execute('
				CREATE TABLE '._DB_PREFIX_.'blocklink_mod (
					`id_blocklink` int(2) NOT NULL AUTO_INCREMENT, 
					`url` varchar(255) NOT NULL,
					`new_window` TINYINT(1) NOT NULL,
					PRIMARY KEY(`id_blocklink`))
			ENGINE='._MYSQL_ENGINE_.' default CHARSET=utf8') ||
			!Db::getInstance()->execute('
				CREATE TABLE '._DB_PREFIX_.'blocklink_mod_shop (
					`id_blocklink` int(2) NOT NULL AUTO_INCREMENT, 
					`id_shop` int(2) NOT NULL,
					PRIMARY KEY(`id_blocklink`, `id_shop`))
			ENGINE='._MYSQL_ENGINE_.' default CHARSET=utf8') ||
			!Db::getInstance()->execute('
				CREATE TABLE '._DB_PREFIX_.'blocklink_mod_lang (
					`id_blocklink` int(2) NOT NULL,
					`id_lang` int(2) NOT NULL,
					`text` varchar(64) NOT NULL,
					PRIMARY KEY(`id_blocklink`, `id_lang`))
			ENGINE='._MYSQL_ENGINE_.' default CHARSET=utf8') ||
			!Configuration::updateValue('PS_BLOCKLINK_MOD_TITLE', array('1' => 'Block link', '2' => 'Bloc lien')))
return false;
return true;
}

public function uninstall()
{
	$this->_clearCache('blocklink_mod.tpl');
	if (!parent::uninstall() ||
		!Db::getInstance()->execute('DROP TABLE '._DB_PREFIX_.'blocklink_mod') ||
		!Db::getInstance()->execute('DROP TABLE '._DB_PREFIX_.'blocklink_mod_lang') ||
		!Db::getInstance()->execute('DROP TABLE '._DB_PREFIX_.'blocklink_mod_shop') ||
		!Configuration::deleteByName('PS_BLOCKLINK_MOD_TITLE') ||
		!Configuration::deleteByName('PS_BLOCKLINK_MOD_URL'))
		return false;
	return true;
}

public function hookFooter($params)
{
	if (!$this->isCached('blocklink_mod.tpl', $this->getCacheId()))
	{
		$links = $this->getLinks();
		
		$this->smarty->assign(array(
			'blocklink_links' => $links,
			'title' => Configuration::get('PS_BLOCKLINK_MOD_TITLE', $this->context->language->id),
			'url' => Configuration::get('PS_BLOCKLINK_MOD_URL'),
			'lang' => 'text_'.$this->context->language->id
			));
		if (!$links)
			return false;
	}
	return $this->display(__FILE__, 'blocklink_mod.tpl', $this->getCacheId());
}
public function hookdisplayAdditionalFooter($params){
	return $this->hookFooter($params);
}
public function getLinks()
{
	$result = array();
		// Get id and url

	$sql = 'SELECT b.`id_blocklink`, b.`url`, b.`new_window`
	FROM `'._DB_PREFIX_.'blocklink_mod` b';
	if (Shop::isFeatureActive() && Shop::getContext() != Shop::CONTEXT_ALL)
		$sql .= ' JOIN `'._DB_PREFIX_.'blocklink_mod_shop` bs ON b.`id_blocklink` = bs.`id_blocklink` AND bs.`id_shop` IN ('.implode(', ', Shop::getContextListShopID()).') ';
	$sql .= (int)Configuration::get('PS_BLOCKLINK_MOD_ORDERWAY') == 1 ? ' ORDER BY `id_blocklink` DESC' : '';

	if (!$links = Db::getInstance()->executeS($sql))
		return false;
	$i = 0;
	foreach ($links as $link)
	{
		$result[$i]['id'] = $link['id_blocklink'];
		$result[$i]['url'] = $link['url'];
		$result[$i]['newWindow'] = $link['new_window'];
			// Get multilingual text
		if (!$texts = Db::getInstance()->executeS('SELECT `id_lang`, `text` 
			FROM '._DB_PREFIX_.'blocklink_mod_lang 
			WHERE `id_blocklink`='.(int)$link['id_blocklink']))
			return false;
		foreach ($texts as $text)
			$result[$i]['text_'.$text['id_lang']] = $text['text'];
		$i++;
	}
	return $result;
}

public function addLink()
{
	if (!($languages = Language::getLanguages()))
		return false;
	$id_lang_default = (int)(Configuration::get('PS_LANG_DEFAULT'));

	if ($id_link = Tools::getValue('id_blocklink'))
	{
		if (!Db::getInstance()->execute('UPDATE '._DB_PREFIX_.'blocklink_mod SET `url` = \''.pSQL($_POST['url']).'\', `new_window` = '.(isset($_POST['newWindow']) ? 1 : 0).' WHERE `id_blocklink` = '.(int)$id_link))
			return false;
		if (!Db::getInstance()->execute('DELETE FROM '._DB_PREFIX_.'blocklink_mod_lang WHERE `id_blocklink` = '.(int)$id_link))
			return false;

		foreach ($languages as $language)
			if (!empty($_POST['text_'.$language['id_lang']]))
			{
				if (!Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'blocklink_mod_lang VALUES ('.(int)$id_link.', '.(int)($language['id_lang']).', \''.pSQL($_POST['text_'.$language['id_lang']]).'\')'))
					return false;
			}
			else
				if (!Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'blocklink_mod_lang VALUES ('.(int)$id_link.', '.$language['id_lang'].', \''.pSQL($_POST['text_'.$id_lang_default]).'\')'))
					return false;
			}
			else
			{
				if (!Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'blocklink_mod 
					VALUES (NULL, \''.pSQL($_POST['url']).'\', '.((isset($_POST['newWindow']) && $_POST['newWindow']) == 'on' ? 1 : 0).')') ||
					!$id_link = Db::getInstance()->Insert_ID())
					return false;

				foreach ($languages as $language)
					if (!empty($_POST['text_'.$language['id_lang']]))
					{
						if (!Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'blocklink_mod_lang 
							VALUES ('.(int)$id_link.', '.(int)$language['id_lang'].', \''.pSQL($_POST['text_'.$language['id_lang']]).'\')'))
							return false;
					}
					else
						if (!Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'blocklink_mod_lang VALUES ('.(int)$id_link.', '.(int)($language['id_lang']).', \''.pSQL($_POST['text_'.$id_lang_default]).'\')'))
							return false;
					}

					Db::getInstance()->execute('DELETE FROM '._DB_PREFIX_.'blocklink_mod_shop WHERE id_blocklink='.(int)$id_link);

					if (!Shop::isFeatureActive())
					{
						Db::getInstance()->insert('blocklink_mod_shop', array(
							'id_blocklink' => (int)$id_link,
							'id_shop' => (int)Context::getContext()->shop->id,
							));
					}
					else
					{
						$assos_shop = Tools::getValue('checkBoxShopAsso_configuration');
						if (empty($assos_shop))
							return false;
						foreach ($assos_shop as $id_shop => $row)
							Db::getInstance()->insert('blocklink_mod_shop', array(
								'id_blocklink' => (int)$id_link,
								'id_shop' => (int)$id_shop,
								));
					}
					return true;
				}

				public function deleteLink()
				{
					return (Db::getInstance()->execute('DELETE FROM '._DB_PREFIX_.'blocklink_mod WHERE `id_blocklink` = '.(int)$_GET['id']) &&
						Db::getInstance()->execute('DELETE FROM '._DB_PREFIX_.'blocklink_mod_shop WHERE `id_blocklink` = '.(int)$_GET['id']) &&
						Db::getInstance()->execute('DELETE FROM '._DB_PREFIX_.'blocklink_mod_lang WHERE `id_blocklink` = '.(int)$_GET['id']));
				}

				public function updateTitle()
				{
					$languages = Language::getLanguages();
					$result = array();
					foreach ($languages as $language)
						$result[$language['id_lang']] = $_POST['title_'.$language['id_lang']];
					if (!Configuration::updateValue('PS_BLOCKLINK_MOD_TITLE', $result))
						return false;
					return Configuration::updateValue('PS_BLOCKLINK_MOD_URL', $_POST['title_url']);
				}

				public function getContent()
				{
					$this->_html = '';

		// Add a link
					if (isset($_POST['submitLinkAdd']))
					{
						if (empty($_POST['text_'.Configuration::get('PS_LANG_DEFAULT')]) || empty($_POST['url']))
							$this->_html .= $this->displayError($this->l('You must fill in all fields'));
						elseif (!Validate::isUrl(str_replace('http://', '', $_POST['url'])))
							$this->_html .= $this->displayError($this->l('Bad URL'));
						else
							if ($this->addLink())
								$this->_html .= $this->displayConfirmation($this->l('The link has been added.'));
							else
								$this->_html .= $this->displayError($this->l('An error occurred during link creation.'));
							$this->_clearCache('blocklink_mod.tpl');
						}
		// Update the block title
						elseif (isset($_POST['submitTitle']))
						{
							$this->_clearCache('blocklink_mod.tpl');

							if (empty($_POST['title_'.Configuration::get('PS_LANG_DEFAULT')]))
								$this->_html .= $this->displayError($this->l('"title" field cannot be empty.'));
							elseif (!empty($_POST['title_url']) && !Validate::isUrl(str_replace('http://', '', $_POST['title_url'])))
								$this->_html .= $this->displayError($this->l('The \'title\' field is invalid'));
							elseif (!Validate::isGenericName($_POST['title_'.Configuration::get('PS_LANG_DEFAULT')]))
								$this->_html .= $this->displayError($this->l('The \'title\' field is invalid'));
							elseif (!$this->updateTitle())
								$this->_html .= $this->displayError($this->l('An error occurred during title updating.'));
							else
								$this->_html .= $this->displayConfirmation($this->l('The block title has been updated.'));
						}
		// Delete a link
						elseif (Tools::isSubmit('deleteblocklink_mod') && Tools::getValue('id'))
					{
							print_r("das");
							$this->_clearCache('blocklink_mod.tpl');
							if (!is_numeric($_GET['id']) || !$this->deleteLink())
								$this->_html .= $this->displayError($this->l('An error occurred during link deletion.'));
							else
								$this->_html .= $this->displayConfirmation($this->l('The link has been deleted.'));
						}

						if (isset($_POST['submitOrderWay']))
						{
							$this->_clearCache('blocklink_mod.tpl');
							if (Configuration::updateValue('PS_BLOCKLINK_MOD_ORDERWAY', (int)(Tools::getValue('orderWay'))))
								$this->_html .= $this->displayConfirmation($this->l('Sort order updated'));
							else
								$this->_html .= $this->displayError($this->l('An error occurred during sort order set-up.'));
						}

						$this->_html .= $this->renderForm();
						$this->_html .= $this->renderList();

						return $this->_html;




					}

					public function renderList()
	{
		$fields_list = array(
			'id' => array(
				'title' => $this->l('Id'),
				'type' => 'text',
			),
			'text_'.$this->context->language->id => array(
				'title' => $this->l('Text'),
				'type' => 'text',
			),
			'url' => array(
				'title' => $this->l('Url'),
				'type' => 'text',
			),
		);

		$helper = new HelperList();
		$helper->shopLinkType = '';
		$helper->simple_header = true;
		$helper->identifier = 'id';
		$helper->actions = array('edit', 'delete');
		$helper->show_toolbar = false;

		$helper->title = $this->l('Link list');
		$helper->table = $this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
		$links = $this->getLinks();
		if (is_array($links) && count($links))
			return $helper->generateList($this->getLinks(), $fields_list);
		else
			return false;
	}

	public function renderForm()
	{
		$fields_form_1 = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Add a new link'),
					'icon' => 'icon-plus-sign-alt'
				),
				'input' => array(
					array(
						'type' => 'hidden',
						'name' => 'id_blocklink',
					),
					array(
						'type' => 'text',
						'label' => $this->l('Text'),
						'name' => 'text',
						'lang' => true,
					),
					array(
						'type' => 'text',
						'label' => $this->l('Url'),
						'name' => 'url',
					),
					array(
						'type' => 'switch',
						'label' => $this->l('Open in a new window'),
						'name' => 'newWindow',
						'is_bool' => true,
						'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('Enabled')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('Disabled')
							)
						),
					),

				),
				'submit' => array(
					'title' => $this->l('Save'),
					'name' => 'submitLinkAdd',
				)
			),
		);

		$shops = Shop::getShops(true, null, true);
		if (Shop::isFeatureActive())
		{
			$fields_form_1['form']['input'][] = array(
				'type' => 'shop',
				'label' => $this->l('Shop association'),
				'name' => 'checkBoxShopAsso',
			);
		}

		$fields_form_2 = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Add a new block'),
					'icon' => 'icon-plus-sign-alt'
				),
				'input' => array(
					array(
						'type' => 'text',
						'label' => $this->l('Title'),
						'name' => 'title',
						'lang' => true,
					),
					array(
						'type' => 'text',
						'label' => $this->l('Url'),
						'name' => 'title_url',
					),
				),
				'submit' => array(
					'title' => $this->l('Save'),
					'name' => 'submitTitle',
				)
			),
		);

		$fields_form_3 = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Settings'),
					'icon' => 'icon-cogs'
				),
				'input' => array(
					array(
						'type' => 'select',
						'label' => $this->l('Order list'),
						'name' => 'orderWay',
						'options' => array(
							'query' => array(
								array(
									'id' => 0,
									'name' => $this->l('by most recent links')
								),
								array(
									'id' => 1,
									'name' => $this->l('by oldest links')
								)
							),
							'id' => 'id',
							'name' => 'name',
						)
					),
				),
				'submit' => array(
					'title' => $this->l('Save'),
					'name' => 'submitOrderWay',
				)
			),
		);

		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$this->fields_form = array();

		$helper->identifier = 'id_blocklink';
		$helper->submit_action = 'submit';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');

		$helper->tpl_vars = array(
			'fields_value' => $this->getConfigFieldsValues(),
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id
		);

		return $helper->generateForm(array($fields_form_1, $fields_form_2, $fields_form_3));
	}
	public function getConfigFieldsValues()
	{
		$fields_values = array(
			'id_blocklink' => Tools::getValue('id_blocklink'),
			'url' => Tools::getValue('url'),
			'newWindow' => Tools::getValue('newWindow'),
			'orderWay' => Tools::getValue('orderWay', Configuration::get('PS_BLOCKLINK_MOD_ORDERWAY')),
			'title_url' => Tools::getValue('title_url', Configuration::get('PS_BLOCKLINK_MOD_URL')),
		);


		$languages = Language::getLanguages(false);

		foreach ($languages as $lang)
		{
			$fields_values['text'][$lang['id_lang']] = Tools::getValue('text_'.(int)$lang['id_lang']);
			$fields_values['title'][$lang['id_lang']] = Tools::getValue('title', Configuration::get('PS_BLOCKLINK_MOD_TITLE', $lang['id_lang']));
		}

		if (Tools::getIsset('updateblocklink_mod') && (int)Tools::getValue('id') > 0)
			$fields_values = array_merge($fields_values, $this->getLinkById((int)Tools::getValue('id')));

		return $fields_values;
	}

		/**
	 * @param $id
	 *
	 * @return bool|array
	 */
	public function getLinkById($id)
	{
		if ((int)$id > 0)
		{
			$sql = 'SELECT b.`id_blocklink`, b.`url`, b.`new_window` FROM `'._DB_PREFIX_.'blocklink_mod` b WHERE b.id_blocklink='.$id;

			if (!$results = Db::getInstance()->getRow($sql))
				return false;

				$link['id_blocklink'] = $results['id_blocklink'];
				$link['url'] = $results['url'];
				$link['newWindow'] = $results['new_window'];

			$results_lang = Db::getInstance()->executeS('SELECT `id_lang`, `text` FROM '._DB_PREFIX_.'blocklink_mod_lang WHERE `id_blocklink`='.(int)$link['id_blocklink']);
			foreach ($results_lang as $result_lang)
				$link['text'][$result_lang['id_lang']] = $result_lang['text'];
			return $link;
		}

		return false;
	}

					
}
