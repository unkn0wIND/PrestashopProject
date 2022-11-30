<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8942321075a9515ef3f8088-16945191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbar/ps_searchbar.tpl',
      1 => 1512035577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8942321075a9515ef3f8088-16945191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9515ef3fa9e9_03612186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9515ef3fa9e9_03612186')) {function content_5a9515ef3fa9e9_03612186($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_widget" class="col-lg-4 col-md-5 col-sm-12 search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
<span class="search_button"><i class="material-icons search">&#xE8B6;</i><i class="material-icons cross">&#xE14C;</i><span><?php echo smartyTranslate(array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span></span>
<div class="searchtoggle">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
		<button type="submit">
			<i class="material-icons search">&#xE8B6;</i>
		</button>
	</form>
    </div>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
