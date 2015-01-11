<?php /* Smarty version Smarty-3.1.19, created on 2015-01-07 18:56:09
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/modules/editorial/editorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61334479954ad7339a2a1d5-66323951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f47a1098cbd4fe1f5d965afd5d677460cea118c4' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/modules/editorial/editorial.tpl',
      1 => 1419040313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61334479954ad7339a2a1d5-66323951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homepage_logo' => 0,
    'editorial' => 0,
    'image_path' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ad7339ad1ce3_07875983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad7339ad1ce3_07875983')) {function content_54ad7339ad1ce3_07875983($_smarty_tpl) {?>

	<!-- Module Editorial -->
	<section id="editorial_block_center" class="editorial_block">
		<div class="row">
			<div class="<?php if ($_smarty_tpl->tpl_vars['homepage_logo']->value) {?>col-md-6 <?php } else { ?> col-md-12<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_title) {?><h1><?php echo stripslashes($_smarty_tpl->tpl_vars['editorial']->value->body_title);?>
</h1><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_subheading) {?><h2><?php echo stripslashes($_smarty_tpl->tpl_vars['editorial']->value->body_subheading);?>
</h2><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_paragraph) {?><div class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['editorial']->value->body_paragraph);?>
</div><?php }?>
			</div><?php if ($_smarty_tpl->tpl_vars['homepage_logo']->value) {?>
			<div class="col-md-6">
				<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_home_logo_link) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editorial']->value->body_home_logo_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['editorial']->value->body_title, ENT_QUOTES, 'UTF-8', true));?>
"><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['homepage_logo']->value) {?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['image_path']->value), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['editorial']->value->body_title, ENT_QUOTES, 'UTF-8', true));?>
" class="img-responsive" /><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_home_logo_link) {?></a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_logo_subheading) {?><p id="editorial_image_legend"><?php echo stripslashes($_smarty_tpl->tpl_vars['editorial']->value->body_logo_subheading);?>
</p><?php }?>
			</div><?php }?>

		</div>
	</section>
	<!-- /Module Editorial -->
<?php }} ?>
