<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "module:ct_imageslider/views/templates/hook/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17753296845a9515ef452e89-39720097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54c5ed9067860d10094d7bdbda9a16d9838b6f4b' => 
    array (
      0 => 'module:ct_imageslider/views/templates/hook/slider.tpl',
      1 => 1512035577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '17753296845a9515ef452e89-39720097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cthomeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9515ef45d9f2_14639618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9515ef45d9f2_14639618')) {function content_5a9515ef45d9f2_14639618($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['cthomeslider']->value['slides']) {?>
	<div class="flexslider" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cthomeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cthomeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
		<div class="loadingdiv spinner"></div>
		<ul class="slides">
			<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cthomeslider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
				<li class="slide">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
					</a>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
						<div class="caption-description">
							<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

						</div>
					<?php }?>					
				</li>
			<?php } ?>
		</ul>
	</div>
<?php }?>

<?php }} ?>
