{**
* @category Prestashop
* @category Module
* CHEMIN  : /modules/opartdevis/views/templates/front/ps17
* @author Olivier CLEMENCE <manit4c@gmail.com>
* @copyright  Op'art
* @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
**}
{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Vos devis' mod='opartdevis'}
{/block}

{block name='page_content'}

			
			{if isset($deleted) && $deleted=="success"}
                            <div class="alert alert-success">{l s='Quote deleted' mod='opartdevis'}</div>
			{/if}
				{if $quotations && count($quotations)}
				<table id="order-list" class="std">
                                    <thead>
                                        <tr>
                                            <th class="item"></th>
                                            <th class="item">{l s='Date' mod='opartdevis'}</th>
                                        {if isset($expiretime) && $expiretime > 0} 
                                            <th class="item">{l s='Expired date' mod='opartdevis'}</th>
                                        {/if}
                                            <th class="item">{l s='Name' mod='opartdevis'}</th>
                                            <th class="item">&nbsp;</th>
                                            <th class="last_item">&nbsp;</th>
                                            <th class="last_item">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {foreach from=$quotations item=quotation name=myLoop}
                                        <tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
                                            <td class="history_method">{$quotation.id_opartdevis|escape:'htmlall':'UTF-8'}</td>
                                            <td class="history_method">{dateFormat date=$quotation.date_add full=1}</td>
                                        {if isset($quotation.expire_date) && $quotation.expire_date > 0} 
                                            <td class="history_method">{dateFormat date=$quotation.expire_date full=1}</td>
                                        {/if}
                                            <td class="history_method">{$quotation.name|escape:'htmlall':'UTF-8'}</td>
                                            <td class="history_method">       
                                                    {if $quotation.statut == 1}
                                                    <a href="{$link->getModuleLink('opartdevis','load',['opartquotationId'=>$quotation.id_opartdevis,'proceedCheckout'=>true])|escape:'htmlall':'UTF-8'}" class="btn btn-default button button-small">
                                                        <span class="opartDevisHide">{l s='proceed to checkout' mod='opartdevis'}<i class="icon-chevron-right right"></i></span><i class="icon-chevron-right right opartDevisShow"></i>
                                                    </a>
                                                    {else if $quotation.statut == 2}
                                                    <a href="{$link->getPageLink('order-detail', true, NULL, "id_order={$quotation.id_order|intval}")|escape:'html':'UTF-8'}" class="btn btn-default button button-small">
                                                        <span class="opartDevisHide">{l s='Display order' mod='opartdevis'}<i class="icon-chevron-right right"></i></span><i class="icon-chevron-right right opartDevisShow"></i>
                                                    </a>
                                                    {else if $quotation.statut == 3}
                                                        {l s='Expired' mod='opartdevis'}
                                                    {else}
                                                    <a href="{$link->getModuleLink('opartdevis','load',['opartquotationId'=>$quotation.id_opartdevis])|escape:'htmlall':'UTF-8'}" class="btn btn-default button button-small">
                                                        <span class="opartDevisHide">{l s='Modify' mod='opartdevis'}<i class="icon-chevron-right right"></i></span><i class="icon-chevron-right right opartDevisShow"></i>
                                                    </a>
                                                    {/if}
                                            </td>
                                            <td class="history_method">
                                                {if $quotation.statut == 0 || $quotation.statut == 3}
                                                <a href="{$link->getModuleLink('opartdevis','list',['action'=>'delete','opartquotationId'=>$quotation.id_opartdevis])|escape:'htmlall':'UTF-8'}" class="btn btn-default button button-small"><span class="opartDevisHide">{l s='Delete' mod='opartdevis'}<i class="icon-trash right"></i></span><i class="icon-trash right opartDevisShow"></i> </a>
                                                {/if}
                                            </td>
                                            <td class="history_method"><a href="{$link->getModuleLink('opartdevis','showpdf',['idCart'=>$quotation.id_cart])|escape:'htmlall':'UTF-8'}" class="btn btn-default button button-small"><span class="opartDevisHide">{l s='Download' mod='opartdevis'}<i class="icon-download-alt right"></i></span><i class="icon-download-alt right opartDevisShow"> </a></td>
                                        </tr>
                                    {/foreach}
                                    </tbody>
				</table>
				<div id="block-order-detail" class="hidden">&nbsp;</div>
				{else}
					<p class="warning">{l s='You have no quote' mod='opartdevis'}</p>
				{/if}

{/block}