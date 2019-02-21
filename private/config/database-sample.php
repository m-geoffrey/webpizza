<?php

/**
 * Fichier de configuration des connexions aux bases de données
 */

 $db_config = [

    // Base de données principale
    "main" => [                     // nom de la connexion, utilis uniquement dans nos fichiers php, donnera $db['main]
        "type" => "",          // Type de BDD
        "host" => "",      // Adresse du serveur de base de données
        "port" => "",           // Port de connexion
        "user" => "",           // Nom d'utilisateur de la BDD
        "pass" => "",               // Mot de passe de l'utilisateur
        "schema" => ""      // Nom de la base de données
        "charset" => ""    // Param de charset
    ]
];
