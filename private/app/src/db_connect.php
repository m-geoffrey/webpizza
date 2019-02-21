<?php

// Dans le cas ou la variable $db_config n'est pas défini (dans le fichier config.php)
// On initialise la variable $db_config
if ( isset($db_config) ) {
    $db_config = [];
}

// On boucle sur la liste de cfg des connexions aux BDD
foreach ($db_config as $name => $params)
{
    // 'mysql:host=localhost;dbname=DBNAME'
    $db_dsn = $params['type'].":";
    $db_dsn.= "host=". $params['host'].";";
    $db_dsn.= "port=". $params['port'].";";
    $db_dsn.= "dbname=". $params['schema'].";";
    $db_dsn.="charset". $params['charset'].";";

    // nom de l'utilisateur de la BDD
    $db_user = $params['user'];

    // Mot de passe de l'utilisateur de la BDD
    $db_pass = $params['pass'];

    // Instance de connexion
    $db[$name] = new PDO($db_dsn, $db_user, $db_pass);

    if ($env == "dev") {
        $db[$name]->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
