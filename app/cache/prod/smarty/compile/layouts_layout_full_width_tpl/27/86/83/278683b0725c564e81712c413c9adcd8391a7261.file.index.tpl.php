<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9226976375a9515ef3153d5-33054054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '278683b0725c564e81712c413c9adcd8391a7261' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/index.tpl',
      1 => 1516807704,
      2 => 'file',
    ),
    'fc5cd0df73157e05bdc2c2e21c0f9ce5f1292e11' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/page.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    '25f3d1a1d2e53a688f12ab52cf8a7baaec576cae' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/layouts/layout-full-width.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    'da2aff3f8466036e5edc322f2a6ed6ae1a49f9bb' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/layouts/layout-both-columns.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    '088db8eda0b1bdf598e240e89723ecda44b9f0db' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/stylesheets.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    'afe264d99afc5b29ebe21a932fbda33623517312' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/javascript.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    'b4dc0d3a0f433c579810f4a4ce0df74e16081f9c' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/head.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    '85fed647369775286eb72c333149feb9da41795c' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/catalog/_partials/product-activation.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    '71d7cd34cda16480e59ee245f185fccbd32189ce' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/header.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    'dfcfa86d2cc169cc91c087533e877da572bdacd7' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/breadcrumb.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    'a3d62f201b0b16a92a1dd0530cd8f71bf67c23da' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/notifications.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    '3de2b9f7d9c06fe75403f7a9adf96a3e4ae45987' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/footer.tpl',
      1 => 1512646230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9226976375a9515ef3153d5-33054054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9515ef3deb89_24642106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9515ef3deb89_24642106')) {function content_5a9515ef3deb89_24642106($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9226976375a9515ef3153d5-33054054');
content_5a9515ef32f957_06181265($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9226976375a9515ef3153d5-33054054');
content_5a9515ef3661c9_97963203($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      

      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9226976375a9515ef3153d5-33054054');
content_5a9515ef36c208_27835313($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
		
		<?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9226976375a9515ef3153d5-33054054');
content_5a9515ef375fb1_79786301($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
	  
      </header>

      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9226976375a9515ef3153d5-33054054');
content_5a9515ef37f722_93628539($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
      
	  
			
	  <section id="wrapper">
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
    <div class="home_container">
    <?php } else { ?>
    <div class="container">
    <div class="row">
    <?php }?>
      <div id="columns_inner">
		  

          
  <div id="content-wrapper">
    

  <section id="main">

    
      
    

    

<section id="content" class="page-home">
        
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

		<div class="container">
				<div class="row">
		<section class="ct-hometabcontent">
				
				<h1 class="h1 products-section-title text-uppercase"><span><?php echo smartyTranslate(array('s'=>'Spring Season','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span><?php echo smartyTranslate(array('s'=>'New Arrivals','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h1>
				<div class="tabs">
					<ul id="home-page-tabs" class="nav nav-tabs clearfix">
						
						<li class="nav-item">
							<a data-toggle="tab" href="#newProduct" class="newProduct nav-link" data-text="<?php echo smartyTranslate(array('s'=>'New products','d'=>'Shop.Theme.catalog'),$_smarty_tpl);?>
">
								<span><?php echo smartyTranslate(array('s'=>'New products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
							</a>
						</li>

						<li class="nav-item">
							<a data-toggle="tab" href="#featureProduct" class="featureProduct nav-link active" data-text="<?php echo smartyTranslate(array('s'=>'Produits vedettes','d'=>'Shop.Theme.catalog'),$_smarty_tpl);?>
">
								<span><?php echo smartyTranslate(array('s'=>'Les bouteilles du mois !','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
							</a>
						</li>
					</ul>
					
					<div class="tab-content">
						<div id="featureProduct" class="ct_productinner tab-pane active">	
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCtFeature'),$_smarty_tpl);?>

						</div>
						<div id="newProduct" class="ct_productinner tab-pane">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCtNew'),$_smarty_tpl);?>

						</div>
						</div>
										
				</div>
			</section>
			</div>
					</div>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBrands'),$_smarty_tpl);?>

		<div class="container">
				<div class="row">	
		
		
         <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        
        
		</div>
					</div>
</section>


    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    

  </section>


  </div>


          
		  </div>
      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
      </div>
      <?php } else { ?>
      </div>
      </div>
      <?php }?>
      </section>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9226976375a9515ef3153d5-33054054');
content_5a9515ef3d1912_64139401($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '9226976375a9515ef3153d5-33054054');
content_5a9515ef34f636_20391681($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a9515ef32f957_06181265')) {function content_5a9515ef32f957_06181265($_smarty_tpl) {?>

<meta charset="utf-8">


<meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>



<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">


<!-- Templatemela added -->
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 

  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '9226976375a9515ef3153d5-33054054');
content_5a9515ef344a10_72402143($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '9226976375a9515ef3153d5-33054054');
content_5a9515ef34f636_20391681($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a9515ef344a10_72402143')) {function content_5a9515ef344a10_72402143($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a9515ef34f636_20391681')) {function content_5a9515ef34f636_20391681($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a9515ef3661c9_97963203')) {function content_5a9515ef3661c9_97963203($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a9515ef36c208_27835313')) {function content_5a9515ef36c208_27835313($_smarty_tpl) {?>

  <div class="header-banner">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>

  </div>



<nav class="header-nav">
	<div class="container">
        <div class="row">
		
		 <div class="top-logo" id="_mobile_logo"></div>  
		 <div class="hidden-lg-up text-xs-left mobile">
<div class="pull-xs-left hidden-lg-up" id="menu-icon">
				<i class="material-icons menu-open">&#xE5D2;</i>
				<i class="material-icons menu-close">&#xE5CD;</i>			  
			</div>  
            <div id="mobile_top_menu_wrapper" class="row hidden-lg-up" style="display:none;">
				<div class="js-top-menu mobile" id="_mobile_top_menu"></div>

					<div class="js-top-menu-bottom">
						<div id="_mobile_currency_selector"></div>
						<div id="_mobile_language_selector"></div>
						<div id="_mobile_contact_link"></div>
                        <div id="_mobile_user_info"></div>
					</div>
				</div>          
			                 
            
            
            
			
			
			<div class="clearfix"></div>
		</div>
		<div class="">
			<div class="left-nav">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>

			</div>
			
			<div class="right-nav">
           
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

                 <div class="pull-xs-right" id="_mobile_cart"></div>
			</div>
		</div>
		
		
        </div>
	</div>
</nav>



	<div class="header-top hidden-md-down">
    	<div class="container">
        <div class="row">
   		
                
		<div class="main-logo">

			<div class="header_logo" id="_desktop_logo">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
				<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				</a>
			</div>
		</div>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

        
		
                </div>
                </div>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>

		</div>
    
        
        
	</div>
 

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a9515ef375fb1_79786301')) {function content_5a9515ef375fb1_79786301($_smarty_tpl) {?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
   <div class="container">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
        <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
      </li>
      
    <?php } ?>
  </ol>
  </div>
</nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a9515ef37f722_93628539')) {function content_5a9515ef37f722_93628539($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
      <article class="alert alert-danger" role="alert" data-alert="danger">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
      <article class="alert alert-warning" role="alert" data-alert="warning">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
      <article class="alert alert-success" role="alert" data-alert="success">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
      <article class="alert alert-info" role="alert" data-alert="info">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:19
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a9515ef3d1912_64139401')) {function content_5a9515ef3d1912_64139401($_smarty_tpl) {?>

	
<div class="footer-container">
	
  <div class="container">
  <div class="row">
 	<div class="footer-before">
 
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>


	</div>
    
    <div class="footer">
	
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

	
    </div>
<div class="footer-bottom">
 <div class="footer-after col-md-12">

      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>


        <p class="copyright">
 
          <a class="_blank" href="http://www.vintury.fr" target="_blank">
            <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Vintury - %prestashop%','sprintf'=>array('%prestashop%'=>'Tous droits réservés.','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme'),$_smarty_tpl);?>

          </a>
 
        </p>
      
    </div>
  
    
    
      </div>    
    </div>
  </div>
   
  

</div>
<a class="top_button" href="#" style=""><span>&nbsp;</span></a>
<?php }} ?>
