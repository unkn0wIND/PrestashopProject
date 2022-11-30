<?php /* Smarty version Smarty-3.1.19, created on 2017-11-30 11:54:37
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/catalog/_partials/active_filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18131129055a1fe36dab3767-29626964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ded2f4e3b5085d3f68ba0948edcfef4b7dbfed1e' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/catalog/_partials/active_filters.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18131129055a1fe36dab3767-29626964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activeFilters' => 0,
    'filter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1fe36daba575_60904090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1fe36daba575_60904090')) {function content_5a1fe36daba575_60904090($_smarty_tpl) {?>
<section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
 

<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
 
    <h1 class="h6 active-filter-title"><?php echo smartyTranslate(array('s'=>'Active filters','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h1>
  
    <ul>
      <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeFilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
        
          <li class="filter-block">
            <?php echo smartyTranslate(array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl);?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons close">&#xE5CD;</i></a>
          </li>
        
      <?php } ?>
    </ul>
  <?php }?>
  </section>
<?php }} ?>
