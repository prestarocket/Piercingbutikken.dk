<?php /* Smarty version Smarty-3.1.19, created on 2015-01-11 14:15:25
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/textbanners/textbanners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172994845354b2776db2d0c9-69887793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77e29e48ba67a88ea7e59b4b4a5652f6c10f28e7' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/textbanners/textbanners.tpl',
      1 => 1419040319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172994845354b2776db2d0c9-69887793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'textbanners_banners' => 0,
    'textbanners_perline' => 0,
    'textbanners_border' => 0,
    'textbanners_style' => 0,
    'banner' => 0,
    'gridSize' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b2776decdf35_89577738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2776decdf35_89577738')) {function content_54b2776decdf35_89577738($_smarty_tpl) {?><!-- Text banners -->
<?php if (isset($_smarty_tpl->tpl_vars['textbanners_banners']->value)) {?>
<?php $_smarty_tpl->tpl_vars['gridSize'] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['textbanners_perline']->value, null, 0);?>
<section id="textbannersmodule" class="row clearfix <?php if (!$_smarty_tpl->tpl_vars['textbanners_border']->value) {?>no_borders<?php }?> <?php if ($_smarty_tpl->tpl_vars['textbanners_style']->value==1) {?>iconleft<?php }?>">
<ul>
<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['textbanners_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['banner']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['banner']->value['active']) {?>
		<li class="col-xs-12 col-sm-<?php echo $_smarty_tpl->tpl_vars['gridSize']->value;?>
 <?php if (($_smarty_tpl->tpl_vars['i']->value+1)%$_smarty_tpl->tpl_vars['textbanners_perline']->value==0) {?> last-item<?php }?>"><div class="txtbanner txtbanner<?php echo $_smarty_tpl->tpl_vars['banner']->value['id_banner'];?>
 clearfix">
		<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['icon'])&&$_smarty_tpl->tpl_vars['banner']->value['icon']!='') {?><div class="circle"><i class="<?php echo $_smarty_tpl->tpl_vars['banner']->value['icon'];?>
"></i></div><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['url'])&&$_smarty_tpl->tpl_vars['banner']->value['url']!='') {?><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php }?>
			 <span class="txttitle"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
            <span class="txtlegend"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
            <?php if (isset($_smarty_tpl->tpl_vars['banner']->value['url'])&&$_smarty_tpl->tpl_vars['banner']->value['url']!='') {?></a><?php }?></div></li>
	<?php }?>
<?php } ?>
</ul>
</section>
<?php }?>
<!-- /Text banners -->
<?php }} ?>
