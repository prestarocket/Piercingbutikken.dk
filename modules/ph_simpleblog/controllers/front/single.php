<?php
/*
* @author    Krystian Podemski <podemski.krystian@gmail.com>
* @site
* @copyright  Copyright (c) 2013-2014 Krystian Podemski - www.PrestaHome.com
* @license    You only can use module, nothing more!
*/
require_once _PS_MODULE_DIR_ . 'ph_simpleblog/ph_simpleblog.php';

class PH_SimpleBlogSingleModuleFrontController extends ModuleFrontController
{
	public $simpleblog_post_rewrite;
	public $simpleblog_post_name;
	public $simpleblog_post_description;
	public $simpleblog_post_thumbnail;
	public $simpleblog_post_image;
	public $simpleblog_post_url;
	public $SimpleBlogPost;

	public function init()
	{
		parent::init();

		$simpleblog_post_rewrite = Tools::getValue('rewrite', 0);

		if($simpleblog_post_rewrite)
			$this->simpleblog_post_rewrite = $simpleblog_post_rewrite;

		$id_lang = Context::getContext()->language->id;

		$SimpleBlogPost = SimpleBlogPost::getByRewrite($this->simpleblog_post_rewrite, $id_lang);

		if(!$SimpleBlogPost->isAccessGranted())
			Tools::redirect('index.php?controller=404');

		if(!Validate::isLoadedObject($SimpleBlogPost) || Validate::isLoadedObject($SimpleBlogPost) && !$SimpleBlogPost->active)
		{
			Tools::redirect('index.php?controller=404');
		}
		
		if(Validate::isLoadedObject($SimpleBlogPost) && $this->simpleblog_post_rewrite != $SimpleBlogPost->link_rewrite)
		{
			Tools::redirect(SimpleBlogPost::getLink($SimpleBlogPost->link_rewrite, $SimpleBlogPost->category_rewrite));
		}

		if(!empty($SimpleBlogPost->meta_title))
			$this->context->smarty->assign('meta_title', $SimpleBlogPost->meta_title);
		else
			$this->context->smarty->assign('meta_title', $SimpleBlogPost->title);

		if(!empty($SimpleBlogPost->meta_description))
		{
			$this->context->smarty->assign('meta_description', $SimpleBlogPost->meta_description);
		}

		if(!empty($SimpleBlogPost->meta_keywords))
		{
			$this->context->smarty->assign('meta_keywords', $SimpleBlogPost->meta_keywords);
		}
			
		// if(!Validate::isLoadedObject($SimpleBlogPost))
		// {
		// 	$SimpleBlogPost = SimpleBlogPost::getByRewrite($this->simpleblog_post_rewrite, false);

		// 	if(Validate::isLoadedObject($SimpleBlogPost))
		// 	{
		// 		header('HTTP/1.1 301 Moved Permanently');
		// 		header('Location: '.SimpleBlogPost::getLink($SimpleBlogPost->link_rewrite, $SimpleBlogPost->category_rewrite));
		// 	}
		// 	else
		// 	{
		// 		Tools::redirect('index.php?controller=404');
		// 	}
		// }

		$this->SimpleBlogPost = $SimpleBlogPost;
		$this->simpleblog_post_name = $SimpleBlogPost->title;
		$this->simpleblog_post_description = strip_tags($SimpleBlogPost->short_content);
		$this->simpleblog_post_image = $SimpleBlogPost->banner ? Context::getContext()->shop->getBaseURL().'modules/ph_simpleblog/covers/'.$SimpleBlogPost->id.'.'.$SimpleBlogPost->cover : '';
		$this->simpleblog_post_thumbnail = $SimpleBlogPost->banner ? Context::getContext()->shop->getBaseURL().'modules/ph_simpleblog/covers/'.$SimpleBlogPost->id.'.'.$SimpleBlogPost->cover : '';
		$this->simpleblog_post_url = $SimpleBlogPost->url;
		$this->simpleblog_post_category_rewrite = $SimpleBlogPost->category_rewrite;

	}

	public function initContent()
	{
		$this->context->controller->addJqueryPlugin('cooki-plugin');
		$this->context->controller->addJqueryPlugin('cookie-plugin');
		$this->context->controller->addjqueryPlugin('fancybox');

		$sidebar = Configuration::get('PH_BLOG_LAYOUT');

		if($sidebar == 'left_sidebar')
		{
			$this->display_column_left = true;
			$this->display_column_right = false;
		}
		elseif($sidebar == 'right_sidebar') {
			$this->display_column_left = false;
			$this->display_column_right = true;
		}
		elseif($sidebar == 'full_width')
		{
			$this->display_column_left = false;
			$this->display_column_right = false;
		}
		else
		{
			$this->display_column_left = true;
			$this->display_column_right = true;
		}
		
		parent::initContent();

		$this->SimpleBlogPost->increaseViewsNb();

		/**

		Support for SmartShortcode module from CodeCanyon

		**/
		if(file_exists(_PS_MODULE_DIR_ . 'smartshortcode/smartshortcode.php'))
  			require_once(_PS_MODULE_DIR_ . 'smartshortcode/smartshortcode.php');

			if(Module::isEnabled('smartshortcode'))
	        {
		        $smartshortcode = new SmartShortCode();
		        $this->SimpleBlogPost->content = $smartshortcode->parse($this->SimpleBlogPost->content);
	        }
			
		$this->context->smarty->assign('post', $this->SimpleBlogPost);
		$this->context->smarty->assign('is_16', (version_compare(_PS_VERSION_, '1.6.0', '>=') === true) ? true : false);
		$this->context->smarty->assign('gallery_dir', _MODULE_DIR_.'ph_simpleblog/galleries/');

		// Comments
		if($this->SimpleBlogPost->allow_comments == 1)
			$allow_comments = true;
		elseif($this->SimpleBlogPost->allow_comments == 2)
			$allow_comments = false;
		elseif($this->SimpleBlogPost->allow_comments == 3)
			$allow_comments = Configuration::get('PH_BLOG_COMMENT_ALLOW');
		else
			$allow_comments = false;

		$this->context->smarty->assign('allow_comments', $allow_comments);

		if($allow_comments)
		{
			$comments = SimpleBlogComment::getComments($this->SimpleBlogPost->id_simpleblog_post);
			$this->context->smarty->assign('comments', $comments);
		}

		$this->setTemplate('single.tpl');
	}

	public function postProcess()
	{
		$errors = array();
		$confirmation = '1';

		if(Tools::isSubmit('submitNewComment') && Tools::getValue('id_simpleblog_post'))
		{
			$SimpleBlogPost = $this->SimpleBlogPost;

			if (Tools::getValue('comment_content') && Validate::isGenericName(Tools::getValue('comment_content')))
                $comment_content = Tools::getValue('comment_content');
            else 
                $errors[] = $this->module->l('Please write something and remember that HTML is not allowed in comment content.');

            if (!Validate::isInt(Tools::getValue('id_parent'))) 
                die('FATAL ERROR [2]');
            else 
                $id_parent = Tools::getValue('id_parent');

            $ip_address = Tools::getRemoteAddr();

            if(sizeof($errors))
                $this->errors = $errors;
            else
            {
            	$comment = new SimpleBlogComment();
			    $comment->id_simpleblog_post = (int)Tools::getValue('id_simpleblog_post');
			    $comment->id_parent = $id_parent;
			    $comment->id_customer = (int)$this->context->customer->id;
			    $comment->name = $this->context->customer->firstname.' '.substr($this->context->customer->lastname, 0, 1);;
			    $comment->email = $this->context->customer->email;
			    $comment->comment = $comment_content;
			    $comment->active = Configuration::get('PH_BLOG_COMMENT_AUTO_APPROVAL') ? 1 : 0;
			    $comment->ip = Tools::getRemoteAddr();
			    
			    if($comment->add())
			    {
			    	if(!Configuration::get('PH_BLOG_COMMENT_AUTO_APPROVAL'))
			    		$confirmation = '2';

			    	$link = $this->context->link->getModuleLink('ph_simpleblog', 'single', array('confirmation' => $confirmation, 'rewrite' => $SimpleBlogPost->link_rewrite, 'sb_category' => $SimpleBlogPost->category_rewrite, 'id_lang' => $this->context->language->id));

			    	if(Configuration::get('PH_BLOG_COMMENT_NOTIFICATIONS'))
			    	{
			    		$toName = strval(Configuration::get('PS_SHOP_NAME'));
			    		$fromName = strval(Configuration::get('PS_SHOP_NAME'));
			    		$to = Configuration::get('PH_BLOG_COMMENT_NOTIFY_EMAIL');
			    		$from = Configuration::get('PS_SHOP_EMAIL');
						$customer = $this->context->customer;

			    		Mail::Send(
							$this->context->language->id,
							'new_comment',
							sprintf(Mail::l('New comment on %1$s blog for article: %2$s', $this->context->language->id), $toName, $SimpleBlogPost->title),
							array(
								'{lastname}' => $customer->lastname,
								'{firstname}' => $customer->firstname,
								'{post_title}' => $SimpleBlogPost->title,
								'{post_link}' => $SimpleBlogPost->url,
								'{comment_content}' => $comment_content,
							),
							$to, $toName, $from, $fromName, null, null, _PS_MODULE_DIR_.'ph_simpleblog/mails/'
						);
			    	}

			    	Tools::redirect($link);
			    }
			    else
			    {
			    	$this->errors = $this->module->l('Something went wrong! Comment can not be added!');
			    }
            }
		}
		return parent::postProcess();
	}
}