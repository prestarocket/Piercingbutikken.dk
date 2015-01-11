<?php /* Smarty version Smarty-3.1.19, created on 2015-01-07 18:56:09
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/iqitcountdown/iqitcountdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122036141654ad73395db378-21340683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b444cad4469a625309ea81ab62286e82469b9ee' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/iqitcountdown/iqitcountdown.tpl',
      1 => 1419040315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122036141654ad73395db378-21340683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specific_prices' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ad73396019f7_96773747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad73396019f7_96773747')) {function content_54ad73396019f7_96773747($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/tools/smarty/plugins/modifier.date_format.php';
?><?php if ((smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<$_smarty_tpl->tpl_vars['specific_prices']->value['to'])) {?>
<span class="price-countdown">
<strong class="price-countdown-title"><?php echo smartyTranslate(array('s'=>'Special price ends on','mod'=>'iqitcountdown'),$_smarty_tpl);?>
:</strong>
<span class="count-down-timer" data-countdown="<?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['to'];?>
"> </span>
</span>
<?php }?>



<?php }} ?>
