<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:23:29
         compiled from "/homepages/15/d701691074/htdocs/ritemadmin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10576038105a951581560a74-08342901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0b15121141e5ef358f47c4af9fcb7c01586a6b8' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/ritemadmin/themes/default/template/content.tpl',
      1 => 1511970374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10576038105a951581560a74-08342901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a951581562959_11937918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a951581562959_11937918')) {function content_5a951581562959_11937918($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
