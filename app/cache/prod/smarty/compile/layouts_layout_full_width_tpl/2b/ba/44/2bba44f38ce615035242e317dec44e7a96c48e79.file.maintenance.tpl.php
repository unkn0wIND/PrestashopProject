<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:40
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/errors/maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18625003075a9516047f6709-87230194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bba44f38ce615035242e317dec44e7a96c48e79' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/errors/maintenance.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    '70a0dc26a051e8ed44e45712060079e7b44bebb9' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/layouts/layout-error.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
    '088db8eda0b1bdf598e240e89723ecda44b9f0db' => 
    array (
      0 => '/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/stylesheets.tpl',
      1 => 1512035577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18625003075a9516047f6709-87230194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stylesheets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9516048632e2_66729089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9516048632e2_66729089')) {function content_5a9516048632e2_66729089($_smarty_tpl) {?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    
      <title></title>
      <meta name="description" content="">
      <meta name="keywords" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
      <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '18625003075a9516047f6709-87230194');
content_5a951604838720_39842038($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>
    

  </head>

  <body>

    <div id="layout-error">
    

  <section id="main">

    
      <header class="page-header">
        
        <div class="logo"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo"></div>
        

        
          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        

        
          <h1><?php echo smartyTranslate(array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h1>
        
      </header>
    

    
      <section id="content" class="page-content page-maintenance">
        
          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        
      </section>
    

    

    

  </section>


    </div>

  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 09:25:40
         compiled from "/homepages/15/d701691074/htdocs/themes/PRS010013/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a951604838720_39842038')) {function content_5a951604838720_39842038($_smarty_tpl) {?>
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
