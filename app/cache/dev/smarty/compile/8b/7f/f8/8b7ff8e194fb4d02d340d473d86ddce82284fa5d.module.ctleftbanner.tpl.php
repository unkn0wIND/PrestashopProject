<?php /* Smarty version Smarty-3.1.19, created on 2017-11-30 12:49:38
         compiled from "module:ct_leftbanner/views/templates/hook/ctleftbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21248988465a1ff052aa4131-61723114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7ff8e194fb4d02d340d473d86ddce82284fa5d' => 
    array (
      0 => 'module:ct_leftbanner/views/templates/hook/ctleftbanner.tpl',
      1 => 1512035577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '21248988465a1ff052aa4131-61723114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ctleftbanner' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1ff052aa8859_91676596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1ff052aa8859_91676596')) {function content_5a1ff052aa8859_91676596($_smarty_tpl) {?><!-- begin /homepages/15/d701691074/htdocs/modules/ct_leftbanner/views/templates/hook/ctleftbanner.tpl -->

<?php if ($_smarty_tpl->tpl_vars['ctleftbanner']->value['slides']) {?>
	<div id="ctleftbanner">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ctleftbanner']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
				<li class="slide ctleftbanner-container">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
					</a>				
				</li>
			<?php } ?>
		</ul>
	</div>			
<?php }?><!-- end /homepages/15/d701691074/htdocs/modules/ct_leftbanner/views/templates/hook/ctleftbanner.tpl --><?php }} ?>
