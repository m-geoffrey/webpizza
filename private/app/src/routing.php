<?php
/**
 * Fichier de routge de l'application
 * 
 * RAPPEL du format d'une route dans le tableau $route
 *  - Le nom de la route
 *  - Le "path"
 *  - Le "controller", la fonction déclenché par la route
 *  - La|Les méthode(s)
 */

// Dans le cas ou la variable $routes n'est pas défini (dans le fichier routes.php)
// On initialise la variable $routes avec un tableau vide
if (!isset($routes)) {
    $routes = [];
}

// Récupération de l'uri courant
if (!empty($_SERVER['REQUEST_URI']))
{
    $uri = $_SERVER['REQUEST_URI'];
}

// Recherche de l'URI dans le tableau de routage
foreach ($routes as $route)
{
    // Le paramètre "path" doit correspondre à l'$uri
    if ($route[1] == $uri)
    {
    // On ajoute le nom de la route courante dans la variable $GLOBALS de PHP
    // pour l'utiliser par la suite
    $GLOBALS['route_active'] = $routes[0];

    // Si la route est trouvée dans la table de routage on sort de la boucle
    // grace au mot clé "break;"
    // La variable $route contient les infos de la dernière itération de la boucle
    break;
    }
}

// A ce niveau soit la variable $route est reneignée grace à un URI trouvée
// dans le tableau $route, soit elle à pris la valeur de la dernière itération
// du tableau $route, C.A.D. la route 404
// var_dump($route);

if(!isset($GLOBALS['route_active'])) {
    $GLOBALS['route_active'] = "error-404";
}
