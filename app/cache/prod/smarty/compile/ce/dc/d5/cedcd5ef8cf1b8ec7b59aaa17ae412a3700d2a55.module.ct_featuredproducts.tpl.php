<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "module:ct_featuredproducts/views/templates/hook/ct_featuredproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2498038725a9515ef583276-29997640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cedcd5ef8cf1b8ec7b59aaa17ae412a3700d2a55' => 
    array (
      0 => 'module:ct_featuredproducts/views/templates/hook/ct_featuredproducts.tpl',
      1 => 1512035577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2498038725a9515ef583276-29997640',
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
    'allProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9515ef593e25_38487818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9515ef593e25_38487818')) {function content_5a9515ef593e25_38487818($_smarty_tpl) {?>

<section class="featured-products clearfix">
	<h2 class="h1 products-section-title">
		<?php echo smartyTranslate(array('s'=>'Weekly Featured Products','d'=>'Modules.FeaturedProducts'),$_smarty_tpl);?>

	</h2>
	<div class="products">	
	<div class="product_featured">		
		<?php $_smarty_tpl->tpl_vars['sliderFor'] = new Smarty_variable(5, null, 0);?> <!-- Define Number of product for SLIDER -->
		<?php if ($_smarty_tpl->tpl_vars['slider']->value==1&&$_smarty_tpl->tpl_vars['no_prod']->value>=$_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<ul id="feature-carousel" class="ct-carousel product_list">
		<?php } else { ?>
			<ul id="feature-grid" class="featured_grid product_list grid row gridcount">
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
				<a class="btn prev feature_prev">&nbsp;</a>
				<a class="btn next feature_next">&nbsp;</a>
			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value==0&&$_smarty_tpl->tpl_vars['no_prod']->value>=$_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<a class="all-product-link pull-xs-left pull-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
				<?php echo smartyTranslate(array('s'=>'See all products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
<i class="material-icons">&#xE315;</i>
			</a>
		<?php }?>
		</div>
	</div>
</section><?php }} ?>
