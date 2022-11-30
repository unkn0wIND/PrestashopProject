{*
* 2007-2016 PrestaShop
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2016 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}



<div  class="ctcategorylist">
<div id="spe_res">
	<div class="ctcategory-container">
		{if isset($ctcategoryinfos) && $ctcategoryinfos}
		
		{assign var='sliderFor' value=5}
		{assign var='productCount' value=count($ctcategoryinfos)}
		{$categorycount=0}
		{if  $productCount > $sliderFor}
							<div class="customNavigation">
								<a class="btn prev cat_prev">&nbsp;</a>
								<a class="btn next cat_next">&nbsp;</a>
							</div>
						{/if}

		{if $productCount > $sliderFor}
							<ul id="ctcategorylist-carousel" class="ct-carousel product_list product_slider_grid">
						{else}
							<ul id="ctcategorylist" class="product_list grid gridcount product_slider_grid">
						{/if}
						
			{foreach from=$ctcategoryinfos item=ctcategoryinfo}
				<li class="{if $productCount > $sliderFor}slider{else}grid{/if}">
                <div class="categoryblock{$categorycount} categoryblock item">
					<div class="block_content">
						
						
                		{if isset($ctcategoryinfo.cate_id) && $ctcategoryinfo.cate_id}
							{if $ctcategoryinfo.id == $ctcategoryinfo.cate_id.id_category}
								<div class="categoryimage">
									<img src="{$image_url}/{$ctcategoryinfo.cate_id.image}" alt="" class="img-responsive"/>
								</div>
							{/if}
						{/if}
						<div class="categorylist">
							<div class="cate-heading">
								<a href="{$link->getCategoryLink($ctcategoryinfo.category->id_category, $ctcategoryinfo.category->link_rewrite)}">{$ctcategoryinfo.name}</a>
							</div>
							<div class="more"><a href="{$link->getCategoryLink($ctcategoryinfo.category->id_category, $ctcategoryinfo.category->link_rewrite)}">{l s='View more' mod='ctcategorylist'}</a></div>
                            <ul class="subcategory">
							{$categorychildcount = 1}
                            {foreach $ctcategoryinfo.child_cate item=child}
								{if $categorychildcount <=10}
                                <li>
									<a href="{$link->getCategoryLink({$child.id_category},{$child.link_rewrite})}">{$child.name}</a>
								</li>
                                 {/if}
                                 {$categorychildcount = $categorychildcount + 1}
							{/foreach}
							<li>
								<a href="{$link->getCategoryLink($ctcategoryinfo.category->id_category, $ctcategoryinfo.category->link_rewrite)}">
									{l s='View all' mod='ctcategorylist'}</a>
							</li>
						</ul>
						</div>
					</div>
				
				</div>
				</li>
               
				{$categorycount = $categorycount + 1}
			{/foreach}
			</ul>
			
			
		{else}
			<div class="alert alert-info">{l s='No Category is Selected.' mod='ctcategorylist'}</div>
		{/if}
	</div>
	</div>
</div>