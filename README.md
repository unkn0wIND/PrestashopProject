# PrestashopProject | Installer le projet Vintury en local


Identifiants pour se connecter au backOffice 

Login    :  julien.cnd@gmail.com
Password :  Adminwebvin1

Lien du backOffice : http://localhost/vintury/ritemadmin/ 

# # # # # # # # # # # # # # # # # # # # # # # # # # # #

Suivre ces étapes pour installer le projet en local :

- Mettre la version 7.1.33 de PHP sur WAMP
- Copier/Coller tout le projet dans le dossier wamp/www/
- Crée une base de donnée vintury
- Importer la base de donnée (db_localhost_vintury.sql)
- Ouvrir la table ri_shop_url et modifier le domain par 127.0.0.1 et ajouter le physical_url "/vintury/"

# Ouvrir app/config/parameters.php :

- Ajouter vos identifiants host, port, user et password
- Ajouter comme database_prefix => 'ri_'
- Ajouter comme database_name => 'vinruty'


