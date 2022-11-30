<?php /* Smarty version Smarty-3.1.19, created on 2017-11-30 11:39:25
         compiled from "module:ct_categorylist/views/templates/front/ct_categorylist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16619528765a1fdfdd1f8680-72769640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a79e9957a9b2a30ef7bbf7c01f60ab82fedf3fd1' => 
    array (
      0 => 'module:ct_categorylist/views/templates/front/ct_categorylist.tpl',
      1 => 1512035577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '16619528765a1fdfdd1f8680-72769640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ctcategoryinfos' => 0,
    'productCount' => 0,
    'sliderFor' => 0,
    'categorycount' => 0,
    'ctcategoryinfo' => 0,
    'image_url' => 0,
    'link' => 0,
    'categorychildcount' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1fdfdd210672_84661275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1fdfdd210672_84661275')) {function content_5a1fdfdd210672_84661275($_smarty_tpl) {?><!-- begin /homepages/15/d701691074/htdocs/modules/ct_categorylist/views/templates/front/ct_categorylist.tpl -->



<div  class="ctcategorylist">
<div id="spe_res">
	<div class="ctcategory-container">
		<?php if (isset($_smarty_tpl->tpl_vars['ctcategoryinfos']->value)&&$_smarty_tpl->tpl_vars['ctcategoryinfos']->value) {?>
		
		<?php $_smarty_tpl->tpl_vars['sliderFor'] = new Smarty_variable(5, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['productCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['ctcategoryinfos']->value), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['categorycount'] = new Smarty_variable(0, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['productCount']->value>$_smarty_tpl->tpl_vars['sliderFor']->value) {?>
							<div class="customNavigation">
								<a class="btn prev cat_prev">&nbsp;</a>
								<a class="btn next cat_next">&nbsp;</a>
							</div>
						<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['productCount']->value>$_smarty_tpl->tpl_vars['sliderFor']->value) {?>
							<ul id="ctcategorylist-carousel" class="ct-carousel product_list product_slider_grid">
						<?php } else { ?>
							<ul id="ctcategorylist" class="product_list grid gridcount product_slider_grid">
						<?php }?>
						
			<?php  $_smarty_tpl->tpl_vars['ctcategoryinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ctcategoryinfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ctcategoryinfos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ctcategoryinfo']->key => $_smarty_tpl->tpl_vars['ctcategoryinfo']->value) {
$_smarty_tpl->tpl_vars['ctcategoryinfo']->_loop = true;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['productCount']->value>$_smarty_tpl->tpl_vars['sliderFor']->value) {?>slider<?php } else { ?>grid<?php }?>">
                <div class="categoryblock<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorycount']->value, ENT_QUOTES, 'UTF-8');?>
 categoryblock item">
					<div class="block_content">
						
						
                		<?php if (isset($_smarty_tpl->tpl_vars['ctcategoryinfo']->value['cate_id'])&&$_smarty_tpl->tpl_vars['ctcategoryinfo']->value['cate_id']) {?>
							<?php if ($_smarty_tpl->tpl_vars['ctcategoryinfo']->value['id']==$_smarty_tpl->tpl_vars['ctcategoryinfo']->value['cate_id']['id_category']) {?>
								<div class="categoryimage">
									<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ctcategoryinfo']->value['cate_id']['image'], ENT_QUOTES, 'UTF-8');?>
" alt="" class="img-responsive"/>
								</div>
							<?php }?>
						<?php }?>
						<div class="categorylist">
							<div class="cate-heading">
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['ctcategoryinfo']->value['category']->id_category,$_smarty_tpl->tpl_vars['ctcategoryinfo']->value['category']->link_rewrite), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ctcategoryinfo']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
							</div>
							<div class="more"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['ctcategoryinfo']->value['category']->id_category,$_smarty_tpl->tpl_vars['ctcategoryinfo']->value['category']->link_rewrite), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'View more','mod'=>'ctcategorylist'),$_smarty_tpl);?>
</a></div>
                            <ul class="subcategory">
							<?php $_smarty_tpl->tpl_vars['categorychildcount'] = new Smarty_variable(1, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ctcategoryinfo']->value['child_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['categorychildcount']->value<=10) {?>
                                <li>
									<a href="<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['id_category'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_tmp1,$_tmp2), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
								</li>
                                 <?php }?>
                                 <?php $_smarty_tpl->tpl_vars['categorychildcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['categorychildcount']->value+1, null, 0);?>
							<?php } ?>
							<li>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['ctcategoryinfo']->value['category']->id_category,$_smarty_tpl->tpl_vars['ctcategoryinfo']->value['category']->link_rewrite), ENT_QUOTES, 'UTF-8');?>
">
									<?php echo smartyTranslate(array('s'=>'View all','mod'=>'ctcategorylist'),$_smarty_tpl);?>
</a>
							</li>
						</ul>
						</div>
					</div>
				
				</div>
				</li>
               
				<?php $_smarty_tpl->tpl_vars['categorycount'] = new Smarty_variable($_smarty_tpl->tpl_vars['categorycount']->value+1, null, 0);?>
			<?php } ?>
			</ul>
			
			
		<?php } else { ?>
			<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No Category is Selected.','mod'=>'ctcategorylist'),$_smarty_tpl);?>
</div>
		<?php }?>
	</div>
	</div>
</div><!-- end /homepages/15/d701691074/htdocs/modules/ct_categorylist/views/templates/front/ct_categorylist.tpl --><?php }} ?>
