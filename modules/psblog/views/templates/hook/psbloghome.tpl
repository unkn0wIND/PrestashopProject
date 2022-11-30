{**
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
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2017 PrestaShop SA
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
* International Registred Trademark & Property of PrestaShop SA
*}

<!-- Block Last post-->

<div class="lastest_block block tmblog-latest">
	
	 		
				<div class="title-inner"><h2 class="h1 products-section-title text-uppercase">
					{l s='Our blogs' d="Modules.PsBlog.Shop"}
				</h2></div>
			<div class="swiper-navigation">
					 <div class="swiper-button-prev"><i class="material-icons">&#xE314;</i></div>
<div class="swiper-button-next"><i class="material-icons">&#xE315;</i></div>
</div> 
				<div class="homeblog-inner swiper-container">
					{assign var='no_blog' value=count($blogs)}
					
				
						<div class="swiper-wrapper">				
					{foreach from=$blogs item=blog name="item_name" }
						<div class="blog-post swiper-slide">
							<div class="blog-item">
							<div class="blog-image text-xs-center">
								{if $blog.image}
									
										<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="link">
											<img src="{$blog.preview_url|escape:'html':'UTF-8'}" alt="{$blog.title|escape:'html':'UTF-8'}" class="img-fluid"/>
										</a>
										<!--<span class="more"><a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="link"><i class="material-icons">link</i></a></span>-->
									
								{/if}
								
								</div>
								<div class="blog-meta-block">	  
														
									<!--	<span class="blog-cat"> 
											<span class="fa fa-list"> {l s='In' d='Modules.PsBlog.Shop'}:</span> 
											<a href="{$blog.category_link|escape:'html':'UTF-8'}" title="{$blog.category_title|escape:'html':'UTF-8'}">{$blog.category_title|escape:'html':'UTF-8'}</a>
										</span>-->
									<div class="blog-content-wrap">	
										<!--<span class="blog-author">
											<span class="fa fa-user"> {l s='Posted By' d='Modules.PsBlog.Shop'}:</span> 
											<a href="{$blog.author_link|escape:'html':'UTF-8'}" title="{$blog.author|escape:'html':'UTF-8'}">{$blog.author|escape:'html':'UTF-8'}</a> 
										</span>-->	
										<div class="blog-meta">							
					
										<!--<span class="blog-hit">
											<i class="fa fa-heart"></i>{l s='Hit' d='Modules.PsBlog.Shop'}: 
											{$blog.hits|intval}
										</span>-->
										<span class="blog-created">
											<!--<span class="fa fa-calendar"> {l s='On' d='Modules.PsBlog.Shop'}: </span> -->
											<time class="date" datetime="{strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8'}">
												{l s=strtotime($blog.date_add)|date_format:"%e"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'}		<!-- day of month -->
												{l s=strtotime($blog.date_add)|date_format:"%b"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'},		<!-- month-->
												{l s=strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'}		<!-- year -->
											</time>
										</span>
									</div>		
										<h4 class="title">
											<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|escape:'html':'UTF-8'}</a>
										</h4>
										
										<div class="blog-shortinfo">
											{$blog.description|strip_tags:'UTF-8'|truncate:40:'...' nofilter}{* HTML form , no escape necessary *}
											<div class="readmore">
												<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="btn">{l s='Read more' d='Modules.PsBlog.Shop'}</a>
											</div>
										</div>					
									</div>
								</div>
							</div>
						</div>
					{/foreach}
					
					</div>
					
					
			</div>
			
		</div>	
	
<!-- /Block Last Post -->