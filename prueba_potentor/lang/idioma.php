<?php
session_start();
if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
     case "sp":
        require('es.php');
    break;
    case "en":
        require('en.php');
    break;
    default:
        require('es.php');
    }
?>