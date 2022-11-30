{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='catalog/listing/product-list.tpl'}

{block name='product_list_header'}
    <div class="block-category card card-block ">
      <h1 class="h1">{$category.name}</h1>
      {if $category.description}
         <div class="category-cover">
          <img src="{$category.image.large.url}" alt="{$category.image.legend}">
        </div>
		
		<div id="category-description" class="text-muted">{$category.description nofilter}</div>
      {/if}
	  
    </div>
    <!--<div class="text-xs-center hidden-md-up">
      <h1 class="h1">{$category.name}</h1>
    </div>-->
	{if isset($subcategories)}
        {if (isset($display_subcategories) && $display_subcategories eq 1) || !isset($display_subcategories) }
		<!-- Subcategories -->
		<div id="subcategories">
			<p class="subcategory-heading">{l s=''}</p>
			<ul class="clearfix">
			{foreach from=$subcategories item=subcategory}
				<li>
             
					<h5><a class="subcategory-name" href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}">{$subcategory.name|truncate:25:'...'|escape:'html':'UTF-8'}</a></h5>
					{if $subcategory.description}
						<div class="cat_desc">{$subcategory.description}</div>
					{/if}
				</li>
			{/foreach}
			</ul>
		</div>
        {/if}
		{/if}
{/block}
