<?php /* Smarty version Smarty-3.1.19, created on 2015-01-07 18:56:10
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/facebookslide/facebookslide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117595965154ad733a719a99-12275803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '231a7f74ccbcd681dfa2df88bf3558475407c71e' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/facebookslide/facebookslide.tpl',
      1 => 1419040315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117595965154ad733a719a99-12275803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'fbmod_position' => 0,
    'fbmod_link' => 0,
    'fbmod_faces' => 0,
    'fbmod_stream' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ad733a7548f0_10268544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad733a7548f0_10268544')) {function content_54ad733a7548f0_10268544($_smarty_tpl) {?><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
_<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
/all.js#xfbml=1&appId=345551085518968";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fblike-box" <?php if ($_smarty_tpl->tpl_vars['fbmod_position']->value==1) {?>class="left_fb"<?php } else { ?>class="right_fb"<?php }?>>
	<div class="outside">
		<div class="inside">
			<div class="fb-like-box" data-href="<?php echo $_smarty_tpl->tpl_vars['fbmod_link']->value;?>
" data-width="292" data-show-faces="<?php if ($_smarty_tpl->tpl_vars['fbmod_faces']->value==1) {?>true<?php } else { ?>false<?php }?>" data-stream="<?php if ($_smarty_tpl->tpl_vars['fbmod_stream']->value==1) {?>true<?php } else { ?>false<?php }?>" data-show-border="false" data-header="false"></div>

		</div>
	</div>
	<div class="belt"><i class="icon-facebook"></i></div>
</div><?php }} ?>
