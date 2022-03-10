<?php
require_once '../inc/functions.php';

/* === Exo 9 : Paramètres d'URL ===
 *
 * Pour vérifier vos connaissances sur les paramètres d'URL,
 * on va considérer qu'on se trouve sur un site de mini-jeux 2 joueurs
 * et qu'on se trouve sur la page où le jeu a été choisi, et le nom des joueurs renseigné
 *
 * Pour pouvoir commencer le jeu, il nous faut les trois informations suivantes :
 * le nom du jeu dans une variable nommée "jeu"
 * le nom du premier joueur dans une variable nommée "premierJoueur"
 * le nom du second joueur dans une variable nommée "secondJoueur"
 * 
 * Analysez l'URL pour comprendre quelles valeurs sont attendues dans chacune de ces variables
 */

 // étape 1 : récupérer le nom du jeu avec un filter_input
 // placer le nom du jeu dans une variable $jeu
$jeu = filter_input(INPUT_GET, 'game', FILTER_SANITIZE_STRING);

 // étape 2 : récupérer le nom du premier joueur avec un filter_input
 // placer le nom du joueur dans une variable $premierJoueur
 $premierJoueur = filter_input(INPUT_GET, 'player1', FILTER_SANITIZE_STRING);

 // étape 3 : récupérer le nom du second joueur avec un filter_input
 // placer le nom du joueur dans une variable $secondJoueur
 $secondJoueur = filter_input(INPUT_GET, 'player2', FILTER_SANITIZE_STRING);


/*
 * Tests
 * Pas touche !
 */
check(9);
