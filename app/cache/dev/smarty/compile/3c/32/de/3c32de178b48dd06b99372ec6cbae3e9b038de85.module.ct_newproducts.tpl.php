<?php /* Smarty version Smarty-3.1.19, created on 2017-11-30 12:49:42
         compiled from "module:ct_newproducts/views/templates/hook/ct_newproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8692368625a1ff056b591e9-66599321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c32de178b48dd06b99372ec6cbae3e9b038de85' => 
    array (
      0 => 'module:ct_newproducts/views/templates/hook/ct_newproducts.tpl',
      1 => 1512035577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8692368625a1ff056b591e9-66599321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slider' => 0,
    'no_prod' => 0,
    'sliderFor' => 0,
    'products' => 0,
    'product' => 0,
    'allNewProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1ff056b63ed0_58516847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1ff056b63ed0_58516847')) {function content_5a1ff056b63ed0_58516847($_smarty_tpl) {?><!-- begin /homepages/15/d701691074/htdocs/modules/ct_newproducts/views/templates/hook/ct_newproducts.tpl -->

<section class="newproducts clearfix">
	<h2 class="h1 products-section-title text-uppercase">
		<?php echo smartyTranslate(array('s'=>'New products','d'=>'Modules.Newproducts.Shop'),$_smarty_tpl);?>

	</h2>
	<div class="products">
	<div class="product_new">
		<?php $_smarty_tpl->tpl_vars['sliderFor'] = new Smarty_variable(5, null, 0);?> <!-- Define Number of product for SLIDER -->
		<?php if ($_smarty_tpl->tpl_vars['slider']->value==1&&$_smarty_tpl->tpl_vars['no_prod']->value>=$_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<ul id="newproduct-carousel" class="ct-carousel product_list">
		<?php } else { ?>
			<ul id="newproduct-grid" class="newproduct_grid product_list grid row gridcount">
		<?php }?>
		
		<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value==1&&$_smarty_tpl->tpl_vars['no_prod']->value>=$_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-2<?php }?>">
			<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

			</li>
		<?php } ?>		
		</ul>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value==1&&$_smarty_tpl->tpl_vars['no_prod']->value>=$_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<div class="customNavigation">
				<a class="btn prev newproduct_prev">&nbsp;</a>
				<a class="btn next newproduct_next">&nbsp;</a>
			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value==0&&$_smarty_tpl->tpl_vars['no_prod']->value>=$_smarty_tpl->tpl_vars['sliderFor']->value) {?>
		<a class="all-product-link pull-xs-left pull-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allNewProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php echo smartyTranslate(array('s'=>'See all new products','d'=>'Modules.Newproducts.Shop'),$_smarty_tpl);?>
<i class="material-icons">&#xE315;</i>
		</a>
		<?php }?>
		</div>
	</div>
</section>

<!-- end /homepages/15/d701691074/htdocs/modules/ct_newproducts/views/templates/hook/ct_newproducts.tpl --><?php }} ?>
