<?php /* Smarty version Smarty-3.1.19, created on 2014-12-30 22:35:21
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/ratingsproductlist/ratingsproductlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209128667854a31a992af288-79509349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '779dfb08b5af2cb057438318bbcb8712a3ed7705' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/ratingsproductlist/ratingsproductlist.tpl',
      1 => 1419040318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209128667854a31a992af288-79509349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbComments' => 0,
    'empty_grade' => 0,
    'average_total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a31a9930c5c4_47885640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a31a9930c5c4_47885640')) {function content_54a31a9930c5c4_47885640($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['nbComments']->value!=0) {?>
<div class="productlistRating clearfix" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
	<?php if ($_smarty_tpl->tpl_vars['empty_grade']->value==0) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
	<?php if ($_smarty_tpl->tpl_vars['average_total']->value<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>
	<div class="star"></div>
	<?php } else { ?>

	<div class="star star_on"></div>
	<?php }?>
	<?php endfor; endif; ?>
	<?php }?>

	<meta itemprop="worstRating" content = "0" />
	<meta itemprop="bestRating" content = "5" />
	<span class="hidden" itemprop="ratingValue"><?php echo $_smarty_tpl->tpl_vars['average_total']->value;?>
</span> 
	<meta itemprop="reviewcount" content = "<?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
" />
	<span class="nb-comments"><?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
 <?php echo smartyTranslate(array('s'=>'Review(s)','mod'=>'ratingsproductlist'),$_smarty_tpl);?>
</span>
</div>
<?php }?><?php }} ?>
