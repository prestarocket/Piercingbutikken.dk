<?php /* Smarty version Smarty-3.1.19, created on 2015-01-07 18:56:09
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/blockfooterhtml/blockfooterhtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113356760654ad7339edd889-15406584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02db1937408653a7e9817ef9e2d2f64e9899a211' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/blockfooterhtml/blockfooterhtml.tpl',
      1 => 1419040314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113356760654ad7339edd889-15406584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerhtml_val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ad7339ef8e28_06888342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad7339ef8e28_06888342')) {function content_54ad7339ef8e28_06888342($_smarty_tpl) {?>

<!-- MODULE Block contact infos -->
<?php if (isset($_smarty_tpl->tpl_vars['footerhtml_val']->value)&&$_smarty_tpl->tpl_vars['footerhtml_val']->value) {?>
<section id="block_footer_html" class="footer-block col-xs-12 col-sm-3">
<?php echo $_smarty_tpl->tpl_vars['footerhtml_val']->value;?>

</section>
	<?php }?>
<!-- /MODULE Block contact infos -->
<?php }} ?>
