<?php
session_start();
// On inclut le fichier de fonctions
require_once('functions.php');
// On inclut le body header ainsi que body
include('layout/header.php');
include('layout/body.php');

// Afin que le text ne soit pas caler tout en haut
echo "<div style='padding-top: 15vh'></div>";
// Si la session container est pas vide
if(isset($_SESSION['container']))
{
    container($_SESSION['container']);
}

// On detecte si une session navbar existe deja
if (isset($_SESSION['navbar'])) {
    navbar($_SESSION['navbar'], $_SESSION['navbarLink']);
}

// Si la session paragraphe est pas vide
if(isset($_SESSION['paragraphe']))
{
    // On boucle sur le tableau paragraphe
    foreach ($_SESSION['paragraphe'] as $value)
    {
        // On renvoie la fonction p
        p($value);
    }
}
// Si la session container est pas vide
if(isset($_SESSION['input']))
{
    // On débute le formulaire
    echo "<form method='POST' action='troll.php'>";
    // On boucle sur le tableau des input
    foreach ($_SESSION['input'] as $value)
    {
        // On ajoute l'input qui est stocké en session
        input($value[0], $value[1]);
    }
    // On ferme le formulaire
    echo "</form>";
}

// On inclut le footer

include('layout/footer.php');
