<?php
require_once '../inc/functions.php';
require_once '../inc/bart2.php'; // fichier déclarant la variable $bartPunishment
ob_start();

/* === Exo 8 : Punitions en image ===
 *
 * Dans la continuité de l'exo précédent,
 * on voudrait que tu parcours tout le tableau $bartPunishment
 * afin d'afficher chaque phrase, suivie de son image associée
 * 
 * Il y a plusieurs façons d'arriver au résultat attendu.
 * On ne demande pas du code HTML étoffé.
 * Juste une balise <img> pour afficher chaque image
 * 
 * Info utile :
 *   - si dans ta boucle tu as besoin de distinguer une phrase d'une image
 *   - tu peux utiliser :
 *      - la fonction strstr (https://www.php.net/manual/fr/function.strstr)
 *      - ou la fonction substr (https://www.php.net/manual/fr/function.substr.php)
 * 
 * En cas de difficulté :
 *    - ne t'embête pas à afficher l'image
 *    - afficher l'URL de l'image nous suffira ;)
 */

// A toi de jouer


// créer une boucle foreach pour afficher toutes les valeurs et toutes les images
// récupérer le tableau et définir chaque valeur de chaque clé comme étant dans une variable $punition
// faire un echo de cette variable pour afficher les punitions
// faire un print pour afficher les images



for ($keyNumber=1; $keyNumber <= 15; $keyNumber++) { // 15 itérations
    // On affiche la phrase
    echo $bartPunishment['sentence' . $keyNumber].'<br>';
    // On récupère l'image
    $imgFilename = $bartPunishment['picture' . $keyNumber];
    // On affiche l'image
    echo '<img src="' . $imgFilename . '" alt="punishment"><br>';
}

foreach ($bartPunishment as $key=>$value) { // 30 itérations
    // Si c'est une phrase
    if (substr($key, 0, 8) === 'sentence') {
        // On affiche la phrase
        echo $value;
    }
    // Sinon, c'est que ça doit être une image
    else {
        // On affiche l'image
        echo '<img src="' . $value . '" alt="punishment">';
    }
    echo '<br>'; // optionnel => pour la lisibilité
}

// ------ Aide ------
// Si une chaine de caractère $string contient le mot "sentence"
// -- AVEC strstr --
// $boolean = strstr($string, "sentence");
// -- AVEC substr --
// $boolean = substr($string, 0, 8) == 'sentence';

/*
 * Tests
 * Pas touche !
 */
check(8);
