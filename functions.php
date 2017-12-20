<!--  Fichier de fonctions concernant NEXUS -->
<?php
// Fonction qui renvoie une div en colonne Bootstrap
function div($col, $size)
{
    echo "<div class='col-$col-$size'>";
}

// Fonction qui renvoie un texte
function p($text)
{
    return "<p>$text</p>";
}

// Fonction qui referme une div
function enddiv()
{
    echo "</div>";
}

// Genere une navbar avec en parametre un titre ainsi que les menu de navigation
function navbar($title, $navigation = array())
{
    require('template/navbar.php');
    $_SESSION['html'] .= $str;
}

// Fonction qui genere un input en fonction de son type
function input($type, $name, $value = '')
{
    // On met le type en minuscule
    $type = strtolower($type);
    // Si le type est submit, on inclut un template special
    if ($type == 'submit') {
        include('template/input-submit.php');
        $str .= "</form>";
        $_SESSION['html'] .= $str;
    } else {
        $str = "<form method='post' action='../troll.php'>";
        include('template/input.php');
        $_SESSION['html'] .= $str;
    }

}

function container($fluid = false)
{
    // Si le container a un parametre fluid
    if ($fluid === true) {
        return "<div class='container-fluid'>";
    } else {
        return "<div class=container>";
    }
}

// Fonction qui genere un formulaire
function form($method, $action)
{
    echo "<form method='$method' action='$action'>";
}

// Fonction qui ferme un formulaire
function endform()
{
    echo "</form>";
}

// Fonction qui génère des alert
function alert($content, $type = 'success')
{
    include('template/alert.php');
}

// Fonction qui genere un lien
function a($link, $content)
{
    echo "<a href='$link'>$content</a>";
}

// Fonction qui genere un h
function h($size, $content)
{
    echo "<h$size>$content</h$size>";
}

// Fonction qui centre le texte !! Ne pas oublie de la fermer
function textCenter()
{
    echo "<div class='text-center'>";
}

// Fonction qui ferme le text textCenter
function endTextCenter()
{
    echo "</div>";
}

// Fonction qui installe un padding
function padding($position, $size)
{
    echo "<div style='padding-$position: $size'></div>";
}

// Fonction qui crée un fichier php et qui ajoute le contenu de la $_SESSION['html']
function save($fileName, $content)
{
    $header = "<?php include('../layout/headerPage.php'); ?><body><div style='padding-top : 15vh;'";
    $footer = "</div><?php include('../layout/bodyPage.php'); include('../layout/footerPage.php'); ?>";
    $file = fopen('save/' . $fileName . '.php', 'w+');
    $str = $header . $content . $footer;
    fwrite($file, $str);
    fclose($file);
}
