<?php /* Smarty version Smarty-3.1.19, created on 2017-11-30 12:49:08
         compiled from "/homepages/15/d701691074/htdocs/ritemadmin/themes/default/template/controllers/modules/modal_not_trusted_country.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15420158385a1ff03462ba06-59894164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5747cce7e204e5be50faf0ca7b2ab8645cc0938f' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/ritemadmin/themes/default/template/controllers/modules/modal_not_trusted_country.tpl',
      1 => 1511970549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15420158385a1ff03462ba06-59894164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1ff0346316f7_69925818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1ff0346316f7_69925818')) {function content_5a1ff0346316f7_69925818($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['module_name'] = new Smarty_variable('<strong><span class="module-display-name-placeholder"></span></strong>', null, 0);?>

<div class="modal-body">
	<div class="alert alert-warning">
		<h4><?php echo smartyTranslate(array('s'=>'You are about to install "%s", a module which is not compatible with your country.','sprintf'=>array($_smarty_tpl->tpl_vars['module_name']->value)),$_smarty_tpl);?>
</h4>
		<p>
			<?php echo smartyTranslate(array('s'=>'This module was not verified by PrestaShop hence we cannot certify that it works well in your country and that it complies with our quality requirements.'),$_smarty_tpl);?>

			<strong><?php echo smartyTranslate(array('s'=>'Use at your own risk.'),$_smarty_tpl);?>
</strong>
		</p>
	</div>
	<h3><?php echo smartyTranslate(array('s'=>'What Should I Do?'),$_smarty_tpl);?>
</h3>
	<p>
		<?php echo smartyTranslate(array('s'=>'If you are unsure about this, you should contact the Customer Service of %s to ask them to make the module compatible with your country.','sprintf'=>array($_smarty_tpl->tpl_vars['module_name']->value)),$_smarty_tpl);?>
<br />
		<?php echo smartyTranslate(array('s'=>'Moreover, we recommend that you use an equivalent module: compatible modules for your country are listed in the "Modules" tab of your back office.'),$_smarty_tpl);?>

	</p>
	<p>
		<?php echo smartyTranslate(array('s'=>'If you are unsure about this module, you can look for similar modules on the official marketplace.'),$_smarty_tpl);?>

		<a class="_blank" href="http://addons.prestashop.com/"><?php echo smartyTranslate(array('s'=>'Click here to browse PrestaShop Addons.'),$_smarty_tpl);?>
</a>
	</p>
</div>

<div class="modal-footer">
	<div class="row">
		<div class="col-sm-12 text-center">
			<a id="proceed-install-anyway" href="#" class="btn btn-warning"><?php echo smartyTranslate(array('s'=>'Proceed with the installation'),$_smarty_tpl);?>
</a>
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Back to modules list'),$_smarty_tpl);?>
</button>
		</div>
	</div>
</div>
<?php }} ?>
