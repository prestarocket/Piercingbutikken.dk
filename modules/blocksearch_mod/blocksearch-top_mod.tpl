{*
	* 2007-2012 PrestaShop
	*
	* NOTICE OF LICENSE
	*
	* This source file is subject to the Academic Free License (AFL 3.0)
	* that is bundled with this package in the file LICENSE.txt.
	* It is also available through the world-wide-web at this URL:
	* http://opensource.org/licenses/afl-3.0.php
	* If you did not receive a copy of the license and are unable to
	* obtain it through the world-wide-web, please send an email
	* to license@prestashop.com so we can send you a copy immediately.
	*
	* DISCLAIMER
	*
	* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
	* versions in the future. If you wish to customize PrestaShop for your
	* needs please refer to http://www.prestashop.com for more information.
	*
	*  @author PrestaShop SA <contact@prestashop.com>
	*  @copyright  2007-2012 PrestaShop SA
	*  @version  Release: $Revision: 7331 $
	*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
	*  International Registered Trademark & Property of PrestaShop SA
	*}
	<!-- Block search module TOP -->
	<div id="search_block_top_content" class="col-xs-12 col-sm-{4-$warehouse_vars.logo_width/2} {if isset($warehouse_vars.logo_position) && !$warehouse_vars.logo_position} col-sm-pull-{4+$warehouse_vars.logo_width} disable_center{/if} {if isset($warehouse_vars.search_position) && !$warehouse_vars.search_position} on_menu{/if}">
	<div id="search_block_top">

		<form method="get" action="{$link->getPageLink('search', true, null, null, false, null, true)|escape:'html':'UTF-8'}" id="searchbox">

			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="{l s='Search' mod='blocksearch_mod'}" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
			<button type="submit" name="submit_search" class="button-search">
				<span>{l s='Search' mod='blocksearch_mod'}</span>
			</button>
		</form>
	</div></div>


	<!-- /Block search module TOP -->
