<?php /* Smarty version Smarty-3.1.19, created on 2015-01-11 14:15:22
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/specialslider/specialslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55589843054b2776a862690-10304209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d51ce51ad90cd909f20a2f904d09c64df87b908' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/specialslider/specialslider.tpl',
      1 => 1419040319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55589843054b2776a862690-10304209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'special' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b2776aa1fb18_89333723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2776aa1fb18_89333723')) {function content_54b2776aa1fb18_89333723($_smarty_tpl) {?>
	<!-- MODULE Home Specials Products -->

	<?php if (isset($_smarty_tpl->tpl_vars['special']->value)) {?>
	<section id="specials-products_block_center_mod" class="block products_block flexslider_carousel_block clearfix">
		<h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Price drops','mod'=>'specialslider'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Price drops','mod'=>'specialslider'),$_smarty_tpl);?>
</a></h4>
	
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['special']->value,'id'=>'specials_products_slider'), 0);?>

		
	</section>
	<?php }?>

	<!-- /MODULE specials -->
<?php }} ?>
