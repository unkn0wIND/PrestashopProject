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

<!-- Block links module -->
<div id="links_block_footer" class="block links">
	
	
	<ul id="ct_footerlink" class="block_content ">
	{foreach from=$ct_footerlink_links item=ct_footerlink_link}
		{if isset($ct_footerlink_link.$lang)} 
			<li>
				<a href="{$ct_footerlink_link.url}" title="{$ct_footerlink_link.$lang}" {if $ct_footerlink_link.newWindow} onclick="window.open(this.href);return false;"{/if}>{$ct_footerlink_link.$lang}</a></li>
		{/if}
	{/foreach}
	</ul>
</div>
<!-- /Block links module -->
