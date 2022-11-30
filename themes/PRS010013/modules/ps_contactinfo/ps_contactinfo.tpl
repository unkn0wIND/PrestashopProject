{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
* CHEMIN : /themes/PRS010013/modules/ps_contactinfo
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

<div class="block-contact footer-block col-xs-12 col-sm-4 links wrapper">
  
   		<h3 class="text-uppercase block-contact-title hidden-md-down"><i class="material-icons">&#xE55F;</i><a href="{$urls.pages.stores}">{l s='Qui sommes-nous ?' d='Shop.Theme'}</a></h3>
      
		<div class="title clearfix hidden-lg-up" data-target="#block-contact_list" data-toggle="collapse">
		  <span class="h3">{l s='Information' d='Shop.Theme'}</span>
		  <span class="pull-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE313;</i>
				<i class="material-icons remove">&#xE316;</i>
			  </span>
		  </span>
		</div>
	  
	  <ul id="block-contact_list" class="collapse">
	  <li>
	  	
	 <span class="contactdiv"> {$contact_infos.address.formatted nofilter}</span>
	  </li>
	 
      {if $contact_infos.phone}
	   <li>
       
        {* [1][/1] is for a HTML tag. *}
		<i class="material-icons">&#xE324;</i>
        {l s='Appelez-nous : [1]%phone%[/1]'
          sprintf=[
          '[1]' => '<span>',
          '[/1]' => '</span>',
          '%phone%' => $contact_infos.phone
          ]
          d='Shop.Theme'
        }
		</li>
      {/if}
      
      {if $contact_infos.email}
	  <li>
       
        {* [1][/1] is for a HTML tag. *}
		<i class="material-icons">&#xE554;</i>
        {l
          s='Contactez-nous : [1]%email%[/1]'
          sprintf=[
            '[1]' => '<span>',
            '[/1]' => '</span>',
            '%email%' => $contact_infos.email
          ]
          d='Shop.Theme'
        }
		</li>
      {/if}
	  </ul>
  
</div>