<?php

try {
    // ici je me connecte a la base de données
} catch(Exception $e){
    // ici je recupere et affiche l'erreur
    die('ERREUR : ' .$e -> getMessage());
}