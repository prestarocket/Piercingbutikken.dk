<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:18
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/manufacturertab/views/templates/hook/manufacturertab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54431253954a31a96d490f8-40533668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '511ee3c5804ce00732bbeea0ea9e59ad83faa266' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/manufacturertab/views/templates/hook/manufacturertab.tpl',
      1 => 1419040316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54431253954a31a96d490f8-40533668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a96d5c794_40971145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a96d5c794_40971145')) {function content_54a31a96d5c794_40971145($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tabContent']->value)) {?>
<section class="page-product-box tab-pane fade" id="manufacturerTab">
<div class="rte"><?php echo $_smarty_tpl->tpl_vars['tabContent']->value;?>
</div>
</section>
<?php }?><?php }} ?>
