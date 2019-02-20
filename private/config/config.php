<?php
/**
 * Fichier de configuration general de l'application
 * 
 * 1. Définition des constantes
 * 2. Définition des variables d'environnement d'exécution
 * 3. Définition 
 */

/**
 * 1. Définition des constantes
 */

// Définir le chemin du répertoire "utils"
define('UTILS_PATH', "../private/app/utils/");

// WEBSITE_TITLE : Définition du titre du site
define ('WEBSITE_TITLE', "WebPizza !");

/**
 * 2. Définition des variables d'environnement d'exécution
 */

 // Environnement de développement ou production ?
 // Les valeurs peuvent être : "prod" ou "dev"
//  Par défaut on considère que l'application s'exécute en environnement de PROD
$env = "prod";

 // Liste des domaines que l'on considère comme étant des environnements de développement
$dev_domains = [
    "127.0.0.1",
    "localhost",
    "webpizza.local"
];


