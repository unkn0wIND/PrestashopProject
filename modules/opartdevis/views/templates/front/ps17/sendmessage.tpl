{**
* @category Prestashop
* @category Module
* @author Olivier CLEMENCE <manit4c@gmail.com>
* @copyright  Op'art
* @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
**}
{extends file='page.tpl'}

{block name="page_content"}
<div class="content">
    <div class="row">
        <section id="center_column" class="span9">			
            {capture name=path}{l s='Request quotation' mod='opartdevis'}{/capture}
            <h1>{l s='Request quotation' mod='opartdevis'}</h1>
            {if isset($errors)}
                {include file='_partials/form-errors.tpl' errors=$errors}
            {/if}
            {if isset($confirmation)}
            <p class="alert alert-success">{l s='Your request has been successfully sent to our team.' mod='opartdevis'}</p>
            {/if}
            <form action="{$link->getModuleLink('opartdevis', 'sendmessage')|escape:'htmlall':'UTF-8'}" method="post" class="contact-form-box" enctype="multipart/form-data" id="opartDevisForm">
                {if $customer_id==0}
                <div class="clearfix">
                    <h4>{l s='Personnal informations' mod='opartdevis'}</h4>
                    <div class="form-group">
                        <div class="opartDevisConteneurFieldCustomerInformation">
                            <label for="customer_firstname"> {l s='Firstname' mod='opartdevis'}*</label>
                            <input type="text" name="customer_firstname" value="{if isset($smarty.post.customer_firstname)}{$smarty.post.customer_firstname|escape:'htmlall':'UTF-8'}{/if}" id="customer_firstname" />
                        </div>
                        <div class="opartDevisConteneurFieldCustomerInformation">
                            <label for="customer_lastname"> {l s='Lastname' mod='opartdevis'}*</label>
                            <input type="text" name="customer_lastname" value="{if isset($smarty.post.customer_lastname)}{$smarty.post.customer_lastname|escape:'htmlall':'UTF-8'}{/if}" id="customer_lastname" />
                        </div>
                        <div class="opartDevisConteneurFieldCustomerInformation">
                            <label for="customer_email"> {l s='Email' mod='opartdevis'}*</label>
                            <input type="text" name="customer_email" value="{if isset($smarty.post.customer_email)}{$smarty.post.customer_email|escape:'htmlall':'UTF-8'}{/if}" id="customer_email" />
                        </div>
                        <div class="opartDevisConteneurFieldCustomerInformation opartDevisConteneurFieldCustomerInformationLast">
                            <label for="customer_phone"> {l s='Phone' mod='opartdevis'}</label>
                            <input type="text" name="customer_phone" value="{if isset($smarty.post.customer_phone)}{$smarty.post.customer_phone|escape:'htmlall':'UTF-8'}{/if}" id="customer_phone" />
                        </div>
                    </div>
                </div>
                {/if}
                <!-- addresses -->
                {if count($addresses)>0}
                <div class="clearfix">
                    <h4>{l s='Choose your addresses' mod='opartdevis'}</h4>
                    <div class="form-group opartDevisConteneurTextarea">
                        <label for="delivery_address"> {l s='Delivery addresse' mod='opartdevis'}</label>
                        <select name="delivery_address" id="delivery_address" class="delivery_address">
                            {foreach $addresses as $address}
                            <option value="{$address.id_address|escape:'htmlall':'UTF-8'}">{$address.firstname|escape:'htmlall':'UTF-8'} {$address.lastname|escape:'htmlall':'UTF-8'} - {$address.address1|escape:'htmlall':'UTF-8'}{if $address.address2!=""} {$address.address2|escape:'htmlall':'UTF-8'}{/if} - {$address.postcode|escape:'htmlall':'UTF-8'} {$address.city|escape:'htmlall':'UTF-8'}</option>
                            {/foreach}
                        </select>
                    </div>                        
                    <div class="form-group opartDevisConteneurTextarea">
                        <label for="invoice_address"> {l s='Invoice addresse' mod='opartdevis'}</label>
                        <select name="invoice_address" id="invoice_address" class="invoice_address">
                            {foreach $addresses as $address}
                            <option value="{$address.id_address|escape:'htmlall':'UTF-8'}">{$address.firstname|escape:'htmlall':'UTF-8'} {$address.lastname|escape:'htmlall':'UTF-8'} - {$address.address1|escape:'htmlall':'UTF-8'}{if $address.address2!=""} {$address.address2|escape:'htmlall':'UTF-8'}{/if} - {$address.postcode|escape:'htmlall':'UTF-8'} {$address.city|escape:'htmlall':'UTF-8'}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                {else}
                <div class="clearfix">
                    <h4>{l s='Add your addresses' mod='opartdevis'}</h4>
                    <div class="form-group opartDevisConteneurTextarea opartDevisConteneurTextareaLeft">
                        <label for="delivery_address_text"> {l s='Delivery addresse' mod='opartdevis'}</label>
                        <textarea class="form-control" id="delivery_address_text" name="delivery_address_text">{if isset($smarty.post.delivery_address_text)}{$smarty.post.delivery_address_text|escape:'htmlall':'UTF-8'}{/if}</textarea>
                    </div>                       
                    <div class="form-group opartDevisConteneurTextarea opartDevisConteneurTextareaRight">
                        <label for="invoice_address_text"> {l s='Invoice addresse' mod='opartdevis'}</label>
                        <textarea class="form-control" id="invoice_address_text" name="invoice_address_text">{if isset($smarty.post.invoice_address_text)}{$smarty.post.invoice_address_text|escape:'htmlall':'UTF-8'}{/if}</textarea>
                    </div>                        
                </div>
                {/if}
                <div class="clearfix">
                    <h4>{l s='Please explain us your request. ' mod='opartdevis'}*</h4>
                    <div class="form-group">
                        <textarea class="form-control" id="quotation_message" name="quotation_message">{if isset($smarty.post.quotation_message)}{$smarty.post.quotation_message|escape:'htmlall':'UTF-8'}{/if}</textarea>
                    </div>
                </div>
                <p class="opartDevisInfos">{l s='Fields with a * are required' mod='opartdevis'}</p>
                <p class="cart_navigation clearfix">
                    <a href="{$link->getPageLink('my-account', true)|escape:'htmlall':'UTF-8'}" class="btn btn-default button button-small">
                        <span><i class="icon-chevron-left"></i> {l s='Back to Your Account' mod='opartdevis'}</span>
                    </a>
                    <a href="{$base_dir|escape:'htmlall':'UTF-8'}" class="btn btn-default button button-small">
                        <span><i class="icon-chevron-left"></i> {l s='Home' mod='opartdevis'}</span>
                    </a>
                    <button type="submit" name="submitMessage" id="submitMessage" class="button btn btn-default button-medium"><span><i class="icon-save"></i> {l s='Send your request' mod='opartdevis'}</span></button>
                </p>
            </form>
        </section>
    </div>
</div>
                {/block}