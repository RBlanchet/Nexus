<?php
session_start();
// On inclut le fichier de fonctions
require_once('functions.php');
// On inclut le body header ainsi que body
include('layout/header.php');
include('layout/body.php');

// Le corps du fichier

// if(isset($_POST['navbar']))
// {
//   $_SESSION['navbar'] = $_POST['navbar-name'];
//   navbar($_POST['navbar-name'], array(
//     'Menu 1' => 'index.php',
//     'Menu 2' => 'index.php',
//   ));
// }
// if(isset($_SESSION['navbar']))
// {
//   navbar($_SESSION['navbar'], array(
//     'Menu 1' => 'index.php',
//     'Menu 2' => 'index.php',
//   ));
// }
// if(isset($_POST['paragraphe']))
// {
//   p($_POST['p-content']);
// }

// navbar('Mon site', array(
//   'Menu 1' => 'index.php',
//   'Menu 2' => 'index.php',
// ));
// padding('bottom', '10vh');
// container();
// textCenter();
// h('1', 'Bienvenue sur mon site');


// On inclut le footer

include('layout/formConstructor.php');
include('layout/footer.php');
