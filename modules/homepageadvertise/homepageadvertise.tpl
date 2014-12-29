{if $number_per_line!=5}
{assign var='gridSize' value=12/$number_per_line}
{else}
{assign var='gridSize' value=15}
{/if}
<section id="homepageadvertise" class="row clearfix">
	<ul>
		{foreach from=$images item=image key=i}
		<li class="col-sm-{$gridSize}">
			{if isset($image.link) AND $image.link}<a href="{$image.link}">{/if}
				
				{if isset($image.name) AND $image.name}
				{assign var="imgLink" value="{$modules_dir}homepageadvertise/slides/{$image.name}"}
				<img src="{$link->getMediaLink($imgLink)|escape:'html'}"  alt="{$image.name}" >
				{/if}	

			{if isset($image.link) AND $image.link}</a>{/if}
		</li>
			{/foreach}
		</ul>
</section>