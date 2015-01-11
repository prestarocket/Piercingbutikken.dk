<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:18
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/addthisplugin/addthisplugin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151841939254a31a967a26d1-07155380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3531308df37c75777dbc2d7e768336746a988c3b' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/addthisplugin/addthisplugin.tpl',
      1 => 1419040314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151841939254a31a967a26d1-07155380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addthisplugin_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a967c9755_47237321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a967c9755_47237321')) {function content_54a31a967c9755_47237321($_smarty_tpl) {?><div class="additional_button">
<div class="addthis_sharing_toolbox"></div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['addthisplugin_id']->value)&&($_smarty_tpl->tpl_vars['addthisplugin_id']->value=="0")) {?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50d44b832bee7204"></script>
<?php } else { ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $_smarty_tpl->tpl_vars['addthisplugin_id']->value;?>
"></script>
<?php }?>

<?php }} ?>
