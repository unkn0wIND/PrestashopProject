<?php /* Smarty version Smarty-3.1.19, created on 2018-02-09 09:31:43
         compiled from "/homepages/15/d701691074/htdocs/ritemadmin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10997456635a7d5c6fd0ffa7-21533739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da35db50b559353767c2c4992fee48509a8b2418' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/ritemadmin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1511970578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10997456635a7d5c6fd0ffa7-21533739',
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
  'unifunc' => 'content_5a7d5c6fd2bb35_45585163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7d5c6fd2bb35_45585163')) {function content_5a7d5c6fd2bb35_45585163($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
