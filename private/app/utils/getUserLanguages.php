<?php
/**
 * Détermine les langues de l'utilisateur
 * 
 */
if (!function_exists('getUserLanguages'))
{
    function getUserLanguages($all_languages=false)
    {
        // On récupère la liste des langues depuis la super globale $_SERVER
        $languages_str = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

        // On convertit la chaine en tableau
        $languages_arr = explode(",", $languages_str);

        // On boucle sur la liste des langues
        foreach ($languages_arr as $key => $lang)
        {
            $lang = explode(";", $lang);
            $lang = $lang[0];

            // dump( $lang );
            // dump( $languages_arr[$key] = $lang );
        }

        if ($all_languages)
        {
             return $languages_arr;
        }

        return $languages_arr[0];
    }
}

// La langue principale
    // dump (getUserLanguages());
    // dump (getUserLanguages(false));

// Touts les langues
    // dump (getUserLanguages(true));