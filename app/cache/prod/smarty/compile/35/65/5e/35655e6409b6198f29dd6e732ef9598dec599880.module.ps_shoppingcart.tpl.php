<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "module:ps_shoppingcart/ps_shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11725547675a9515ef428589-10519608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcart/ps_shoppingcart.tpl',
      1 => 1512637384,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '11725547675a9515ef428589-10519608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'refresh_url' => 0,
    'cart_url' => 0,
    'product' => 0,
    'customization' => 0,
    'field' => 0,
    'subtotal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9515ef449529_10347521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9515ef449529_10347521')) {function content_5a9515ef449529_10347521($_smarty_tpl) {?><div id="_desktop_cart">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header blockcart-header dropdown js-dropdown">
		 
			<a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"  <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?> data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"<?php }?>> 
				<i class="material-icons shopping-cart"></i>
				<span class="hidden-md-down title"><?php echo smartyTranslate(array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
				<span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
				<span class="hidden-md-down item"><?php echo smartyTranslate(array('s'=>'Article(s) - ','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
				<span class="hidden-md-down value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
			</a>
		 
		
	  <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>       
		<div class="cart_block block exclusive dropdown-menu">
			<div class="block_content">
				<div class="cart_block_list">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
					
					<div class="cart-item">					
						<div class="cart-image">
							 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
							 <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'quotes'), ENT_QUOTES, 'UTF-8');?>
">
							 </a>
						</div>
						
						<div class="cart-info">
						<span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
&nbsp;x</span>
						<span class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],10,'...'), ENT_QUOTES, 'UTF-8');?>
</a></span>
						<span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
						<a class = "remove-from-cart"
							  rel                         = "nofollow"
							  href                        = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
							  data-link-action            = "delete-from-cart"
							  data-id-product             = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
							  data-id-product-attribute   = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
							  data-id-customization   	  = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
						>
							<i class="material-icons pull-xs-left">delete</i>
						</a>
						<?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
							<div class="customizations">
								<ul>
									<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
										<li>
											<span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
											<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
" class="remove-from-cart" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
											<ul>
												<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
													<li>
														<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
														<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
															<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span>
														<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
															<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
														<?php }?>
													</li>
												<?php } ?>
											</ul>
										</li>
									<?php } ?>
								</ul>
							</div>
						<?php }?>
						</div>
					</div>
					
				<?php } ?>
				</div>
				
				
			  <div class="card cart-summary">
					<div class="card-block">
						<?php  $_smarty_tpl->tpl_vars["subtotal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subtotal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subtotal"]->key => $_smarty_tpl->tpl_vars["subtotal"]->value) {
$_smarty_tpl->tpl_vars["subtotal"]->_loop = true;
?>
						  <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['value']&&$_smarty_tpl->tpl_vars['subtotal']->value['type']!=='tax') {?>
							<div class="cart-summary-line" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
							  <span class="label<?php if ('products'===$_smarty_tpl->tpl_vars['subtotal']->value['type']) {?> js-subtotal<?php }?>">
								<?php if ('products'==$_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>
								  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>

								<?php } else { ?>
								  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>

								<?php }?>
							  </span>
							  <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
							  <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type']==='shipping') {?>
								  <div><small class="value"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['subtotal']->value),$_smarty_tpl);?>
</small></div>
							  <?php }?>
							</div>
						  <?php }?>
						<?php } ?>						
					</div>
										
					<div class="card-block">
						<div class="cart-summary-line cart-total">
						  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
						  <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
						</div>
					
						<div class="cart-summary-line">
						  <small class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</small>
						  <small class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</small>
						</div>
				  </div>
			  </div>
			  
			  <div class="checkout card-block">
				  <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="viewcart">
				  	<button type="button" class="btn btn-primary"><?php echo smartyTranslate(array('s'=>'View Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
				  </a>
				  
				  
				</div>
			  
				
			</div>
		</div>
      <?php }?>
    </div>
  </div>
</div>
<?php }} ?>
