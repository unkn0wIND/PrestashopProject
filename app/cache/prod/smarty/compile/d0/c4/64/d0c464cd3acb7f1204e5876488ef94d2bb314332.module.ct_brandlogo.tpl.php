<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "module:ct_brandlogo/views/templates/hook/ct_brandlogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20714523665a9515ef945a43-15029447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0c464cd3acb7f1204e5876488ef94d2bb314332' => 
    array (
      0 => 'module:ct_brandlogo/views/templates/hook/ct_brandlogo.tpl',
      1 => 1518099636,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '20714523665a9515ef945a43-15029447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image_url' => 0,
    'display_link_brand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9515ef94b3a6_00849447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9515ef94b3a6_00849447')) {function content_5a9515ef94b3a6_00849447($_smarty_tpl) {?>

<section class="brands parallax" data-source-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/parrlax.jpg">
<div class="container">
<div class="row">
	 <h1 class="h1 products-section-title">
		<?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?><a href="http://vintury.fr/index.php?id_category=137&controller=category" title="<?php echo smartyTranslate(array('s'=>'Vintury','d'=>'Modules.Brandlist.Shop'),$_smarty_tpl);?>
"><?php }?>
			<span><?php echo smartyTranslate(array('s'=>'Cliquez-ici pour en savoir plus..','d'=>'Modules.Brandlist.Shop'),$_smarty_tpl);?>
</span><?php echo smartyTranslate(array('s'=>'Les accessoires à Vin..','d'=>'Modules.Brandlist.Shop'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?></a><?php }?>
	</h1> 
  		<center><img src="test.gif" width="200" height="200"/> <img src="test.gif" width="200" height="200"/> <img src="test.gif" width="200" height="200"/> <img src="test.gif" width="200" height="200"/></center>
	</div>
	</div>
</section>
<?php }} ?>
