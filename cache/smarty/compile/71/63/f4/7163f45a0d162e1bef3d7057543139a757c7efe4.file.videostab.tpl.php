<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:18
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/videostab/views/templates/hook/videostab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117288349954a31a96975630-85093645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7163f45a0d162e1bef3d7057543139a757c7efe4' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/videostab/views/templates/hook/videostab.tpl',
      1 => 1419040319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117288349954a31a96975630-85093645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videos' => 0,
    'video' => 0,
    'this_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a969f3d51_82019059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a969f3d51_82019059')) {function content_54a31a969f3d51_82019059($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['videos']->value) {?>
<section class="page-product-box tab-pane fade" id="videosTab">
    <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['video']->value['type']==0) {?>
        <div class="videoWrapper videotab_video"><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['video']->value['video']);?>
</div>
        <?php } else { ?>
        <div class="mp4content videotab_video">
        <video style="width:100%;height:100%;" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
uploads/<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['video']->value['video']);?>
" type="video/mp4" 
	id="player1" 
	controls="controls" preload="none"></video>
    </div>
        <?php }?>
    <?php } ?>
</section>
<?php }?><?php }} ?>
