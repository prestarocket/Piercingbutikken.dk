<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:18
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/videostab/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86491078254a31a967d68a9-77807209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d1c535a031fa96a3c2ef8dd835c1f31f9a28ab5' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/videostab/views/templates/hook/tab.tpl',
      1 => 1419040319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86491078254a31a967d68a9-77807209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videosNb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a9687a4c2_39941808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a9687a4c2_39941808')) {function content_54a31a9687a4c2_39941808($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['videosNb']->value>0) {?>
<li><a href="#videosTab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Videos','mod'=>'videostab'),$_smarty_tpl);?>
(<?php echo $_smarty_tpl->tpl_vars['videosNb']->value;?>
)</a></li>
<?php }?><?php }} ?>
