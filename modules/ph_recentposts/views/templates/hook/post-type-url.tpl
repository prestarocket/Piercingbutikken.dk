{if isset($post.banner) && Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')}
	<div class="post-thumbnail">
		<a href="{$post.external_url|escape:'html':'UTF-8'}" title="{l s='External link to' mod='ph_recentposts'} {$post.title|escape:'html':'UTF-8'}">
			{if $blogLayout eq 'full'}
				<img src="{$post.banner_wide}" alt="{$post.title}" class="img-responsive" />
			{else}
				<img src="{$post.banner_thumb}" alt="{$post.title}" class="img-responsive" />
			{/if}
		</a>
	</div>
{/if}

<div class="post-title">
	<h2>
		<a href="{$post.external_url|escape:'html':'UTF-8'}" title="{l s='External link to' mod='ph_recentposts'} {$post.title}">
			{$post.title|escape:'html':'UTF-8'} <i class="fa fa-external-link"></i>
		</a>
	</h2>
</div><!-- .post-title -->

{if Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')}
<div class="post-content">
	{$post.short_content|strip_tags:'UTF-8'}

	{if Configuration::get('PH_BLOG_DISPLAY_MORE')}
	<div class="post-read-more">
		<a href="{$post.external_url|escape:'html':'UTF-8'}" title="{l s='Visit' mod='ph_recentposts'}">
			{l s='Visit' mod='ph_recentposts'} <i class="fa fa-chevron-right"></i>
		</a>
	</div><!-- .post-read-more -->
	{/if}
</div><!-- .post-content -->	
{/if}

<div class="post-additional-info post-meta-info">
	{if Configuration::get('PH_BLOG_DISPLAY_DATE')}
		<span class="post-date">
			<i class="fa fa-calendar"></i> {$post.date_add|date_format:Configuration::get('PH_BLOG_DATEFORMAT')}
		</span>
	{/if}

	{if Configuration::get('PH_BLOG_DISPLAY_CATEGORY')}
		<span class="post-category">
			<i class="fa fa-tags"></i> <a href="{$post.category_url}" title="">{$post.category}</a>
		</span>
	{/if}

	{if isset($post.author) && !empty($post.author) && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')}
		<span class="post-author">
			<i class="fa fa-user"></i> {$post.author}
		</span>
	{/if}
</div><!-- .post-additional-info post-meta-info -->