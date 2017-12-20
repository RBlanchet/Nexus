<?php
/**
 * Created by PhpStorm.
 * User: Romain
 * Date: 19/12/2017
 * Time: 19:15
 */
session_start();
unset($_SESSION['html']);
header('Location: index.php');