<?php /* Smarty version Smarty-3.1.19, created on 2015-01-03 01:51:49
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/textbanners/views/templates/hook/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89688919454a73d256d8889-78871798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78dfeab726b5dfa6d218965be95da5b3b523156a' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/textbanners/views/templates/hook/list.tpl',
      1 => 1419040319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89688919454a73d256d8889-78871798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'banners' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a73d25928629_79713014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a73d25928629_79713014')) {function content_54a73d25928629_79713014($_smarty_tpl) {?>
<div class="panel"><h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Banners list','mod'=>'textbanners'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a id="desc-product-new"
			class="list-toolbar-btn"
			href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=textbanners&addbanner">
			<label>
				<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new"
					data-html="true">
					<i class="process-icon-new "></i>
				</span>
			</label>
		</a>
	</span>
	</h3>
	<div id="bannersContent">
		<div id="banners">
			<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
				<div id="banners_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id_banner'];?>
" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows "></i></span>
						</div>
						<div class="col-md-8">
							<h4 class="pull-left">#<?php echo $_smarty_tpl->tpl_vars['banner']->value['id_banner'];?>
 - <?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
</h4>
							<div class="btn-group-action pull-right">
								<?php echo $_smarty_tpl->tpl_vars['banner']->value['status'];?>

								
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=textbanners&id_banner=<?php echo $_smarty_tpl->tpl_vars['banner']->value['id_banner'];?>
">
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'textbanners'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=textbanners&delete_id_banner=<?php echo $_smarty_tpl->tpl_vars['banner']->value['id_banner'];?>
">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'textbanners'),$_smarty_tpl);?>

								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div><?php }} ?>
