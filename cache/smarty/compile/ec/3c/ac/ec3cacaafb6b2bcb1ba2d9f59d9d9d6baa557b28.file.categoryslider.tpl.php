<?php /* Smarty version Smarty-3.1.19, created on 2015-01-11 14:15:25
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/categoryslider/categoryslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73630013254b2776d2fa224-70998901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec3cacaafb6b2bcb1ba2d9f59d9d9d6baa557b28' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/categoryslider/categoryslider.tpl',
      1 => 1419040314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73630013254b2776d2fa224-70998901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'link' => 0,
    'tmpCatSlider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b2776d41f071_67459665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2776d41f071_67459665')) {function content_54b2776d41f071_67459665($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&$_smarty_tpl->tpl_vars['categories']->value) {?>
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>

<!-- MODULE Home category Products -->
<section id="categories-products_block_center_mod_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="block products_block flexslider_carousel_block clearfix">
	<h4><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_tmp4);?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></h4>
	<?php if (isset($_smarty_tpl->tpl_vars['category']->value['products'])&&$_smarty_tpl->tpl_vars['category']->value['products']) {?>
	<script type="text/javascript"> createCategorySlider('#categoryslider_slider_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
'); </script>
	<?php $_smarty_tpl->tpl_vars['tmpCatSlider'] = new Smarty_variable("categoryslider_slider_".((string)$_smarty_tpl->tpl_vars['category']->value['id']), null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['category']->value['productimg'])) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['category']->value['products'],'productimg'=>$_smarty_tpl->tpl_vars['category']->value['productimg'],'id'=>$_smarty_tpl->tpl_vars['tmpCatSlider']->value), 0);?>

	<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['category']->value['products'],'id'=>$_smarty_tpl->tpl_vars['tmpCatSlider']->value), 0);?>

	<?php }?>
	<?php } else { ?>
	<p>
		<?php echo smartyTranslate(array('s'=>'No products','mod'=>'categoryslider'),$_smarty_tpl);?>

	</p>
	<?php }?>
</section>
<!-- /MODULE Home category Products -->
<?php } ?>
<?php }?><?php }} ?>
