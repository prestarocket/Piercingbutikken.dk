<?php /* Smarty version Smarty-3.1.19, created on 2015-01-03 01:54:20
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200265059654a73dbc0c6f82-16136649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4edc10e66edfa3a6edefba1e8c4d8bf211477e36' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/themes/warehouse/category.tpl',
      1 => 1419040312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200265059654a73dbc0c6f82-16136649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'scenes' => 0,
    'link' => 0,
    'warehouse_vars' => 0,
    'description_short' => 0,
    'subcategories' => 0,
    'products' => 0,
    'categoryNameComplement' => 0,
    'subcategory' => 0,
    'img_cat_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a73dbc3a53a6_62993333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a73dbc3a53a6_62993333')) {function content_54a73dbc3a53a6_62993333($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['category']->value->id&&$_smarty_tpl->tpl_vars['category']->value->active) {?>
    	<?php if ($_smarty_tpl->tpl_vars['scenes']->value||$_smarty_tpl->tpl_vars['category']->value->id_image) {?>
			<div class="content_scene_cat     <?php if ($_smarty_tpl->tpl_vars['scenes']->value) {?> content_scene_cat_scene<?php }?>">
            	 <?php if ($_smarty_tpl->tpl_vars['scenes']->value) {?>
                 	<div class="content_scene">
                        <!-- Scenes -->
                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./scenes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('scenes'=>$_smarty_tpl->tpl_vars['scenes']->value), 0);?>

                        </div>
                    <?php } else { ?>
                    <!-- Category image -->
                   <div class="content_scene_cat_bg">
                    <?php if ($_smarty_tpl->tpl_vars['category']->value->id_image) {?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value->link_rewrite,$_smarty_tpl->tpl_vars['category']->value->id_image,'category_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="" class="img-responsive cat_img_bg"/><?php }?>
                  <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['desc_style'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['desc_style']==0&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['show_desc']) {?> 
                          <?php if ($_smarty_tpl->tpl_vars['category']->value->description) {?>
                            <div class="cat_desc">
                            <?php if (Tools::strlen($_smarty_tpl->tpl_vars['category']->value->description)>350) {?>
                                <div id="category_description_short" class="rte"><?php echo $_smarty_tpl->tpl_vars['description_short']->value;?>
</div>
                            <?php } else { ?>
                                <div class="rte"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
                            <?php }?>
                            </div>
                        <?php }?>
                     <?php }?>
                     </div>
                  <?php }?>
            </div>
		<?php }?>
		<div class="page-heading<?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)&&!$_smarty_tpl->tpl_vars['products']->value)||(isset($_smarty_tpl->tpl_vars['subcategories']->value)&&$_smarty_tpl->tpl_vars['products']->value)||!isset($_smarty_tpl->tpl_vars['subcategories']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?> product-listing<?php }?> clearfix"><h1 class="page-heading<?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)&&!$_smarty_tpl->tpl_vars['products']->value)||(isset($_smarty_tpl->tpl_vars['subcategories']->value)&&$_smarty_tpl->tpl_vars['products']->value)||!isset($_smarty_tpl->tpl_vars['subcategories']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?> product-listing<?php }?>"><span class="cat-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['categoryNameComplement']->value)) {?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryNameComplement']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span></h1><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
        <?php if (((isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['desc_style'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['desc_style']==1&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['show_desc'])&&$_smarty_tpl->tpl_vars['category']->value->description)||($_smarty_tpl->tpl_vars['category']->value->description&&!$_smarty_tpl->tpl_vars['scenes']->value&&!$_smarty_tpl->tpl_vars['category']->value->id_image&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['show_desc'])) {?> 

                    <?php if ($_smarty_tpl->tpl_vars['category']->value->description) {?>
                            <div class="cat_desc cat_desc_container clearfix">
                            <?php if (Tools::strlen($_smarty_tpl->tpl_vars['category']->value->description)>350) {?>
                                <div id="category_description_short" class="rte"><?php echo $_smarty_tpl->tpl_vars['description_short']->value;?>
</div>
                                <div id="category_description_full" class="unvisible rte"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value->id_category,$_smarty_tpl->tpl_vars['category']->value->link_rewrite), ENT_QUOTES, 'UTF-8', true);?>
" class="lnk_more btn btn-default pull-right"><i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
</a>
                            <?php } else { ?>
                                <div class="rte"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
                            <?php }?>
                            </div>
                        <?php }?>

        <?php }?>
		      <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['show_subcategories'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['show_subcategories']==1) {?> 
        <?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
		<!-- Subcategories -->
		<div id="subcategories">
			<ul class="clearfix">
			<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
				<li>
                	<div class="subcategory-image">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="img">
						<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']) {?>
							<img class="replace-2x" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="" />
						<?php } else { ?>
							<img class="replace-2x" src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
default-medium_default.jpg" alt="" />
						<?php }?>
					</a>
                   	</div>
					<h5><a class="subcategory-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['subcategory']->value['name'],25,'...'), ENT_QUOTES, 'UTF-8', true),350);?>
</a></h5>
					<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['description']) {?>
						<div class="cat_desc"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['description'];?>
</div>
					<?php }?>
				</li>
			<?php } ?>
			</ul>
		</div>
		<?php }?>
            <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
			<div class="content_sortPagiBar clearfix">
            	<div class="sortPagiBar clearfix">
            		<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                	<?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'aboveProductList'),$_smarty_tpl);?>

                <div class="top-pagination-content clearfix">
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
				</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

			<div class="content_sortPagiBar">
				<div class="bottom-pagination-content clearfix">
                    <?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

				</div>
			</div>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->id) {?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'This category is currently unavailable.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?><?php }} ?>
