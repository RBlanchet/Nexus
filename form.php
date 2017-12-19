<?php
// Ce fichier detecte si un Post a été envoyé, si c'est le cas on actualise notre Session ou on l'append
session_start();
// On inclut le fichier de fonctions
require_once('functions.php');

// Si la session paragraphe n'est pas existante
if(!isset($_SESSION['paragraphe']))
{
    // On initialise un tableau vide
    $_SESSION['paragraphe'] = array();
}
if(!isset($_SESSION['input']))
{
    // On initialise un tableau vide
    $_SESSION['input'] = array();
}
// Si on a envoyé un formulaire concernant une navbar
if (isset($_POST['navbarName'])) {
    // On ajoute a la session le titre de la navbar
    $_SESSION['navbar'] = $_POST['navbarName'];
    $_SESSION['navbarLink'] = $_POST['navbarLink'];
}
// Si on a envoyé un paragraphe
if (isset($_POST['paragraph-content'])) {
    // On push le tableau afin que le paragraphe s'affiche
    array_push($_SESSION['paragraphe'], $_POST['paragraph-content']);
}
// Si le formulaire concerne un container
if (isset($_POST['container-fluid'])) {
    $_SESSION['container'] = true;
}
if (isset($_POST['container'])) {
    $_SESSION['container'] = false;
}
// Si le formulaire concerne un input
if (isset($_POST['inputType'])) {
    $tab = array($_POST['inputType'], $_POST['inputName']);
    array_push($_SESSION['input'], $tab);
}
// On effectue la redirection
header('Location: index.php');
