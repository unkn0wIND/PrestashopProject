<?php /* Smarty version Smarty-3.1.19, created on 2018-02-09 16:37:20
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/catalog/_partials/products-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1091367595a7dc0306be759-39092735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4518b416ecfb6a972084c9be9e83c2eb25b748db' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/catalog/_partials/products-top.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    '82b29ec5595ecebb4f7c91525df566462ccb8fed' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/catalog/_partials/sort-orders.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1091367595a7dc0306be759-39092735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7dc0306f1fb1_18224659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7dc0306f1fb1_18224659')) {function content_5a7dc0306f1fb1_18224659($_smarty_tpl) {?>
<div id="js-product-list-top" class="row products-selection">
  <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
        <div class="col-sm-12 hidden-lg-up filter-button">
          <button id="search_filter_toggler" class="btn btn-secondary">
            <?php echo smartyTranslate(array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </button>
        </div>
      <?php }?>
  <div class="col-md-6 hidden-md-down total-products">
    <ul class="display hidden-xs grid_list">
		<li id="grid"><a href="#" title="<?php echo smartyTranslate(array('s'=>'Grid'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Grid'),$_smarty_tpl);?>
</a></li>
		<li id="list"><a href="#" title="<?php echo smartyTranslate(array('s'=>'List'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'List'),$_smarty_tpl);?>
</a></li>
	</ul>
	<?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items']>1) {?>
      <p><?php echo smartyTranslate(array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl);?>
</p>
    <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items']>0) {?>
      <p><?php echo smartyTranslate(array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</p>
    <?php }?>
  </div>
  <div class="col-md-6">
    <div class="row sort-by-row">

      
        <?php /*  Call merged included template "catalog/_partials/sort-orders.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, '1091367595a7dc0306be759-39092735');
content_5a7dc0306e41b0_47626406($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/sort-orders.tpl" */?>
      
    </div>
  </div>
  <div class="col-sm-12 hidden-lg-up showing">
    <?php echo smartyTranslate(array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl);?>

  </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-09 16:37:20
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/catalog/_partials/sort-orders.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a7dc0306e41b0_47626406')) {function content_5a7dc0306e41b0_47626406($_smarty_tpl) {?>
<span class="col-sm-3 col-md-3 hidden-sm-down sort-by"><?php echo smartyTranslate(array('s'=>'Sort by:','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
<div class="<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>col-sm-9 col-xs-8<?php } else { ?>col-sm-12 col-xs-12<?php }?> col-md-9 products-sort-order dropdown">
  <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php if (isset($_smarty_tpl->tpl_vars['listing']->value['sort_selected'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['sort_selected'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
<?php }?>
    <i class="material-icons pull-xs-right">&#xE5C5;</i>
  </a>
  <div class="dropdown-menu">
    <?php  $_smarty_tpl->tpl_vars['sort_order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sort_order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['sort_orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->key => $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->_loop = true;
?>
      <a
        rel="nofollow"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
        class="select-list <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true)), ENT_QUOTES, 'UTF-8');?>
"
      >
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

      </a>
    <?php } ?>
  </div>
</div>
<?php }} ?>
