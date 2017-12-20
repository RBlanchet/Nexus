<?php
session_start();
// On require le fichier qui check si l'user s'est co
require('login/checkMdp.php');
// On check si l'utilisateur est connecté
if (isset($_SESSION['user']) && $valid) {
    // On require le fichier de fonctions
    require_once('functions.php');
    // On inclut le body header ainsi que body
    include('layout/header.php');
    // On detecte les pages déjà crées
    $page = array();
    $scanDir = scandir('./save');
    foreach ($scanDir as $key => $value) {
        if (is_dir('./' . $value)) {
        } else {
            array_push($page, $value);
        }
    }
    include('layout/body.php');

    // Afin que le text ne soit pas caler tout en haut
    echo "<div style='padding-top: 15vh'></div>";
    // Si la session container est pas vide
    if (isset($_SESSION['html'])) {
        echo $_SESSION['html'];
    }
    // On inclut le footer
    include('layout/footer.php');
} else {
    include('layout/login/login_form.php');
}