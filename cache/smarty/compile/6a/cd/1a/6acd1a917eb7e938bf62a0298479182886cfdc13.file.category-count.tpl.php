<?php /* Smarty version Smarty-3.1.19, created on 2015-01-03 01:54:20
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10082606954a73dbc4461c2-45123099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acd1a917eb7e938bf62a0298479182886cfdc13' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/category-count.tpl',
      1 => 1419040312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10082606954a73dbc4461c2-45123099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a73dbc4af212_46683157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a73dbc4af212_46683157')) {function content_54a73dbc4af212_46683157($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }} ?>
