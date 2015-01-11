<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:21
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/productsnavpn/productsnavpn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183469373654a31a99e607e9-56317566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37e3c232fa91a3e686d1076f962fcd32b1be1302' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/productsnavpn/productsnavpn.tpl',
      1 => 1419040318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183469373654a31a99e607e9-56317566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prevLink' => 0,
    'nextLink' => 0,
    'prevName' => 0,
    'nextName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a99ea8054_42705026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a99ea8054_42705026')) {function content_54a31a99ea8054_42705026($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['prevLink']->value!=null||$_smarty_tpl->tpl_vars['nextLink']->value!=null) {?>
<div id="productsnavpn" class="pull-right"> 
<?php if ($_smarty_tpl->tpl_vars['prevLink']->value!=null) {?><a href="<?php echo $_smarty_tpl->tpl_vars['prevLink']->value;?>
" class="p_prev_link transition-300" title="<?php echo smartyTranslate(array('s'=>'Previous product','mod'=>'productsnavpn'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['prevName']->value;?>
"><i class="icon-angle-left"></i></a><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['nextLink']->value!=null) {?><a href="<?php echo $_smarty_tpl->tpl_vars['nextLink']->value;?>
" class="p_next_link transition-300" title="<?php echo smartyTranslate(array('s'=>'Next product','mod'=>'productsnavpn'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['nextName']->value;?>
"><i class="icon-angle-right"></i></a><?php }?>
</div>
<?php }?><?php }} ?>
