<?php /* Smarty version Smarty-3.1.19, created on 2015-01-06 00:54:39
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/administration/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5325039054ab243fdd78b1-25559090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dadb411120a1f8c20ccc168adda1414d6360c1fe' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/administration/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1406814056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5325039054ab243fdd78b1-25559090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ab243fe0acf4_69331973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ab243fe0acf4_69331973')) {function content_54ab243fe0acf4_69331973($_smarty_tpl) {?>
<a href="#" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ok']->value, ENT_QUOTES, 'UTF-8', true);?>
'; else document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ko']->value, ENT_QUOTES, 'UTF-8', true);?>
'; return false;">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
