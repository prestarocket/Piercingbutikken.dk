<?php /* Smarty version Smarty-3.1.19, created on 2014-12-20 02:23:45
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/admin/themes/default/template/controllers/customer_threads/helpers/view/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10495391065494cfa19b5989-23760961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '362d439f923b40020f5b1437b1d4c5389fb96925' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/admin/themes/default/template/controllers/customer_threads/helpers/view/message.tpl',
      1 => 1406814056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10495391065494cfa19b5989-23760961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'initial' => 0,
    'type' => 0,
    'current_employee' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5494cfa1b5c902_30821411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5494cfa1b5c902_30821411')) {function content_5494cfa1b5c902_30821411($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['message']->value['id_employee']) {?>
	<?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable("customer", null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable("employee", null, 0);?>
<?php }?>	

<div class="message-item<?php if ($_smarty_tpl->tpl_vars['initial']->value) {?>-initial-body<?php }?>">
<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
	<div class="message-avatar">
		<div class="avatar-md">
			<?php if ($_smarty_tpl->tpl_vars['type']->value=='customer') {?>
				<i class="icon-user icon-3x"></i>
			<?php } else { ?>
				<?php if (isset($_smarty_tpl->tpl_vars['current_employee']->value->firstname)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['employee_image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_employee']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
			<?php }?>
		</div>
	</div>
<?php }?>
	<div class="message-body">
		<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
			<h4 class="message-item-heading">
				<i class="icon-mail-reply text-muted"></i> 
					<?php if ($_smarty_tpl->tpl_vars['type']->value=='customer') {?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['customer_name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['employee_name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
			</h4>
		<?php }?>
		<span class="message-date">&nbsp;<i class="icon-calendar"></i> - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>0),$_smarty_tpl);?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['message']->value['date_add'],11,5);?>
</span>
		<?php if (isset($_smarty_tpl->tpl_vars['message']->value['file_name'])) {?> <span class="message-attachment">&nbsp;<i class="icon-link"></i> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>"Attachment"),$_smarty_tpl);?>
</a></span><?php }?>
		<p class="message-item-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true);?>
</p>
	</div>
</div><?php }} ?>
