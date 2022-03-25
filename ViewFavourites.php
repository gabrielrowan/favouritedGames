<?php

session_start();
require_once 'vendor/autoload.php';

$db = new \PDO('mysql:host=db; dbname=games', 'root', 'password');

//var_dump($_SESSION);
$gameFavouritesString = \GabrielApp\Classes\Utilities\StringFormatter::formatIdsForSql($_SESSION['favourites']);


$favouritedGames = \GabrielApp\Classes\Hydrators\GameEntityHydrator::getFavouritedGamesFromDB($db, $gameFavouritesString);
$favouriteGamesHtml = \GabrielApp\Classes\ViewHelpers\GameViewHelper::displayManyGames($favouritedGames);

echo $favouriteGamesHtml;