<?php /* Smarty version Smarty-3.1.19, created on 2015-01-07 18:56:08
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137434119254ad7338636cd3-74397795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0105c1a5d762a6ce998618f8ad0f18918c8b9892' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1419040313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137434119254ad7338636cd3-74397795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ad73386b4670_87967143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad73386b4670_87967143')) {function content_54ad73386b4670_87967143($_smarty_tpl) {?><div class="header_user_info col-xs-12 col-sm-4 col-sm-offset-<?php echo 4-$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_width'];?>
">
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><i class="icon-user"></i> <span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a> / 
		<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 <i class="icon-signout"></i>
		</a>
	<?php } else { ?>
		<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<i class="icon-signin"></i> <?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php }?>
</div><?php }} ?>
