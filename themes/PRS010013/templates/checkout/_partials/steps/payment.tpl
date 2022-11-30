* chemin : /themes/PRS010013/templates/checkout/_partials/steps

{extends file='checkout/_partials/steps/checkout-step.tpl'}

{block name='step_content'}

  {hook h='displayPaymentTop'}

  

  

  {if $show_final_summary}
    {include file='checkout/_partials/order-final-summary.tpl'}
  {/if}

  <div id="payment-confirmation">
    <div class="ps-shown-by-js">
      <button type="submit" {if !$selected_payment_option} disabled {/if} class="btn btn-primary center-block">
        {l s='Le paiement s\'effectura directement au point de retrait' d='Shop.Theme.Checkout'}
      </button>
      {if $show_final_summary}
        <article class="alert alert-danger m-t-2 js-alert-payment-conditions" role="alert" data-alert="danger">
          {l
            s='Please make sure you\'ve chosen a [1]payment method[/1] and accepted the [2]terms and conditions[/2].'
            sprintf=[
              '[1]' => '<a href="#checkout-payment-step">',
              '[/1]' => '</a>',
              '[2]' => '<a href="#conditions-to-approve">',
              '[/2]' => '</a>'
            ]
            d='Shop.Theme.Checkout'
          }
        </article>
      {/if}
    </div>
    <div class="ps-hidden-by-js">
      {if $selected_payment_option and $all_conditions_approved}
        <label for="pay-with-{$selected_payment_option}">{l s='Order with an obligation to pay' d='Shop.Theme.Checkout'}</label>
      {/if}
    </div>
  </div>

  {hook h='displayPaymentByBinaries'}

  <div class="modal fade" id="modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      </div>
    </div>
  </div>
{/block}
