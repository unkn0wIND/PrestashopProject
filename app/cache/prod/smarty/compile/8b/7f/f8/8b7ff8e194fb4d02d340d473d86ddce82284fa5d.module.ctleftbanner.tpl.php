<?php /* Smarty version Smarty-3.1.19, created on 2018-02-26 09:39:04
         compiled from "module:ct_leftbanner/views/templates/hook/ctleftbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5940848165a93c7a82d0c35-86481538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '5940848165a93c7a82d0c35-86481538',
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
  'unifunc' => 'content_5a93c7a82d5891_42187730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a93c7a82d5891_42187730')) {function content_5a93c7a82d5891_42187730($_smarty_tpl) {?>

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
<?php }?><?php }} ?>
