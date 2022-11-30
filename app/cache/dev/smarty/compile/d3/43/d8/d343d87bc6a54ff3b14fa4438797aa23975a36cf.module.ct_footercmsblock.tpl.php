<?php /* Smarty version Smarty-3.1.19, created on 2017-11-30 12:49:43
         compiled from "module:ct_footercmsblock/views/templates/hook/ct_footercmsblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1516570765a1ff057876815-18613593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd343d87bc6a54ff3b14fa4438797aa23975a36cf' => 
    array (
      0 => 'module:ct_footercmsblock/views/templates/hook/ct_footercmsblock.tpl',
      1 => 1512035577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1516570765a1ff057876815-18613593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ctfootercmsblockinfos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1ff057879916_23318304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1ff057879916_23318304')) {function content_5a1ff057879916_23318304($_smarty_tpl) {?><!-- begin /homepages/15/d701691074/htdocs/modules/ct_footercmsblock/views/templates/hook/ct_footercmsblock.tpl -->





<div id="ctfootercmsblock" class="block">
	<?php if (isset($_smarty_tpl->tpl_vars['ctfootercmsblockinfos']->value['text'])&&count($_smarty_tpl->tpl_vars['ctfootercmsblockinfos']->value['text'])>0) {?>
			<?php echo $_smarty_tpl->tpl_vars['ctfootercmsblockinfos']->value['text'];?>

     <?php } else { ?>
                <div class="block_about">
<div class="toggle-footer">
<div class="footer_logo"><a href="#"><img src="img/logo.jpg" alt="footer logo" /></a></div>
<div class="footer-about-desc">
<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur.</p>
</div>
</div>
</div>
        
        <?php }?>
		
</div>
<!-- end /homepages/15/d701691074/htdocs/modules/ct_footercmsblock/views/templates/hook/ct_footercmsblock.tpl --><?php }} ?>
