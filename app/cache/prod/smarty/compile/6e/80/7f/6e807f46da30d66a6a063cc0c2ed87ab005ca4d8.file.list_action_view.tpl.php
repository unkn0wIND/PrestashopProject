<?php /* Smarty version Smarty-3.1.19, created on 2018-02-09 09:31:43
         compiled from "/homepages/15/d701691074/htdocs/ritemadmin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17555216915a7d5c6fce74f2-60158581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e807f46da30d66a6a063cc0c2ed87ab005ca4d8' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/ritemadmin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1511970580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17555216915a7d5c6fce74f2-60158581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7d5c6fd036d5_69431540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7d5c6fd036d5_69431540')) {function content_5a7d5c6fd036d5_69431540($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
