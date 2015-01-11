<?php /* Smarty version Smarty-3.1.19, created on 2015-01-07 18:56:08
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/advancedslider/advancedslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134008686054ad733892a3f6-92397524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c835a674eeb128b027b689932af1ef4d33978b8' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/advancedslider/advancedslider.tpl',
      1 => 1419040314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134008686054ad733892a3f6-92397524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'advancedslider_slides' => 0,
    'slide' => 0,
    'module_template_dir' => 0,
    's_image' => 0,
    'imgLink' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ad7338a725a0_13920473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad7338a725a0_13920473')) {function content_54ad7338a725a0_13920473($_smarty_tpl) {?>

<!-- Module advancedslider -->
<?php if (isset($_smarty_tpl->tpl_vars['advancedslider_slides']->value)&&count($_smarty_tpl->tpl_vars['advancedslider_slides']->value)>=1) {?>
<section id="sequence-theme">
<div id="sequence">
<ul class="sequence-direction-nav">
<li><span class="sequence-next"></span></li>
<li><span class="sequence-prev"></span></li>
</ul>
		<ul class="sequence-canvas">
<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advancedslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['advancedslider_slides']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['advancedslider_slides']['iteration']++;
?>
	<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
    		<li id="slide_li_<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['advancedslider_slides']['iteration']==1) {?> class="animate-in" <?php }?>>
             <div class="sequence_frame_wrapper seqwrap">
					<?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['title'])&&$_smarty_tpl->tpl_vars['slide']->value['title']!='')||(isset($_smarty_tpl->tpl_vars['slide']->value['legend'])&&$_smarty_tpl->tpl_vars['slide']->value['legend']!='')||(isset($_smarty_tpl->tpl_vars['slide']->value['description'])&&$_smarty_tpl->tpl_vars['slide']->value['description']!='')) {?><div class="slide_<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
">
							<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['title'])&&$_smarty_tpl->tpl_vars['slide']->value['title']!='') {?><h2><?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
</h2><?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['slide']->value['legend'])&&$_smarty_tpl->tpl_vars['slide']->value['legend']!='') {?><h3><?php echo $_smarty_tpl->tpl_vars['slide']->value['legend'];?>
</h3><?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['description'])&&$_smarty_tpl->tpl_vars['slide']->value['description']!='') {?><p class="desc"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</p><?php }?>
						</div><?php }?>
                        <?php  $_smarty_tpl->tpl_vars['s_image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s_image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slide']->value['s_images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s_image']->key => $_smarty_tpl->tpl_vars['s_image']->value) {
$_smarty_tpl->tpl_vars['s_image']->_loop = true;
?>
                    	
                    	<?php $_smarty_tpl->tpl_vars["imgLink"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['module_template_dir']->value)."uploads/".((string)$_smarty_tpl->tpl_vars['s_image']->value['s_image']), null, 0);?>
                        <img class="slide_<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
_image_<?php echo $_smarty_tpl->tpl_vars['s_image']->value['id_image'];?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['imgLink']->value), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['s_image']->value['s_image'];?>
" />
                        <?php } ?>
                        	</div>
						<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['url'])&&$_smarty_tpl->tpl_vars['slide']->value['url']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
" class="slidelink"><?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
</a><?php }?>
				
                    </li>
    	<?php }?>
<?php } ?>
		</ul>
        	<ul class="sequence-pagination">
        <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advancedslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['advancedslider_slides']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['advancedslider_slides']['iteration']++;
?>
	<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>

<li>x</li>
    	<?php }?>
<?php } ?>
	</ul>                    
		
			
</div>
			</section>
<?php }?>
<!-- /Module advancedslider -->
<?php }} ?>
