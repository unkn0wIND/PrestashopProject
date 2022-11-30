$(document).ready(function() {
    opartDevisLoadCarrierList();
    $('#opart_devis_carrier_input').change(function() {
        OpartDevisChangeCarrier();
    });
})

