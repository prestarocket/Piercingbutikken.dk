<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 01:57:31
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/customcontactpage/customcontactpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124444598554a1f87b01f471-85553071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aac15b0d785dfb6fb32433c74d08a151f8903318' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/customcontactpage/customcontactpage.tpl',
      1 => 1419900742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124444598554a1f87b01f471-85553071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customcontactpage_company' => 0,
    'customcontactpage_address' => 0,
    'customcontactpage_phone' => 0,
    'customcontactpage_email' => 0,
    'customcontactpage_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a1f87b0c9a45_46374355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1f87b0c9a45_46374355')) {function content_54a1f87b0c9a45_46374355($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<section id="customcontactpage">
	<div class="row">
	<!--<div class="col-xs-12 col-sm-8">-->
    <!--<div id="mapcontact"></div>-->
	</div>	
	<div class="text_info col-xs-12 col-sm-4">
        <h4 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'customcontactpage'),$_smarty_tpl);?>
</h4>
        <ul>
            <li>
                <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_company']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_address']->value!='') {?>
            	<li>
            		<i class="icon-map-marker"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_address']->value, ENT_QUOTES, 'UTF-8', true);?>

            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_phone']->value!='') {?>
            	<li>
            		<i class="icon-phone"></i> <?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'customcontactpage'),$_smarty_tpl);?>
 
            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_email']->value!='') {?>
            	<li>
            		<i class="icon-envelope-alt"></i> <?php echo smartyTranslate(array('s'=>'Email:','mod'=>'customcontactpage'),$_smarty_tpl);?>
 
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_text']->value!='') {?>
            	<li class="customcontactpage_text">
            	<?php echo $_smarty_tpl->tpl_vars['customcontactpage_text']->value;?>

            	</li>
            <?php }?>
        </ul>
    </div></div>
</section>
<!-- /MODULE Block contact infos -->
<?php }} ?>
