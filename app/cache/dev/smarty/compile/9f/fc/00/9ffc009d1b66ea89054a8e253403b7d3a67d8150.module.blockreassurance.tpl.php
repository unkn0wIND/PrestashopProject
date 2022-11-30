<?php /* Smarty version Smarty-3.1.19, created on 2017-11-30 12:47:34
         compiled from "module:blockreassurance/views/templates/hook/blockreassurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10719400555a1fefd695ec97-04672807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ffc009d1b66ea89054a8e253403b7d3a67d8150' => 
    array (
      0 => 'module:blockreassurance/views/templates/hook/blockreassurance.tpl',
      1 => 1512035577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '10719400555a1fefd695ec97-04672807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elements' => 0,
    'element' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1fefd69622b7_92682151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1fefd69622b7_92682151')) {function content_5a1fefd69622b7_92682151($_smarty_tpl) {?><!-- begin /homepages/15/d701691074/htdocs/themes/PRS010013/modules/blockreassurance/views/templates/hook/blockreassurance.tpl -->
<?php if ($_smarty_tpl->tpl_vars['elements']->value) {?>
  <div id="block-reassurance">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
        <li>
          <div class="block-reassurance-item">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['text'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="h6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<!-- end /homepages/15/d701691074/htdocs/themes/PRS010013/modules/blockreassurance/views/templates/hook/blockreassurance.tpl --><?php }} ?>
