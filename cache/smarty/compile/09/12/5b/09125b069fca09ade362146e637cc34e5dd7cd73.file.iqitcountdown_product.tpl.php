<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:21
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/iqitcountdown/iqitcountdown_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177653258154a31a9931aa89-64294872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09125b069fca09ade362146e637cc34e5dd7cd73' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/iqitcountdown/iqitcountdown_product.tpl',
      1 => 1419040315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177653258154a31a9931aa89-64294872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specific_prices' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a99395e14_66283636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a99395e14_66283636')) {function content_54a31a99395e14_66283636($_smarty_tpl) {?><div class="price-countdown price-countdown-product" <?php if (!isset($_smarty_tpl->tpl_vars['specific_prices']->value['to'])||(isset($_smarty_tpl->tpl_vars['specific_prices']->value['to'])&&$_smarty_tpl->tpl_vars['specific_prices']->value['to']=='0000-00-00 00:00:00')) {?> style="display: none;"<?php }?> >
<strong class="price-countdown-title"><?php echo smartyTranslate(array('s'=>'Special price ends on','mod'=>'iqitcountdown'),$_smarty_tpl);?>
:</strong>
<div class="count-down-timer" data-countdown="<?php if (isset($_smarty_tpl->tpl_vars['specific_prices']->value['to'])) {?><?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['to'];?>
<?php }?>"> </div>
</div>




<?php }} ?>
