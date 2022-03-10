<?php

/**
 * Pas touche ! 
 */
require_once '../inc/functions.php';

/**
 * 
 * Voilà le plan : Il va falloir coder un petit programme permettant de générer une grille de 5 numéros du loto choisis aléatoirement.
 * Les numéros sont compris entre 1 et 49 et il faudra aussi ajouter le numéro complémentaire compris entre 1 et 10 !
 * On veut obtenir ces numéros dans un tableau, par exemple : [45, 5, 1, 13, 28].
 * 
 * Il faudra stocker le résultat dans un array $grilleLoto.
 * 
 * Pour générer un nombre aléatoire, tu peux utiliser une des fonctions fournies par PHP : mt_rand()
 * 
 */

// c'est parti !

// Entrée : rien
// Sortie : le tableau de tous les numéros de la grille
function numerosLoto() {
    // préparer la liste des nombres (vide)
    $grilleLoto = [];

    // tant qu'on n'a pas 5 nombres dans notre liste
    while (count($grilleLoto) <= 4) {
        // on tire un nombre au hasard entre 1 et 49
        $numeroTire = mt_rand(1, 49);

        // s'il n'est pas déjà dans la liste (voir plus bas)
        if (!isAlreadyInList($grilleLoto, $numeroTire)) {
            $grilleLoto[] = $numeroTire;
        }
    // on recommence
    }

    // on ajoute un nombre au hasard entre 1 et 10 (numéro complémentaire)
    $grilleLoto[] = mt_rand(1, 10);
    
    // retourner la liste
    return $grilleLoto;
};
////// Déterminer si un numéro est déjà dans la liste //////
// En entrée, on aura besoin de la liste et du nombre à rechercher
function isAlreadyInList($grilleLoto, $numeroTire) {
    // pour chaque nombre dans la liste
    foreach ($grilleLoto as $numero) {
        // s'il y a égalité entre le nombre de la liste et le nombre qu'on veut ajouter
        if ($numero == $numeroTire) {
            // alors le nombre est déjà dans la liste
            return true;
        }
    }

    // sinon le nombre n'est pas dans la liste
    return false;
}
/** 
 * Tests
 * Pas touche !
 */
check(11, 'numerosLoto');
