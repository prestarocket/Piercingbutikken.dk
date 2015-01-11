<?php /* Smarty version Smarty-3.1.19, created on 2015-01-07 18:56:07
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/blocksearch_mod/blocksearch_modh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182496849554ad733795d3d7-66904246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46cf25a6e85d757770924b2c135e98bb2c50171a' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/blocksearch_mod/blocksearch_modh.tpl',
      1 => 1419040314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182496849554ad733795d3d7-66904246',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ad73379e2e44_13182347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad73379e2e44_13182347')) {function content_54ad73379e2e44_13182347($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'more_products_search')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_products_search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'More products »','mod'=>'blocksearch_mod','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_products_search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
