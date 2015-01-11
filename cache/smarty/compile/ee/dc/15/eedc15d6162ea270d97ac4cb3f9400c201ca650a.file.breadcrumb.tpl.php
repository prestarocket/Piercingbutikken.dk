<?php /* Smarty version Smarty-3.1.19, created on 2015-01-03 01:54:22
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83715626154a73dbe831bd3-90765016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eedc15d6162ea270d97ac4cb3f9400c201ca650a' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/breadcrumb.tpl',
      1 => 1419040312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83715626154a73dbe831bd3-90765016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a73dbe8ff2b7_46113976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a73dbe8ff2b7_46113976')) {function content_54a73dbe8ff2b7_46113976($_smarty_tpl) {?>

<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb clearfix <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width']==0) {?>fullwidth-breadcrumb<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width']==0) {?><div class="container"><?php }?>
	<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a class="home" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
" itemprop="url"><span itemprop="title"><i class="icon-home"></i></span></a></span>
	<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value) {?>
		<span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1) {?>style="display:none;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')) {?>
			<span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'productnavs'),$_smarty_tpl);?>

<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width']==0) {?></div><?php }?>
</div>

<!-- /Breadcrumb --><?php }} ?>
