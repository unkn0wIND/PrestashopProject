<?php

/* __string_template__c712e8012de041c27983da2eb57e8b112a9566ae487b31fbbcde70e10ce7ce9f */
class __TwigTemplate_335696969585caeebe262e4daafb0ba77689a624dd0a3e5dbae8689d35b8d0a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5293f6e9e3fb40a930f94e96d89d6fa3e52b6463da2e03211fe64f0b4e830a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5293f6e9e3fb40a930f94e96d89d6fa3e52b6463da2e03211fe64f0b4e830a5c->enter($__internal_5293f6e9e3fb40a930f94e96d89d6fa3e52b6463da2e03211fe64f0b4e830a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__c712e8012de041c27983da2eb57e8b112a9566ae487b31fbbcde70e10ce7ce9f"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Sélection de modules • Vintury</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.2.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'a0ddc4da928aeed8dceb39b94be7618d';
    var token_admin_orders = '1260fe89c5555df678922ee2c02db7c0';
    var token_admin_customers = 'e4de006c8ab66cb3b3d33062e095ed2c';
    var token_admin_customer_threads = 'ec7bc0337321e87af2721855396498f4';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = 'f3f774014c6cc9468f1d3311d34976fb';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/ritemadmin/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ritemadmin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ritemadmin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/ritemadmin\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/ritemadmin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/ritemadmin/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ritemadmin/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://vintury.fr/ritemadmin/index.php?controller=AdminGamification&token=981b802357557a105d1684cb3cd8ee0a';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminmodules\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminDashboard&amp;token=f3b5b9fd7132151b0bb9c6defc73d252\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminOrders&amp;token=1260fe89c5555df678922ee2c02db7c0\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://vintury.fr/ritemadmin/index.php/module/manage?token=9aaf108466e8240329dd1c4fa64dfbbc\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=15369c558d5d9c21901eab2439eca9cf\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://vintury.fr/ritemadmin/index.php/product/new?token=9aaf108466e8240329dd1c4fa64dfbbc\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCategories&amp;addcategory&amp;token=4dad7b4d15bae6f2102836a48cb24aaa\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"31\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/module/catalog\"
        data-post-link=\"http://vintury.fr/ritemadmin/index.php?controller=AdminQuickAccesses&token=43726bf2d58da7fe9ab0a84bfad184d5\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\" - Liste\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminQuickAccesses&token=43726bf2d58da7fe9ab0a84bfad184d5\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/ritemadmin/index.php?controller=AdminSearch&amp;token=e9fd298d40216ed4b939d210646dc928\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">RECHERCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/julien.cnd%40gmail.com.jpg\" /><br>
      <span>Julien Carou</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminEmployees&amp;token=f3f774014c6cc9468f1d3311d34976fb&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminLogin&amp;token=5a184e4cd4b1c9af8ebf5424a3419f0f&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté votre taux de conversion dernièrement ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Avez-vous fait une campagne d'acquisition par e-mail récemment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://vintury.fr/\" target= \"_blank\">Vintury</a>
  </div>
</div>
          <div class=\"component pull-right hidden-md-down\">
        <div class=\"shop-state\" id=\"maintenance-mode\">
          <i class=\"material-icons\">build</i>
          <a class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"<p class='text-left text-nowrap'><strong>Votre boutique est en maintenance.</strong></p><p class='text-left'>Vos clients et visiteurs ne peuvent y accéder actuellement. &lt;br /&gt; Vous pouvez gérer les paramètres de maintenance dans l'onglet Maintenance de la page Paramètres de la boutique.</p>\" href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminMaintenance&amp;token=1bc557a3eb89f16bc025beda7f361a13\">
              Mode maintenance
          </a>
        </div>
      </div>
              <div class=\"component pull-right hidden-md-down\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
            title=\"<p class='text-left text-nowrap'><strong>Votre boutique est en mode de débogage.</strong></p><p class='text-left'>Tous les messages et erreurs PHP sont affichés. Lorsque vous n'en avez plus besoin, <strong>désactivez</strong> ce mode.</p>\">Mode debug</span>
        </div>
      </div>
        

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminDashboard&amp;token=f3b5b9fd7132151b0bb9c6defc73d252\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminOrders&amp;token=1260fe89c5555df678922ee2c02db7c0\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Commandes
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminOrders&amp;token=1260fe89c5555df678922ee2c02db7c0\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminInvoices&amp;token=2af109f94a475846ffca4eaca1e62971\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminSlip&amp;token=8c9c742876fd7ec40cd3f46def2ee09b\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminDeliverySlip&amp;token=084cdb7224a1d5d21298169b001aeaa3\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCarts&amp;token=3b1e126ddad5f55ffdf27f9e85404af7\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/ritemadmin/index.php/product/catalog?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalogue
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/ritemadmin/index.php/product/catalog?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCategories&amp;token=4dad7b4d15bae6f2102836a48cb24aaa\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminTracking&amp;token=db4ead0845233c67b07b26d7043aaba6\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminAttributesGroups&amp;token=30a3e68a801018a0417b4f520b5d47ae\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminManufacturers&amp;token=4538eefcb94e47c11d8e2059c5df2bc7\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminAttachments&amp;token=5bd52a1914e6e7cde5697ff19ea182ed\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCartRules&amp;token=15369c558d5d9c21901eab2439eca9cf\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/ritemadmin/index.php/stock/?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCustomers&amp;token=e4de006c8ab66cb3b3d33062e095ed2c\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clients
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCustomers&amp;token=e4de006c8ab66cb3b3d33062e095ed2c\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminAddresses&amp;token=067b14903ec756e7bd01b2bde204a4be\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCustomerThreads&amp;token=ec7bc0337321e87af2721855396498f4\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    SAV
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCustomerThreads&amp;token=ec7bc0337321e87af2721855396498f4\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminOrderMessage&amp;token=210f782e858fbbdaf137ac7542fc856a\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminReturn&amp;token=320ce125d8b8fe0824b897537ac1d51f\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminStats&amp;token=821259c091a29e7d6a65d40987194553\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiques
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"42\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\">
                  <a href=\"/ritemadmin/index.php/module/catalog?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modules
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/ritemadmin/index.php/module/catalog?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\" class=\"link\"> Modules et services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminAddonsCatalog&amp;token=a6a5a542d3ac8957ce8c97f2206ebc3f\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminThemes&amp;token=92ead41cbd24a42890a8ce280583c96c\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Apparence
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminThemes&amp;token=92ead41cbd24a42890a8ce280583c96c\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminThemesCatalog&amp;token=19bc75fcd4864d7550a5eb598fff8ba8\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCmsContent&amp;token=6a519804af86ba8a439454425f788cd2\" class=\"link\"> Pages vues
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminModulesPositions&amp;token=b7f4e2d02334134af0e16ac31168267d\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminImages&amp;token=95516c078926c57fabab9b5cabe9907b\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminLinkWidget&amp;token=28d752bb90c566f510aa78082063aca3\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCarriers&amp;token=861c732f49e632f4290832de68670837\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Livraison
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCarriers&amp;token=861c732f49e632f4290832de68670837\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminShipping&amp;token=d56ebaebddcce9a1bf429a7ea117c27e\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPayment&amp;token=74990dacfb4d48cdb81afe8985e01325\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Paiement
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPayment&amp;token=74990dacfb4d48cdb81afe8985e01325\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPaymentPreferences&amp;token=b07681feb1e9032e116e52188be60217\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminLocalization&amp;token=1a2a3b9bb0323cdb8faeaaec89ccfd9a\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminLocalization&amp;token=1a2a3b9bb0323cdb8faeaaec89ccfd9a\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCountries&amp;token=4651eaad0837c499304c99afa4bc4e91\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminTaxes&amp;token=c3ae5f5f18015c40b702a3ea7f24ebde\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminTranslations&amp;token=ba5b814370a2c64d3c2b2a210f7ddf0f\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"120\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogDashboard&amp;token=9659267d225c44e1a1a25c4476d97534\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Ps Blog Management
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-120\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogDashboard&amp;token=9659267d225c44e1a1a25c4476d97534\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogCategories&amp;token=08fc9b3b58ff9a50b0de7b943dda3b56\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogBlogs&amp;token=49722a28a8004d57e33760db6c3c1dba\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"124\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogComments&amp;token=732158ba669856f9ba08175e1a1c0d32\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogModule&amp;token=26b8d9f05a2b6529368d3f0e8cf0fa32\" class=\"link\"> Ps Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPreferences&amp;token=bed6adb9fe3c3c8a8b6c6ee95740559a\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Paramètres de la boutique
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPreferences&amp;token=bed6adb9fe3c3c8a8b6c6ee95740559a\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminOrderPreferences&amp;token=c6beac9060a54776068e9ed1da963a5e\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPPreferences&amp;token=1d4e397574d238185f806f537143af24\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCustomerPreferences&amp;token=395d16b085df5eb46e1d63fdcb6ed684\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminContacts&amp;token=d6ab4ef9171555486b65063da1cb5242\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminMeta&amp;token=0cd840584e48125d6ca958b29640cadd\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminSearchConf&amp;token=2bc114e6f0efc1e5969be6b22e8f3c1a\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminGamification&amp;token=981b802357557a105d1684cb3cd8ee0a\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminInformation&amp;token=24780fa8a92a99307d8ee6aeafdc3bec\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Paramètres avancés
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminInformation&amp;token=24780fa8a92a99307d8ee6aeafdc3bec\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPerformance&amp;token=32e0d86f5cb59c8a2e57449ee607e6a3\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminAdminPreferences&amp;token=dc7e5b1799cd0057e63559a97fb859ca\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminEmails&amp;token=2f34d64e6b4c9e167e10fd50ff8df943\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminImport&amp;token=54b1389eb796e1932a714d77fee92c6d\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminEmployees&amp;token=f3f774014c6cc9468f1d3311d34976fb\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminRequestSql&amp;token=93a3393fbe880ac223a8782846702032\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminLogs&amp;token=c91d8819991f31e55107460d2ea5bba7\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminWebservice&amp;token=2697c4f5814dacdfca0c36489643ab92\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminParentModulesSf&amp;token=eefc2ac957aae77d759453a9f133dcb9\">Modules</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Sélection de modules    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Installer un module\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Installer un module</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Se connecter à la marketplace Addons\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Se connecter à la marketplace Addons</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Aide\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/ritemadmin/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.2.2%2526country%253Dfr/Aide?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Aide</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab current\"
   href=\"/ritemadmin/index.php/module/catalog?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\">Sélection</a>

                <a class=\"tab\"
   href=\"/ritemadmin/index.php/module/manage?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\">Modules installés</a>

                <a class=\"tab\"
   href=\"/ritemadmin/index.php/module/notifications?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\">Notifications  <div class=\"notification-container\">
    <span class=\"notification-counter\">4</span>
  </div>
  </a>

            </div>
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=julien.cnd%40gmail.com&amp;firstname=Julien&amp;lastname=Carou&amp;website=http%3A%2F%2Fvintury.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/ritemadmin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=julien.cnd%40gmail.com&amp;firstname=Julien&amp;lastname=Carou&amp;website=http%3A%2F%2Fvintury.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1214
        $this->displayBlock('content_header', $context, $blocks);
        // line 1215
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1216
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1217
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1218
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"m-t-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"m-t-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"m-t-2\">
    Merci.
  </p>
  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminDashboard&amp;token=f3b5b9fd7132151b0bb9c6defc73d252\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 0.736s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=julien.cnd%40gmail.com&amp;firstname=Julien&amp;lastname=Carou&amp;website=http%3A%2F%2Fvintury.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/ritemadmin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=julien.cnd%40gmail.com&amp;firstname=Julien&amp;lastname=Carou&amp;website=http%3A%2F%2Fvintury.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1386
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_5293f6e9e3fb40a930f94e96d89d6fa3e52b6463da2e03211fe64f0b4e830a5c->leave($__internal_5293f6e9e3fb40a930f94e96d89d6fa3e52b6463da2e03211fe64f0b4e830a5c_prof);

    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4360d4d0b106942e0d062dc2d9c12e18abdca6ba77afa529c457fc4358958af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4360d4d0b106942e0d062dc2d9c12e18abdca6ba77afa529c457fc4358958af8->enter($__internal_4360d4d0b106942e0d062dc2d9c12e18abdca6ba77afa529c457fc4358958af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4360d4d0b106942e0d062dc2d9c12e18abdca6ba77afa529c457fc4358958af8->leave($__internal_4360d4d0b106942e0d062dc2d9c12e18abdca6ba77afa529c457fc4358958af8_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_38038beebc845bfe30b73be6bc7c270d1574dbdf7a3084bed1dfc0c91b754d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38038beebc845bfe30b73be6bc7c270d1574dbdf7a3084bed1dfc0c91b754d46->enter($__internal_38038beebc845bfe30b73be6bc7c270d1574dbdf7a3084bed1dfc0c91b754d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_38038beebc845bfe30b73be6bc7c270d1574dbdf7a3084bed1dfc0c91b754d46->leave($__internal_38038beebc845bfe30b73be6bc7c270d1574dbdf7a3084bed1dfc0c91b754d46_prof);

    }

    // line 1214
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_2ee4b717e37b7a0e23af95b599987a64ec18e5166951f223afd3657070bb4a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee4b717e37b7a0e23af95b599987a64ec18e5166951f223afd3657070bb4a21->enter($__internal_2ee4b717e37b7a0e23af95b599987a64ec18e5166951f223afd3657070bb4a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_2ee4b717e37b7a0e23af95b599987a64ec18e5166951f223afd3657070bb4a21->leave($__internal_2ee4b717e37b7a0e23af95b599987a64ec18e5166951f223afd3657070bb4a21_prof);

    }

    // line 1215
    public function block_content($context, array $blocks = array())
    {
        $__internal_f282d41120a5bd6def2048c8da6a093bd301c29f873446277d2dfc76efd5d7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f282d41120a5bd6def2048c8da6a093bd301c29f873446277d2dfc76efd5d7a8->enter($__internal_f282d41120a5bd6def2048c8da6a093bd301c29f873446277d2dfc76efd5d7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f282d41120a5bd6def2048c8da6a093bd301c29f873446277d2dfc76efd5d7a8->leave($__internal_f282d41120a5bd6def2048c8da6a093bd301c29f873446277d2dfc76efd5d7a8_prof);

    }

    // line 1216
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_23151ad0c9cc22f256038121ffa359a40a9f1c473d5b258328f30daf148e5470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23151ad0c9cc22f256038121ffa359a40a9f1c473d5b258328f30daf148e5470->enter($__internal_23151ad0c9cc22f256038121ffa359a40a9f1c473d5b258328f30daf148e5470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_23151ad0c9cc22f256038121ffa359a40a9f1c473d5b258328f30daf148e5470->leave($__internal_23151ad0c9cc22f256038121ffa359a40a9f1c473d5b258328f30daf148e5470_prof);

    }

    // line 1217
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_235573bb600cf3444f61d731d840c6e193943cebf49221f9d56d89a0deaed1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235573bb600cf3444f61d731d840c6e193943cebf49221f9d56d89a0deaed1bf->enter($__internal_235573bb600cf3444f61d731d840c6e193943cebf49221f9d56d89a0deaed1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_235573bb600cf3444f61d731d840c6e193943cebf49221f9d56d89a0deaed1bf->leave($__internal_235573bb600cf3444f61d731d840c6e193943cebf49221f9d56d89a0deaed1bf_prof);

    }

    // line 1386
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17e10a9e1b3b0226f3c7b3273aa37b4cb5bbc6c2574ce59704a2edfe2105522b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e10a9e1b3b0226f3c7b3273aa37b4cb5bbc6c2574ce59704a2edfe2105522b->enter($__internal_17e10a9e1b3b0226f3c7b3273aa37b4cb5bbc6c2574ce59704a2edfe2105522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_17e10a9e1b3b0226f3c7b3273aa37b4cb5bbc6c2574ce59704a2edfe2105522b->leave($__internal_17e10a9e1b3b0226f3c7b3273aa37b4cb5bbc6c2574ce59704a2edfe2105522b_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_b92128283825bc49350d93c6c812e94563788eee4e99028db081ee025a984285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92128283825bc49350d93c6c812e94563788eee4e99028db081ee025a984285->enter($__internal_b92128283825bc49350d93c6c812e94563788eee4e99028db081ee025a984285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_b92128283825bc49350d93c6c812e94563788eee4e99028db081ee025a984285->leave($__internal_b92128283825bc49350d93c6c812e94563788eee4e99028db081ee025a984285_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_ab96a400e3b4b758f9c1c698431a0fa9632490556553f86a0ef432404db0e46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab96a400e3b4b758f9c1c698431a0fa9632490556553f86a0ef432404db0e46d->enter($__internal_ab96a400e3b4b758f9c1c698431a0fa9632490556553f86a0ef432404db0e46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_ab96a400e3b4b758f9c1c698431a0fa9632490556553f86a0ef432404db0e46d->leave($__internal_ab96a400e3b4b758f9c1c698431a0fa9632490556553f86a0ef432404db0e46d_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__c712e8012de041c27983da2eb57e8b112a9566ae487b31fbbcde70e10ce7ce9f";
    }

    public function getDebugInfo()
    {
        return array (  1507 => 1386,  1496 => 1217,  1485 => 1216,  1474 => 1215,  1463 => 1214,  1442 => 82,  1431 => 1386,  1261 => 1218,  1258 => 1217,  1255 => 1216,  1252 => 1215,  1250 => 1214,  114 => 82,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Sélection de modules • Vintury</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.2.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'a0ddc4da928aeed8dceb39b94be7618d';
    var token_admin_orders = '1260fe89c5555df678922ee2c02db7c0';
    var token_admin_customers = 'e4de006c8ab66cb3b3d33062e095ed2c';
    var token_admin_customer_threads = 'ec7bc0337321e87af2721855396498f4';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = 'f3f774014c6cc9468f1d3311d34976fb';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/ritemadmin/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ritemadmin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ritemadmin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/ritemadmin\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/ritemadmin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/ritemadmin/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ritemadmin/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://vintury.fr/ritemadmin/index.php?controller=AdminGamification&token=981b802357557a105d1684cb3cd8ee0a';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"adminmodules\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminDashboard&amp;token=f3b5b9fd7132151b0bb9c6defc73d252\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminOrders&amp;token=1260fe89c5555df678922ee2c02db7c0\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://vintury.fr/ritemadmin/index.php/module/manage?token=9aaf108466e8240329dd1c4fa64dfbbc\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=15369c558d5d9c21901eab2439eca9cf\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://vintury.fr/ritemadmin/index.php/product/new?token=9aaf108466e8240329dd1c4fa64dfbbc\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCategories&amp;addcategory&amp;token=4dad7b4d15bae6f2102836a48cb24aaa\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"31\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/module/catalog\"
        data-post-link=\"http://vintury.fr/ritemadmin/index.php?controller=AdminQuickAccesses&token=43726bf2d58da7fe9ab0a84bfad184d5\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\" - Liste\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminQuickAccesses&token=43726bf2d58da7fe9ab0a84bfad184d5\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/ritemadmin/index.php?controller=AdminSearch&amp;token=e9fd298d40216ed4b939d210646dc928\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">RECHERCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/julien.cnd%40gmail.com.jpg\" /><br>
      <span>Julien Carou</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminEmployees&amp;token=f3f774014c6cc9468f1d3311d34976fb&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminLogin&amp;token=5a184e4cd4b1c9af8ebf5424a3419f0f&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté votre taux de conversion dernièrement ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Avez-vous fait une campagne d'acquisition par e-mail récemment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://vintury.fr/\" target= \"_blank\">Vintury</a>
  </div>
</div>
          <div class=\"component pull-right hidden-md-down\">
        <div class=\"shop-state\" id=\"maintenance-mode\">
          <i class=\"material-icons\">build</i>
          <a class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"<p class='text-left text-nowrap'><strong>Votre boutique est en maintenance.</strong></p><p class='text-left'>Vos clients et visiteurs ne peuvent y accéder actuellement. &lt;br /&gt; Vous pouvez gérer les paramètres de maintenance dans l'onglet Maintenance de la page Paramètres de la boutique.</p>\" href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminMaintenance&amp;token=1bc557a3eb89f16bc025beda7f361a13\">
              Mode maintenance
          </a>
        </div>
      </div>
              <div class=\"component pull-right hidden-md-down\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
            title=\"<p class='text-left text-nowrap'><strong>Votre boutique est en mode de débogage.</strong></p><p class='text-left'>Tous les messages et erreurs PHP sont affichés. Lorsque vous n'en avez plus besoin, <strong>désactivez</strong> ce mode.</p>\">Mode debug</span>
        </div>
      </div>
        

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminDashboard&amp;token=f3b5b9fd7132151b0bb9c6defc73d252\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminOrders&amp;token=1260fe89c5555df678922ee2c02db7c0\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Commandes
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminOrders&amp;token=1260fe89c5555df678922ee2c02db7c0\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminInvoices&amp;token=2af109f94a475846ffca4eaca1e62971\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminSlip&amp;token=8c9c742876fd7ec40cd3f46def2ee09b\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminDeliverySlip&amp;token=084cdb7224a1d5d21298169b001aeaa3\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCarts&amp;token=3b1e126ddad5f55ffdf27f9e85404af7\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/ritemadmin/index.php/product/catalog?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalogue
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/ritemadmin/index.php/product/catalog?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCategories&amp;token=4dad7b4d15bae6f2102836a48cb24aaa\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminTracking&amp;token=db4ead0845233c67b07b26d7043aaba6\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminAttributesGroups&amp;token=30a3e68a801018a0417b4f520b5d47ae\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminManufacturers&amp;token=4538eefcb94e47c11d8e2059c5df2bc7\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminAttachments&amp;token=5bd52a1914e6e7cde5697ff19ea182ed\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCartRules&amp;token=15369c558d5d9c21901eab2439eca9cf\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/ritemadmin/index.php/stock/?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCustomers&amp;token=e4de006c8ab66cb3b3d33062e095ed2c\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clients
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCustomers&amp;token=e4de006c8ab66cb3b3d33062e095ed2c\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminAddresses&amp;token=067b14903ec756e7bd01b2bde204a4be\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCustomerThreads&amp;token=ec7bc0337321e87af2721855396498f4\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    SAV
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCustomerThreads&amp;token=ec7bc0337321e87af2721855396498f4\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminOrderMessage&amp;token=210f782e858fbbdaf137ac7542fc856a\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminReturn&amp;token=320ce125d8b8fe0824b897537ac1d51f\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminStats&amp;token=821259c091a29e7d6a65d40987194553\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiques
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"42\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\">
                  <a href=\"/ritemadmin/index.php/module/catalog?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modules
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/ritemadmin/index.php/module/catalog?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\" class=\"link\"> Modules et services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminAddonsCatalog&amp;token=a6a5a542d3ac8957ce8c97f2206ebc3f\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminThemes&amp;token=92ead41cbd24a42890a8ce280583c96c\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Apparence
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminThemes&amp;token=92ead41cbd24a42890a8ce280583c96c\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminThemesCatalog&amp;token=19bc75fcd4864d7550a5eb598fff8ba8\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCmsContent&amp;token=6a519804af86ba8a439454425f788cd2\" class=\"link\"> Pages vues
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminModulesPositions&amp;token=b7f4e2d02334134af0e16ac31168267d\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminImages&amp;token=95516c078926c57fabab9b5cabe9907b\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminLinkWidget&amp;token=28d752bb90c566f510aa78082063aca3\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCarriers&amp;token=861c732f49e632f4290832de68670837\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Livraison
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCarriers&amp;token=861c732f49e632f4290832de68670837\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminShipping&amp;token=d56ebaebddcce9a1bf429a7ea117c27e\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPayment&amp;token=74990dacfb4d48cdb81afe8985e01325\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Paiement
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPayment&amp;token=74990dacfb4d48cdb81afe8985e01325\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPaymentPreferences&amp;token=b07681feb1e9032e116e52188be60217\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminLocalization&amp;token=1a2a3b9bb0323cdb8faeaaec89ccfd9a\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminLocalization&amp;token=1a2a3b9bb0323cdb8faeaaec89ccfd9a\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCountries&amp;token=4651eaad0837c499304c99afa4bc4e91\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminTaxes&amp;token=c3ae5f5f18015c40b702a3ea7f24ebde\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminTranslations&amp;token=ba5b814370a2c64d3c2b2a210f7ddf0f\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"120\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogDashboard&amp;token=9659267d225c44e1a1a25c4476d97534\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Ps Blog Management
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-120\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogDashboard&amp;token=9659267d225c44e1a1a25c4476d97534\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogCategories&amp;token=08fc9b3b58ff9a50b0de7b943dda3b56\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogBlogs&amp;token=49722a28a8004d57e33760db6c3c1dba\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"124\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogComments&amp;token=732158ba669856f9ba08175e1a1c0d32\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPsblogModule&amp;token=26b8d9f05a2b6529368d3f0e8cf0fa32\" class=\"link\"> Ps Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPreferences&amp;token=bed6adb9fe3c3c8a8b6c6ee95740559a\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Paramètres de la boutique
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPreferences&amp;token=bed6adb9fe3c3c8a8b6c6ee95740559a\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminOrderPreferences&amp;token=c6beac9060a54776068e9ed1da963a5e\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPPreferences&amp;token=1d4e397574d238185f806f537143af24\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminCustomerPreferences&amp;token=395d16b085df5eb46e1d63fdcb6ed684\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminContacts&amp;token=d6ab4ef9171555486b65063da1cb5242\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminMeta&amp;token=0cd840584e48125d6ca958b29640cadd\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminSearchConf&amp;token=2bc114e6f0efc1e5969be6b22e8f3c1a\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminGamification&amp;token=981b802357557a105d1684cb3cd8ee0a\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminInformation&amp;token=24780fa8a92a99307d8ee6aeafdc3bec\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Paramètres avancés
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminInformation&amp;token=24780fa8a92a99307d8ee6aeafdc3bec\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminPerformance&amp;token=32e0d86f5cb59c8a2e57449ee607e6a3\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminAdminPreferences&amp;token=dc7e5b1799cd0057e63559a97fb859ca\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminEmails&amp;token=2f34d64e6b4c9e167e10fd50ff8df943\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminImport&amp;token=54b1389eb796e1932a714d77fee92c6d\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminEmployees&amp;token=f3f774014c6cc9468f1d3311d34976fb\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminRequestSql&amp;token=93a3393fbe880ac223a8782846702032\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminLogs&amp;token=c91d8819991f31e55107460d2ea5bba7\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminWebservice&amp;token=2697c4f5814dacdfca0c36489643ab92\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminParentModulesSf&amp;token=eefc2ac957aae77d759453a9f133dcb9\">Modules</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Sélection de modules    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Installer un module\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Installer un module</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Se connecter à la marketplace Addons\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Se connecter à la marketplace Addons</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Aide\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/ritemadmin/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.2.2%2526country%253Dfr/Aide?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Aide</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab current\"
   href=\"/ritemadmin/index.php/module/catalog?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\">Sélection</a>

                <a class=\"tab\"
   href=\"/ritemadmin/index.php/module/manage?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\">Modules installés</a>

                <a class=\"tab\"
   href=\"/ritemadmin/index.php/module/notifications?_token=sNnVEmSfsKhSmRgjCRb_Jau4BvcNEW3l0L3ro2JZehk\">Notifications  <div class=\"notification-container\">
    <span class=\"notification-counter\">4</span>
  </div>
  </a>

            </div>
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=julien.cnd%40gmail.com&amp;firstname=Julien&amp;lastname=Carou&amp;website=http%3A%2F%2Fvintury.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/ritemadmin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=julien.cnd%40gmail.com&amp;firstname=Julien&amp;lastname=Carou&amp;website=http%3A%2F%2Fvintury.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"m-t-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"m-t-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"m-t-2\">
    Merci.
  </p>
  <a href=\"http://vintury.fr/ritemadmin/index.php?controller=AdminDashboard&amp;token=f3b5b9fd7132151b0bb9c6defc73d252\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 0.736s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=julien.cnd%40gmail.com&amp;firstname=Julien&amp;lastname=Carou&amp;website=http%3A%2F%2Fvintury.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/ritemadmin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=julien.cnd%40gmail.com&amp;firstname=Julien&amp;lastname=Carou&amp;website=http%3A%2F%2Fvintury.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__c712e8012de041c27983da2eb57e8b112a9566ae487b31fbbcde70e10ce7ce9f", "");
    }
}
