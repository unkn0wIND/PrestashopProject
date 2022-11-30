{**
* 2007-2017 PrestaShop
*/modules/ct_brandlogo
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

<section class="brands parallax" data-source-url="{$image_url}/parrlax.jpg">
<div class="container">
<div class="row">
	 <h1 class="h1 products-section-title">
		{if $display_link_brand}<a href="http://vintury.fr/index.php?id_category=137&controller=category" title="{l s='Vintury' d='Modules.Brandlist.Shop'}">{/if}
			<span>{l s='Cliquez-ici pour en savoir plus..' d='Modules.Brandlist.Shop'}</span>{l s='Accessoires & Cadeaux' d='Modules.Brandlist.Shop'}
		{if $display_link_brand}</a>{/if}
	</h1> 
  		<center><img src="test.gif" width="200" height="200"/> <img src="test.gif" width="200" height="200"/> <img src="test.gif" width="200" height="200"/> <img src="test.gif" width="200" height="200"/></center>
	</div>
	</div>
</section>
