<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:17
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/crossselling_mod/views/templates/hook/crossselling_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120414166354a31a9560f0e7-12611598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdb1287b8b9fd154143af9ac7c15b9a4c4497901' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/crossselling_mod/views/templates/hook/crossselling_mod.tpl',
      1 => 1419040314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120414166354a31a9560f0e7-12611598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a95693581_11244219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a95693581_11244219')) {function content_54a31a95693581_11244219($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)) {?>
    <section id="crossselling" class="page-product-box flexslider_carousel_block">
    	<h3 class="productscategory_h2 page-product-heading">
            <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
                <?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'crossselling_mod'),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>'We recommend','mod'=>'crossselling_mod'),$_smarty_tpl);?>

            <?php }?>
        </h3>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['orderProducts']->value,'id'=>'crossseling_products_slider'), 0);?>

    </section>
<?php }?><?php }} ?>
