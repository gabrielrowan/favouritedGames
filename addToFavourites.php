<?php

require_once 'vendor/autoload.php';
session_start();
$_SESSION['favourites'][] = $_POST['id'];




header('Location: index.php');