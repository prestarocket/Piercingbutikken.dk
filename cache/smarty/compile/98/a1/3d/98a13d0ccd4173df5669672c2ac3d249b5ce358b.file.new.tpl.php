<?php /* Smarty version Smarty-3.1.19, created on 2015-01-06 00:22:19
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/themeconfigurator/views/templates/admin/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196643821354ab1cab0aa3f9-69642661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a13d0ccd4173df5669672c2ac3d249b5ce358b' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/themeconfigurator/views/templates/admin/new.tpl',
      1 => 1420499827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196643821354ab1cab0aa3f9-69642661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ab1cab1a87a7_34356882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ab1cab1a87a7_34356882')) {function content_54ab1cab1a87a7_34356882($_smarty_tpl) {?>

<div class="new-item">
	<div class="form-group">
		<button type="button" class="btn btn-default btn-lg button-new-item"><i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Add item','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</button>
	</div>
	<div class="item-container">
		<form method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlitems']->value['postAction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" enctype="multipart/form-data" class="item-form defaultForm  form-horizontal">
			<div class="well">
				<div class="language item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Language','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
							<span id="selected-language">
							<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang']==$_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang']) {?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['iso_code'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>
							<?php } ?>
							</span>
							<span class="caret">&nbsp;</span>
						</button>
						<ul class="languages dropdown-menu">
							<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
								<li id="lang-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="new-lang-flag"><a href="javascript:setLanguage(<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
, '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['iso_code'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
');"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>
							<?php } ?>
						</ul>
						<input type="hidden" id="lang-id" name="id_lang" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
					</div>
				</div>
				<div class="title item-field form-group">
					<label class="control-label col-lg-3 "><?php echo smartyTranslate(array('s'=>'Image title','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<input class="form-control" type="text" name="item_title"/>
					</div>
				</div>
				<div class="title_use item-field form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<div class="checkbox">
							<label class="control-label">
								<?php echo smartyTranslate(array('s'=>'Use title in front','mod'=>'themeconfigurator'),$_smarty_tpl);?>

								<input type="checkbox" name="item_title_use" value="1" />
							</label>
						</div>
					</div>
				</div>
				<div class="hook item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Hook','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<select class="form-control fixed-width-lg" name="item_hook" default="home">
							<option value="home">home</option>  
							<option value="top">top</option>
							<option value="left">left</option>
							<option value="right">right</option>
							<option value="footer">footer</option>  
						</select>
					</div>
				</div>
				<div class="image item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<input type="file" name="item_img" />
					</div>
				</div>
				<div class="image_w item-field form-group">

					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image width','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<div class="input-group fixed-width-lg">
							<span class="input-group-addon"><?php echo smartyTranslate(array('s'=>'px'),$_smarty_tpl);?>
</span>
							<input name="item_img_w" type="text" maxlength="4"/>
						</div>
					</div>
				</div>
				<div class="image_h item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image height','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<div class="input-group fixed-width-lg">
							<span class="input-group-addon"><?php echo smartyTranslate(array('s'=>'px'),$_smarty_tpl);?>
</span>
							<input name="item_img_h" type="text" maxlength="4"/>
						</div>
					</div>
				</div>
				<div class="url item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'URL','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<input type="text" name="item_url" placeholder="http://" />
					</div>
				</div>
				<div class="target item-field form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<div class="checkbox">
							<label class="control-label">
								<?php echo smartyTranslate(array('s'=>'Target blank','mod'=>'themeconfigurator'),$_smarty_tpl);?>

								<input type="checkbox" name="item_target" value="1" />
							</label>
						</div>
					</div>
				</div>
				<div class="html item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'HTML','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<textarea name="item_html" cols="65" rows="12"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-7 col-lg-offset-3">
						<button type="button" class="btn btn-default button-new-item-cancel"><i class="icon-remove"></i> <?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</button>
						<button type="submit" name="newItem" class="btn btn-success button-save pull-right"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	function setLanguage(language_id, language_code) {
		$('#lang-id').val(language_id);
		$('#selected-language').html(language_code);
	}
</script>
<?php }} ?>
