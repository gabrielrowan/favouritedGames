<?php

require_once 'vendor/autoload.php';
session_start();


$key = array_search($_POST['id'], $_SESSION['favourites']);
if (($key) !== false)
{
    unset($_SESSION['favourites'][$key]);
}

header('Location: viewFavourites.php');