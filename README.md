# PrestashopProject

# # # # # # # # # # # # # # # # # # # # # # # # # # # # 

Pour installer le projet vintury en local

http://localhost/vintury/ritemadmin/  => backOffice

# # # # # # # # # # # # # # # # # # # # # # # # # # # # 

Nom de la boutique :  Vintury

Login    :  julien.cnd@gmail.com
Password :  Adminwebvin1

# # # # # # # # # # # # # # # # # # # # # # # # # # # #

Suivre ces étapes pour installer le projet en local :

- Mettre la version 7.1.33 de PHP sur WAMP
- Copier/Coller tout le projet dans le dossier wamp/www/
- Crée une base de donnée vintury
- Importer la base de donnée (db_localhost_vintury.sql)
- Ouvrir la table ri_shop_url et modifier le domain par 127.0.0.1 et ajouter le physical_url "/vintury/"
- Ouvrir app/config/parameters.php :

# # # # # # # # # # # # # # # # # # # # # # # # # # # # 

<?php return array (
  'parameters' => 
  array (
    'database_host' => '127.0.0.1',
    'database_port' => '3306',
    'database_name' => 'vintury',       // Ici Nom de la base de donnée
    'database_user' => 'root',
    'database_password' => '',
    'database_prefix' => 'ri_',    // Ajouter ce dabatase_prefix
    'database_engine' => 'MySQL',
    'mailer_transport' => 'smtp',
    'mailer_host' => '127.0.0.1',
    'mailer_user' => NULL,
    'mailer_password' => NULL,
    'secret' => 'Q0MHUEWx5wEQBA9TmnXfKDCtCGNMWDX0Pn6Iu3NxWUvF3iXqhDbwUxTJ',
    'ps_caching' => 'CacheMemcache',
    'ps_cache_enable' => false,
    'ps_creation_date' => '2017-11-29',
    'locale' => 'fr-FR',
    'cookie_key' => 'mo9BAaiGrn4Eo2IqupynDGOWGOCOF6ROPEWMgv1vMgNU8BSNHRkhxCOL',
    'cookie_iv' => 'VvxCSBFN',
    'new_cookie_key' => 'def000001a6f4a931be8074faab6044d6cb8d259698b8f624b921e5e08b9f99040603daea7896b5d2fe0dde3f1658f2ded2fa47a40650d42d3916ab89650fc54991b280e',
  ),
);

# # # # # # # # # # # # # # # # # # # # # # # # # # # # 
