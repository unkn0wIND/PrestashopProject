<?php /* Smarty version Smarty-3.1.19, created on 2017-11-30 11:54:37
         compiled from "module:ps_facetedsearch/ps_facetedsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18864216745a1fe36dc2f561-36259270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:ps_facetedsearch/ps_facetedsearch.tpl',
      1 => 1512035577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '18864216745a1fe36dc2f561-36259270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1fe36dc31c79_93458157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1fe36dc31c79_93458157')) {function content_5a1fe36dc31c79_93458157($_smarty_tpl) {?><!-- begin /homepages/15/d701691074/htdocs/themes/PRS010013/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
<div id="search_filters_wrapper" class="hidden-md-down block"> <!-- hidden-sm-down -->
  <div id="search_filter_controls" class="hidden-lg-up"> <!--  -->
      <span id="_mobile_search_filters_clear_all"></span> 
      <button class="btn btn-secondary ok">
        <i class="material-icons">&#xE876;</i>
        <?php echo smartyTranslate(array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </button>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

</div>
<?php }?>
<!-- end /homepages/15/d701691074/htdocs/themes/PRS010013/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }} ?>
