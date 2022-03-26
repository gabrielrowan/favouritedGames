<?php

require_once 'vendor/autoload.php';
session_start();


$key = array_search($_POST['id'], $_SESSION['favourites']);
if (($key) !== false)
{
    unset($_SESSION['favourites'][$key]);
}

//Some kind of logic that means if there are 0 ids in the session favourites array then it redirects you back to the homepage
//if (!isset($_SESSION['favourites'])) {
//    header('Location: index.php');
//}

header('Location: viewFavourites.php');