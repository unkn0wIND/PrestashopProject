<?php
/**
 * Module opartdevis
 *
 * @category Prestashop
 * @category Module
 * @author    Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright Op'art
 * @license   Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

$sql = array();
$sql[] = 'SET foreign_key_checks = 0;';
$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'opartdevis`;';
$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'opartdevis_text`;';
$sql[] = 'SET foreign_key_checks = 1;';
