<?php
$pageName = $_POST['pageName'];
unlink('save/' . $pageName);
header('Location: index.php');