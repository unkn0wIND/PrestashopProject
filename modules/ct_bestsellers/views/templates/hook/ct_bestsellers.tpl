{*
* 2007-2017 PrestaShop
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
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<section class="bestseller-products">
	<h2 class="h1 products-section-title">
		{l s='Top Sellping Products' d='Modules.Bestsellers.Shop'}
	</h2>
	<div class="products">	
	<div class="product_bestseller">
		{assign var='sliderFor' value=5} <!-- Define Number of product for SLIDER -->
		{if $slider == 1 && $no_prod >= $sliderFor}
			<ul id="bestseller-carousel" class="ct-carousel product_list">
		{else}
			<ul id="bestseller-grid" class="bestseller_grid product_list grid row gridcount">
		{/if}
		
		{foreach from=$products item="product"}
			<li class="{if $slider == 1 && $no_prod >= $sliderFor}item{else}product_item col-xs-12 col-sm-6 col-md-4 col-lg-2{/if}">
				{include file="catalog/_partials/miniatures/product.tpl" product=$product}
			</li>
		{/foreach}
		</ul>
		
		{if $slider == 1 && $no_prod >= $sliderFor}
			<div class="customNavigation">
				<a class="btn prev bestseller_prev">&nbsp;</a>
				<a class="btn next bestseller_next">&nbsp;</a>
			</div>
		{/if}
		
		{if $slider == 0 && $no_prod >= $sliderFor}
		<a class="all-product-link pull-xs-left pull-md-right h4" href="{$allBestSellers}">
			{l s='see all best sellers' d='Modules.Bestsellers.Shop'}<i class="material-icons">&#xE315;</i>
		</a>
		{/if}
		</div>
	</div>
</section>
