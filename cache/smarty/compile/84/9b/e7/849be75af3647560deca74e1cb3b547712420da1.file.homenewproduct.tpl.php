<?php /* Smarty version Smarty-3.1.19, created on 2015-01-11 14:15:23
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/homenewproduct/homenewproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207079684454b2776bebc3d9-39479334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849be75af3647560deca74e1cb3b547712420da1' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/homenewproduct/homenewproduct.tpl',
      1 => 1419040315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207079684454b2776bebc3d9-39479334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b2776c0df674_96345284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2776c0df674_96345284')) {function content_54b2776c0df674_96345284($_smarty_tpl) {?><!-- MODULE Home new Products -->
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
<section id="new-products_block_center_mod" class="block products_block flexslider_carousel_block clearfix">
	<h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'homenewproduct'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'homenewproduct'),$_smarty_tpl);?>
</a></h4>

	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'id'=>'new_products_slider'), 0);?>

	<?php } else { ?>
	<p>
		<?php echo smartyTranslate(array('s'=>'No new products','mod'=>'homenewproduct'),$_smarty_tpl);?>

	</p>
	<?php }?>


</section>
<?php }?>
<!-- /MODULE Home new Products -->
<?php }} ?>
