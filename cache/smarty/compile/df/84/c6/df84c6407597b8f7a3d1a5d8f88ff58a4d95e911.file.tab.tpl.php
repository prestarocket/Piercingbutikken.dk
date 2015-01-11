<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:18
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/manufacturertab/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24965853354a31a968fb429-75100330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df84c6407597b8f7a3d1a5d8f88ff58a4d95e911' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/manufacturertab/views/templates/hook/tab.tpl',
      1 => 1419040316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24965853354a31a968fb429-75100330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showTab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a9696a6d8_46723840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a9696a6d8_46723840')) {function content_54a31a9696a6d8_46723840($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['showTab']->value)) {?>
<li><a href="#manufacturerTab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Brand','mod'=>'manufacturertab'),$_smarty_tpl);?>
</a></li>
<?php }?><?php }} ?>
