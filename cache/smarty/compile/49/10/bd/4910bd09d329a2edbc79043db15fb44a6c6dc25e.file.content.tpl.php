<?php /* Smarty version Smarty-3.1.19, created on 2014-12-20 02:39:29
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/administration/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20476305225494d3515a97a0-53562037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4910bd09d329a2edbc79043db15fb44a6c6dc25e' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/administration/themes/default/template/content.tpl',
      1 => 1406814056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20476305225494d3515a97a0-53562037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5494d35162f922_14473855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5494d35162f922_14473855')) {function content_5494d35162f922_14473855($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
