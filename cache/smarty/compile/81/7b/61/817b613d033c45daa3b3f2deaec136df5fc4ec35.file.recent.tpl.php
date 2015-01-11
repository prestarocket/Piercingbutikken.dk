<?php /* Smarty version Smarty-3.1.19, created on 2015-01-11 14:15:25
         compiled from "/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/ph_recentposts/views/templates/hook/recent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12075841154b2776d449818-37877760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '817b613d033c45daa3b3f2deaec136df5fc4ec35' => 
    array (
      0 => '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/modules/ph_recentposts/views/templates/hook/recent.tpl',
      1 => 1419040316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12075841154b2776d449818-37877760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recent_posts' => 0,
    'link' => 0,
    'post' => 0,
    'blogLayout' => 0,
    'columns' => 0,
    'post_type' => 0,
    'is_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b2776d780eb4_49848234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2776d780eb4_49848234')) {function content_54b2776d780eb4_49848234($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/tools/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/Nicklas/Documents/Web/Piercingbutikken.dk/tools/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['recent_posts']->value)&&count($_smarty_tpl->tpl_vars['recent_posts']->value)) {?>
<?php $_smarty_tpl->tpl_vars['is_category'] = new Smarty_variable(false, null, 0);?> 
<section class="ph_simpleblog simpleblog-recent block">
	<p class="title_block">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ph_simpleblog','list');?>
" title="<?php echo smartyTranslate(array('s'=>'Recent posts','mod'=>'ph_recentposts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Recent posts','mod'=>'ph_recentposts'),$_smarty_tpl);?>
</a>
	</p>
	<div class="row simpleblog-posts" itemscope="itemscope" itemtype="http://schema.org/Blog">
			<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>

				<div class="simpleblog-post-item simpleblog-post-type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_type'], ENT_QUOTES, 'UTF-8', true);?>

				<?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='grid'&&$_smarty_tpl->tpl_vars['columns']->value=='3') {?>
					col-md-4 col-sm-6 col-xs-12 col-ms-12 <?php echo smarty_function_cycle(array('values'=>"first-in-line,second-in-line,last-in-line"),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['blogLayout']->value=='grid'&&$_smarty_tpl->tpl_vars['columns']->value=='4') {?>
					col-md-3 col-sm-6 col-xs-12 col-ms-12 <?php echo smarty_function_cycle(array('values'=>"first-in-line,second-in-line,third-in-line,last-in-line"),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['blogLayout']->value=='grid'&&$_smarty_tpl->tpl_vars['columns']->value=='2') {?>
					col-md-6 col-sm-6 col-xs-12 col-ms-12 <?php echo smarty_function_cycle(array('values'=>"first-in-line,last-in-line"),$_smarty_tpl);?>

				<?php } else { ?>
				col-md-12
				<?php }?>" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

					<div class="post-item">
						<?php $_smarty_tpl->tpl_vars['post_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['post_type'], null, 0);?>

						
						

						<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/thumbnail.tpl")) {?>
							<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php } else { ?>
							<?php if (isset($_smarty_tpl->tpl_vars['post']->value['banner'])&&Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')) {?>
							<div class="post-thumbnail" itemscope itemtype="http://schema.org/ImageObject">
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Permalink to','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="contentUrl">
									<?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='full') {?>
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_wide'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" itemprop="thumbnailUrl" />
									<?php } else { ?>
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_thumb'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" itemprop="thumbnailUrl"/>
									<?php }?>
								</a>
							</div><!-- .post-thumbnail -->
							<?php }?>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/title.tpl")) {?>
							<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php } else { ?>
							<div class="post-title">
								<h2 itemprop="headline">
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Permalink to','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

									</a>
								</h2>
							</div><!-- .post-title -->
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/description.tpl")) {?>
							<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/description.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php } else { ?>
							<?php if (Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')) {?>
							<div class="post-content" itemprop="text">
								<?php echo strip_tags($_smarty_tpl->tpl_vars['post']->value['short_content']);?>


								<?php if (Configuration::get('PH_BLOG_DISPLAY_MORE')) {?>
								<div class="post-read-more">
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Read more','mod'=>'ph_recentposts'),$_smarty_tpl);?>
">
										<?php echo smartyTranslate(array('s'=>'Read more','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <i class="fa fa-chevron-right"></i>
									</a>
								</div><!-- .post-read-more -->
								<?php }?>
							</div><!-- .post-content -->	
							<?php }?>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/meta.tpl")) {?>
							<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php } else { ?>
							<div class="post-additional-info post-meta-info">
								<?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')) {?>
									<span class="post-date">
										<i class="fa fa-calendar"></i> <time itemprop="datePublished" datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],'c');?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],Configuration::get('PH_BLOG_DATEFORMAT'));?>
</time>
									</span>
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['is_category']->value==false&&Configuration::get('PH_BLOG_DISPLAY_CATEGORY')) {?>
									<span class="post-category">
										<i class="fa fa-tags"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['category_url'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8', true);?>
" rel="category"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8', true);?>
</a>
									</span>
								<?php }?>

								<?php if (isset($_smarty_tpl->tpl_vars['post']->value['author'])&&!empty($_smarty_tpl->tpl_vars['post']->value['author'])&&Configuration::get('PH_BLOG_DISPLAY_AUTHOR')) {?>
									<span class="post-author">
										<i class="fa fa-user"></i> <span itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
</span>
									</span>
								<?php }?>
							</div><!-- .post-additional-info post-meta-info -->
						<?php }?>
					</div><!-- .post-item -->
				</div><!-- .simpleblog-post-item -->

			<?php } ?>
		</div><!-- .row -->
</section><!-- .ph_simpleblog.recent -->
<?php }?><?php }} ?>
