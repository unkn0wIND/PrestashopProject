{**
 * 2007-2017 PrestaShop
 *
 * Chemin : /themes/PRS010013/templates/
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
{extends file='page.tpl'}
    {block name='page_content_container'}

<section id="content" class="page-home">
        {block name='page_content_top'}{/block}
        {hook h='displayTopColumn'}
		<div class="container">
				<div class="row">
		<section class="ct-hometabcontent">
				
				<h1 class="h1 products-section-title text-uppercase"><span>{l s='Spring Season' d='Shop.Theme.Catalog'}</span>{l s='New Arrivals' d='Shop.Theme.Catalog'}</h1>
				<div class="tabs">
					<ul id="home-page-tabs" class="nav nav-tabs clearfix">
						
						<li class="nav-item">
							<a data-toggle="tab" href="#newProduct" class="newProduct nav-link" data-text="{l s='New products' d='Shop.Theme.catalog'}">
								<span>{l s='New products' d='Shop.Theme.Catalog'}</span>
							</a>
						</li>

						<li class="nav-item">
							<a data-toggle="tab" href="#featureProduct" class="featureProduct nav-link active" data-text="{l s='Produits vedettes' d='Shop.Theme.catalog'}">
								<span>{l s='Les bouteilles du mois !' d='Shop.Theme.Catalog'}</span>
							</a>
						</li>
					</ul>
					
					<div class="tab-content">
						<div id="featureProduct" class="ct_productinner tab-pane active">	
							{hook h='displayCtFeature'}
						</div>
						<div id="newProduct" class="ct_productinner tab-pane">
							{hook h='displayCtNew'}
						</div>
						</div>
										
				</div>
			</section>
			</div>
					</div>
		{hook h='displayBrands'}
		<div class="container">
				<div class="row">	
		{block name='page_content'}
		{block name='hook_home'}
         {$HOOK_HOME nofilter}
        {/block}
        {/block}
		</div>
					</div>
</section>
{/block}
