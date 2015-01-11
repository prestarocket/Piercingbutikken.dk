<?php /* Smarty version Smarty-3.1.19, created on 2015-01-11 14:15:21
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/homepageadvertise/homepageadvertise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43886090854b27769dbc6a1-24898201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9a0de284d55f1b57e4e04a1582ca0c6eae1713' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/homepageadvertise/homepageadvertise.tpl',
      1 => 1419040315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43886090854b27769dbc6a1-24898201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'number_per_line' => 0,
    'images' => 0,
    'gridSize' => 0,
    'image' => 0,
    'modules_dir' => 0,
    'imgLink' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b27769f1cfa1_69977683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b27769f1cfa1_69977683')) {function content_54b27769f1cfa1_69977683($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['number_per_line']->value!=5) {?>
<?php $_smarty_tpl->tpl_vars['gridSize'] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['number_per_line']->value, null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['gridSize'] = new Smarty_variable(15, null, 0);?>
<?php }?>
<section id="homepageadvertise" class="row clearfix">
	<ul>
		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
		<li class="col-sm-<?php echo $_smarty_tpl->tpl_vars['gridSize']->value;?>
">
			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['link'];?>
"><?php }?>
				
				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['name'])&&$_smarty_tpl->tpl_vars['image']->value['name']) {?>
				<?php $_smarty_tpl->tpl_vars["imgLink"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['modules_dir']->value)."homepageadvertise/slides/".((string)$_smarty_tpl->tpl_vars['image']->value['name']), null, 0);?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['imgLink']->value), ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" >
				<?php }?>	

			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?></a><?php }?>
		</li>
			<?php } ?>
		</ul>
</section><?php }} ?>
