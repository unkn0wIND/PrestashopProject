<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "module:ps_contactinfo/ps_contactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8877546725a9515ef9604e3-01918911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfo/ps_contactinfo.tpl',
      1 => 1512644168,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8877546725a9515ef9604e3-01918911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
    'contact_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9515ef96c078_50777951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9515ef96c078_50777951')) {function content_5a9515ef96c078_50777951($_smarty_tpl) {?>

<div class="block-contact footer-block col-xs-12 col-sm-4 links wrapper">
  
   		<h3 class="text-uppercase block-contact-title hidden-md-down"><i class="material-icons">&#xE55F;</i><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['stores'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Qui sommes-nous ?','d'=>'Shop.Theme'),$_smarty_tpl);?>
</a></h3>
      
		<div class="title clearfix hidden-lg-up" data-target="#block-contact_list" data-toggle="collapse">
		  <span class="h3"><?php echo smartyTranslate(array('s'=>'Information','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
		  <span class="pull-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE313;</i>
				<i class="material-icons remove">&#xE316;</i>
			  </span>
		  </span>
		</div>
	  
	  <ul id="block-contact_list" class="collapse">
	  <li>
	  	
	 <span class="contactdiv"> <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</span>
	  </li>
	 
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
	   <li>
       
        
		<i class="material-icons">&#xE324;</i>
        <?php echo smartyTranslate(array('s'=>'Appelez-nous : [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

		</li>
      <?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
	  <li>
       
        
		<i class="material-icons">&#xE554;</i>
        <?php echo smartyTranslate(array('s'=>'Contactez-nous : [1]%email%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

		</li>
      <?php }?>
	  </ul>
  
</div><?php }} ?>
