{if ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' < $specific_prices.to )}
<span class="price-countdown">
<strong class="price-countdown-title">{l s='Special price ends on' mod='iqitcountdown'}:</strong>
<span class="count-down-timer" data-countdown="{$specific_prices.to}"> </span>
</span>
{/if}



