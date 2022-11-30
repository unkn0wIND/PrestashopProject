/*
* @category Prestashop
* @category Module
* @author Olivier CLEMENCE <manit4c@gmail.com>
* @copyright  Op'art
* @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
**/

$( document ).ready(function() {
    var payment_button = $("#payment-confirmation button").html();
    $("#checkout-payment-step input").click(function (e) {
        setTimeout(function() {
            if ($("#opart-devis-payment").parent().css('display') == "block"){
                $("#payment-confirmation button").html($("#opart-devis-payment").html());
            } else {
                $("#payment-confirmation button").html(payment_button);
            }
        }, 100);
    })
});

function opartDevisLoadCarrierList() {
    var form=$('#opartDevisForm');
	data=form.serialize();
	//ajax call
	$.ajax({ 
    	type : 'POST', 
        //url :opartDevisControllerUrl+'&ajax_carrier_list&'+data,
        url :opartDevisControllerUrl+'&ajax_carrier_list',
        data : data,
        success : function(data){
            //update id_cart field
            var d = $.parseJSON(data);
           //console.log(data);
            $('#opart_devis_id_cart').val(d.id_cart);
            OpartDevisPopulateSelectCarrier(data);
        }, error : function(XMLHttpRequest, textStatus, errorThrown) { 
           alert('Une erreur est survenue !'); 
        }
    });	
}
function OpartDevisPopulateSelectCarrier(data) {
    console.log(data);
    //decode jsoon;
    data = $.parseJSON(data);
    //console.log(data);
    var carrierSelect = $('#opart_devis_carrier_input');
    carrierSelect.html('');
    for (var key in data) {
        if(key == 'id_cart')
            continue;
        if ($('#selected_carrier').val() == key)
            var selected = 'selected';
        else
            var selected = '';
        carrierSelect.append('<option value="' + key + '" ' + selected + '>' + data[key]['name'] + ' - ' + data[key]['price'] + ' '+currency_sign+' (' + data[key]['taxOrnot'] + ')</option>');
    }
    OpartDevisChangeCarrier();
}
function OpartDevisChangeCarrier() {
    data=$('#opartDevisForm').serialize();
    $.ajax({
        type: 'POST',
        //url: opartDevisControllerUrl + '&change_carrier_cart&' + data,
        url: opartDevisControllerUrl + '&change_carrier_cart',
        data : data,
        success: function (data) {
           if(data != '') {
                var data = $.parseJSON(data);
                $('#opartQuotationTotalQuotationWithTax').html(formatCurrency(data.total_price, currency_format, currency_sign, currency_blank));
                $('#opartQuotationTotalQuotation').html(formatCurrency(data.total_price_without_tax, currency_format, currency_sign, currency_blank));
                $('#opartQuotationTotalTax').html(formatCurrency(data.total_tax, currency_format, currency_sign, currency_blank));
                $('#opartQuotationTotalDiscounts').html(formatCurrency(data.total_discounts, currency_format, currency_sign, currency_blank));
                if(priceDisplay==1)
                    $('#opartQuotationTotalShipping').html(formatCurrency(data.total_shipping_tax_exc, currency_format, currency_sign, currency_blank));					
		else    
                    $('#opartQuotationTotalShipping').html(formatCurrency(data.total_shipping, currency_format, currency_sign, currency_blank));
            }
            //OpartDevisCalcTotalDevis();
        }, error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert('Une erreur est survenue !');
        }
    });
}