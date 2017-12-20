<?php
// Ce fichier detecte si un Post a été envoyé, si c'est le cas on actualise notre Session ou on l'append
session_start();
// On inclut le fichier de fonctions
require_once('functions.php');

if(!isset($_SESSION['html']))
{
    // On initialise un tableau vide
    $_SESSION['html'] = "";
}
// Si on a envoyé un formulaire concernant une navbar
if (isset($_POST['navbarName'])) {
    // On ajoute a la session le titre de la navbar
    navbar($_POST['navbarName'], $_POST['navbarLink']);
}
// Si on a envoyé un paragraphe
if (isset($_POST['paragraph-content'])) {
    // On push le tableau afin que le paragraphe s'affiche
    $str = p($_POST['paragraph-content']);
    $_SESSION['html'] .= $str;
}
// Si le formulaire concerne un container
if (isset($_POST['container-fluid'])) {
    $str = container(true);
    $_SESSION['html'] = $str . $_SESSION['html'];
}
if (isset($_POST['container'])) {
    $str = container(false);
    $_SESSION['html'] = $str . $_SESSION['html'];
}
// Si le formulaire concerne un input
if (isset($_POST['inputType'])) {
    input($_POST['inputType'], $_POST['inputName']);
}
// Si le formulaire concerne la sauvegarde
if (isset($_POST['pageName'])) {
    save($_POST['pageName'], $_SESSION['html']);
}
// On effectue la redirection
header('Location: index.php');
