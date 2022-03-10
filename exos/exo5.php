<?php
require_once '../inc/functions.php';
require_once '../inc/bart.php'; // fichier déclarant la variable $bartPunishment

/* === Exo 5 : 3 punitions ===
 *
 * Après South Park, parlons d'un autre enfant calme, gentil et exemplaire : Bart Simpson !
 * 
 * Un peu plus haut, nous avons inclus un fichier "bart.php".
 * Analyse le contenu de ce fichier, et la variable $bartPunishment
 * 
 * A partir de cette variable,
 *   - stocke dans la variable $sentence1 la première phrase de la liste
 *   - stocke dans la variable $sentence4 la phrase à l'index 4 de la liste
 *   - stocke dans la variable $sentenceX l'avant-dernière phrase de la liste
 */

// A toi de jouer

// étape 1 : créer une variable sentence 1
// placer dedans la première phrase de la liste

$sentence1 = $bartPunishment[1];

// étape 2 : créer une variable sentence 4
// placer dedans la quatrième phrase de la liste

$sentence4 = $bartPunishment[4];

// étape 3 : créer une variable sentence X
// placer dedans l'avant-dernière phrase de la liste
// on peut compter le nombre d'entrées avec la fonction count()
// stocker cette fonction dans une variable $count
// cette fonction est contient donc la clé du tableau, je cherche sa valeur
// j'appelle donc le tableau, et je cherche sa valeur à la clé $count-1 (car je cherche l'avant-dernière valeur)

$count = count($bartPunishment);
$sentenceX = $bartPunishment[$count-1];


/*
 * Tests
 * Pas touche !
 */
check(5);
