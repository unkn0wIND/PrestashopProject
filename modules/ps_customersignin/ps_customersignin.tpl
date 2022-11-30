<div id="_desktop_user_info">
  <div class="user-info">
    {if $logged}
      <a
        class="logout hidden-sm-down"
        href="{$logout_url}"
        rel="nofollow"
      >
        <i class="material-icons">&#xE8A6;</i>
        {l s='Sign out' d='Shop.Theme.Actions'}
      </a>
      <a
        class="account"
        href="{$my_account_url}"
        title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}"
        rel="nofollow"
      >
        <i class="material-icons hidden-md-up logged">&#xE7FF;</i> 
        <span class="hidden-sm-down">{$customerName}</span>
      </a>
    {else}
      <a
        href="{$my_account_url}"
        title="{l s='Log in to your customer account' d='Shop.Theme.CustomerAccount'}"
        rel="nofollow"
      >
		
        <span class="hidden-sm-down"><i class="material-icons">&#xE8A6;</i></span><span>{l s='Sign in' d='Shop.Theme.Actions'}</span>
      </a>
    {/if}
  </div>
</div>