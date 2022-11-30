<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "module:ps_linklist/views/templates/hook/linkblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17786947725a9515ef9ed829-55322374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '906548e89c8c6025457ddaeffb1980a0c743b872' => 
    array (
      0 => 'module:ps_linklist/views/templates/hook/linkblock.tpl',
      1 => 1512035577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '17786947725a9515ef9ed829-55322374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'linkBlocks' => 0,
    'linkBlock' => 0,
    '_expand_id' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9515ef9fa456_31012483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9515ef9fa456_31012483')) {function content_5a9515ef9fa456_31012483($_smarty_tpl) {?>  <?php  $_smarty_tpl->tpl_vars['linkBlock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkBlock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['linkBlocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->key => $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->_loop = true;
?>
<div class="col-md-4 links block links">
      <h3 class="h3 hidden-md-down"><i class="material-icons">&#xE3C7;</i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
      <?php $_smarty_tpl->tpl_vars['_expand_id'] = new Smarty_variable(mt_rand(10,100000), null, 0);?>
      <div class="title h3 block_title hidden-lg-up" data-target="#footer_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
        <span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse block_content">
        <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['linkBlock']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
          <li>
            <a
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['description'], ENT_QUOTES, 'UTF-8');?>
">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8');?>

            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  <?php } ?>
<?php }} ?>
