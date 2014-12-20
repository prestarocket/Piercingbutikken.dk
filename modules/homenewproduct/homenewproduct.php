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
 *  @version  Release: $Revision: 7048 $
 *  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_'))
	exit ;

class Homenewproduct extends Module {
	private $_html = '';
	private $_postErrors = array();

	function __construct() {
		$this -> name = 'homenewproduct';
		$this -> tab = 'front_office_features';
		$this -> version = '0.9';
		$this -> author = 'IQIT-COMMERCE.COM';
		$this -> need_instance = 0;
		$this->bootstrap = true;

		parent::__construct();

		$this -> displayName = $this->l('New Products slider');
		$this -> description = $this->l('Displays New Products in the middle of your homepage.');
	}

	function install() {
		$this -> _clearCache('homenewproduct.tpl');
		if (!Configuration::updateValue('HOME_new_NBR', 8) || !parent::install() || !$this -> registerHook('displayHome') || !$this -> registerHook('displayHeader') || !$this -> registerHook('addproduct') || !$this -> registerHook('updateproduct') || !$this -> registerHook('deleteproduct'))
			return false;
		return true;
	}

	public function getContent() {
		$output = '';
		if (Tools::isSubmit('submitModule')) {
			$nbr = (int)(Tools::getValue('nbr'));
			if (!$nbr OR $nbr <= 0 OR !Validate::isInt($nbr))
				$errors[] = $this->l('Invalid number of products');
			else
				Configuration::updateValue('HOME_new_NBR', (int)($nbr));
			if (isset($errors) AND sizeof($errors))
				$output .= $this -> displayError(implode('<br />', $errors));
			else
				$output .= $this -> displayConfirmation($this->l('Settings updated'));
			$this -> _clearCache('homenewproduct.tpl');
		}
		return $output.$this->renderForm();
	}

public function renderForm()
	{
		$fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Settings'),
					'icon' => 'icon-cogs'
				),
				'input' => array(
					array(
						'type' => 'text',
						'label' => $this->l('Number of products displayed'),
						'name' => 'nbr',
						'desc' => $this->l('The number of products displayed on homepage (default: 10)'),
					),
				),
				'submit' => array(
					'title' => $this->l('Save')
				)
			),
		);
		
		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$this->fields_form = array();

		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitModule';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->tpl_vars = array(
			'fields_value' => $this->getConfigFieldsValues(),
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id
		);

		return $helper->generateForm(array($fields_form));
	}
	
	public function getConfigFieldsValues()
	{
		return array(
			'nbr' => Tools::getValue('HOME_new_NBR', Configuration::get('HOME_new_NBR')),
		);
	}

	public function hookDisplayHeader($params) {
		if (!isset($this->context->controller->php_self) || $this->context->controller->php_self != 'index')
			return;
		$this -> context -> controller -> addCss($this -> _path . 'homenewproduct.css');
		$this -> context -> controller -> addJS($this -> _path . 'homenewproduct.js');
	}

	public function hookDisplayHome($params) {
		if (!$this -> isCached('homenewproduct.tpl', $this -> getCacheId())) {
			$products = Product::getNewProducts($this->context->language->id, 0, (int)(Configuration::get('HOME_new_NBR')));

			$this->addColorsToProductList($products);

			
			if(method_exists('Product','getProductsImgs'))
		{
			$image_array=array();
			for($i=0;$i<count($products);$i++)
			{
				if(isset($products[$i]['id_product']))
					$image_array[$products[$i]['id_product']]= Product::getProductsImgs($products[$i]['id_product']);				
			}
			
			$this->smarty->assign('productimg',(isset($image_array) AND $image_array) ? $image_array : NULL);
		}
			$this -> smarty -> assign(array('products' => $products, 'add_prod_display' => Configuration::get('PS_ATTRIBUTE_CATEGORY_DISPLAY'), 'homeSize' => Image::getSize(ImageType::getFormatedName('home')) ));
		}
		return $this -> display(__FILE__, 'homenewproduct.tpl', $this -> getCacheId());
	}

	public function hookAddProduct($params) {
		$this -> _clearCache('homenewproduct.tpl');
	}

	protected function getCacheId($name = null) {
		return parent::getCacheId('homenewproduct|' . date('Ymd'));
	}

	public function hookUpdateProduct($params) {
		$this -> _clearCache('homenewproduct.tpl');
	}

	public function hookDeleteProduct($params) {
		$this -> _clearCache('homenewproduct.tpl');
	}

	public function addColorsToProductList(&$products)
{
	if (!is_array($products) || !count($products) || !file_exists(_PS_THEME_DIR_.'product-list-colors.tpl'))
		return;

	$products_need_cache = array();
	foreach ($products as &$product)
		if (!$this->isCached(_PS_THEME_DIR_.'product-list-colors.tpl', $this->getColorsListCacheId($product['id_product'])))
			$products_need_cache[] = (int)$product['id_product'];

		unset($product);

		$colors = false;
		if (count($products_need_cache))
			$colors = Product::getAttributesColorList($products_need_cache);

		Tools::enableCache();
		foreach ($products as &$product)
		{
			$tpl = $this->context->smarty->createTemplate(_PS_THEME_DIR_.'product-list-colors.tpl');
			if (isset($colors[$product['id_product']]))
				$tpl->assign(array(
					'id_product' => $product['id_product'],
					'colors_list' => $colors[$product['id_product']],
					'link' => Context::getContext()->link,
					'img_col_dir' => _THEME_COL_DIR_,
					'col_img_dir' => _PS_COL_IMG_DIR_
					));

			if (!in_array($product['id_product'], $products_need_cache) || isset($colors[$product['id_product']]))
				$product['color_list'] = $tpl->fetch(_PS_THEME_DIR_.'product-list-colors.tpl', $this->getColorsListCacheId($product['id_product']));
			else
				$product['color_list'] = '';
		}
		Tools::restoreCacheSettings();
	}

	protected function getColorsListCacheId($id_product)
	{
		return Product::getColorsListCacheId($id_product);
	}
}
