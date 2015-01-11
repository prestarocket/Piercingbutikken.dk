<?php /* Smarty version Smarty-3.1.19, created on 2015-01-07 18:56:08
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/homefeatured_mod/homefeatured_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35950347454ad7338b95746-87993720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1644ce6bc698b9dbec7e31070a7e3eff26c27790' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/homefeatured_mod/homefeatured_mod.tpl',
      1 => 1419040315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35950347454ad7338b95746-87993720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ad7338bc00b8_29947197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad7338bc00b8_29947197')) {function content_54ad7338bc00b8_29947197($_smarty_tpl) {?>	<!-- MODULE Home Featured Products -->
	<section id="featured-products_block_center_mod" class="block products_block flexslider_carousel_block clearfix">
		<h4><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'homefeatured_mod'),$_smarty_tpl);?>
</h4>
		<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'id'=>'featured_products_slider'), 0);?>

		<?php } else { ?>
		<p>
			<?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeatured_mod'),$_smarty_tpl);?>

		</p>
		<?php }?>
	</section>
	<!-- /MODULE Home Featured Products -->
<?php }} ?>
