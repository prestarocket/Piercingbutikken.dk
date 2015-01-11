<?php /* Smarty version Smarty-3.1.19, created on 2015-01-07 18:56:09
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30267189854ad733960a997-90717513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52119d4533cc384f722a11ed96eb0b389023f45c' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1419040313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30267189854ad733960a997-90717513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ad7339627730_18719496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad7339627730_18719496')) {function content_54ad7339627730_18719496($_smarty_tpl) {?>

<div class="wishlist col-xs-3">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" href="#" rel="nofollow" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
