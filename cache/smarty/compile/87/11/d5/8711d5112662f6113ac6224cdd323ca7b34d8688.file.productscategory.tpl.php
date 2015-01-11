<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:17
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/modules/productscategory/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5943618754a31a956c8929-30386699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8711d5112662f6113ac6224cdd323ca7b34d8688' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/modules/productscategory/productscategory.tpl',
      1 => 1419040313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5943618754a31a956c8929-30386699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a9575e214_05532414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a9575e214_05532414')) {function content_54a31a9575e214_05532414($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false) {?>
<section class="page-product-box flexslider_carousel_block blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading"><?php echo count($_smarty_tpl->tpl_vars['categoryProducts']->value);?>
 <?php echo smartyTranslate(array('s'=>'other products in the same category:','mod'=>'productscategory'),$_smarty_tpl);?>
</h3>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['categoryProducts']->value,'id'=>'category_products_slider'), 0);?>

</section>
<?php }?><?php }} ?>
