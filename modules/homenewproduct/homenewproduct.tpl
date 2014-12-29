<!-- MODULE Home new Products -->
{if isset($products) AND $products}
<section id="new-products_block_center_mod" class="block products_block flexslider_carousel_block clearfix">
	<h4><a href="{$link->getPageLink('new-products')|escape:'html'}" title="{l s='New products' mod='homenewproduct'}">{l s='New products' mod='homenewproduct'}</a></h4>

	{if isset($products) AND $products}
	{include file="$tpl_dir./product-slider.tpl" products=$products id='new_products_slider'}
	{else}
	<p>
		{l s='No new products' mod='homenewproduct'}
	</p>
	{/if}


</section>
{/if}
<!-- /MODULE Home new Products -->
