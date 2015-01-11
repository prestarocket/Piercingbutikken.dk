<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 01:30:34
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/modules/blockcart/crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105346122454a1f22a312b48-42850123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e04d931b4314ceaf966b65a345db12b058b3a4e6' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/modules/blockcart/crossselling.tpl',
      1 => 1419040313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105346122454a1f22a312b48-42850123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a1f22a3458b9_66018356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1f22a3458b9_66018356')) {function content_54a1f22a3458b9_66018356($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)>0) {?>
	<div class="crossseling-content">
		<h5 class="crossseling_pop_title"><?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'blockcart'),$_smarty_tpl);?>
</h5>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['orderProducts']->value,'id'=>'crossseling_popup_products_slider'), 0);?>

	</div>
<?php }?><?php }} ?>
