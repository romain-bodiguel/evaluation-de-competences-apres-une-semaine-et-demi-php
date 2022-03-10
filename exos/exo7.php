<?php
require_once '../inc/functions.php';
require_once '../inc/bart2.php'; // fichier déclarant la variable $bartPunishment
ob_start();

/* === Exo 7 : 3 punitions et leur image ===
 *
 * Cette fois, on a ajouté une donnée supplémentaire dans le tableau des exos précédents : l'image de chaque punition
 * Ces images sont extraites du fameux générique de la série.
 * L'image de la 10e punition va te surprendre !
 * 
 * On va s'occuper de récupérer quelques informations du tableau, comme pour l'exo 5.
 * 
 * 1ère étape : ANALYSER !!
 *   - analyse le tableau $bartPunishment
 *   - la structure a bien changé !
 * 
 * 2e étape :
 *   - A partir de cette variable,
 *      - stocke dans la variable $sentence1 la première phrase de la liste
 *      - stocke dans la variable $sentence7 la 7e phrase de la liste
 *      - stocke dans la variable $sentenceX l'avant-dernière phrase de la liste
 *      - => tu peux alors constater les changements depuis l'exo 5
 *      - stocke dans la variable $image1 l'image de la première phrase de la liste
 *      - stocke dans la variable $image7 l'image de la 7e phrase de la liste
 *      - stocke dans la variable $imageX l'image de l'avant-dernière phrase de la liste
 */

// A toi de jouer

// étape 1 : créer une variable sentence 1
// placer dedans la première phrase de la liste, qui est la clé 'sentence1'

$sentence1 = $bartPunishment['sentence1'];

// étape 2 : créer une variable sentence 4
// placer dedans la septième phrase de la liste, qui est la clé 'sentence7'

$sentence7 = $bartPunishment['sentence7'];

// étape 3 : créer une variable sentence X
// placer dedans la quatorzième phrase de la liste, qui est la clé 'sentence14'

$sentenceX = $bartPunishment['sentence14'];

// étape 4 : créer une variable sentence 1
// placer dedans la première phrase de la liste, qui est la clé 'sentence1'

$image1 = $bartPunishment['picture1'];

// étape 5 : créer une variable sentence 4
// placer dedans la septième phrase de la liste, qui est la clé 'sentence7'

$image7 = $bartPunishment['picture7'];

// étape 6 : créer une variable sentence X
// placer dedans la quatorzième phrase de la liste, qui est la clé 'sentence14'

$imageX = $bartPunishment['picture14'];


/*
 * Tests
 * Pas touche !
 */
check(7);
