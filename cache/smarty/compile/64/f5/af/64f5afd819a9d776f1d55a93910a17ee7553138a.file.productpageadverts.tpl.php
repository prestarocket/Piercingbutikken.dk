<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:21
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/productpageadverts/productpageadverts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184303708454a31a993a4793-25228069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f5afd819a9d776f1d55a93910a17ee7553138a' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/productpageadverts/productpageadverts.tpl',
      1 => 1419040318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184303708454a31a993a4793-25228069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'climages' => 0,
    'image' => 0,
    'modules_dir' => 0,
    'imgLink' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a9945ab36_41840530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a9945ab36_41840530')) {function content_54a31a9945ab36_41840530($_smarty_tpl) {?><section id="productpageadverts" class="flexslider loading_mainslider">
	<ul class="slides">
		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['climages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
		<li>
			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['link'];?>
">
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['name'])&&$_smarty_tpl->tpl_vars['image']->value['name']) {?>
				<?php $_smarty_tpl->tpl_vars["imgLink"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['modules_dir']->value)."productpageadverts/slides/".((string)$_smarty_tpl->tpl_vars['image']->value['name']), null, 0);?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['imgLink']->value), ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" >
				<?php }?>	

				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?>
			</a>    
			<?php }?></li>
			<?php } ?>
		</ul>
</section><?php }} ?>
