<?php

session_start();
require_once 'vendor/autoload.php';

$db = new \PDO('mysql:host=db; dbname=games', 'root', 'password');

$gameFavouritesString = \GabrielApp\Classes\Utilities\StringFormatter::formatIdsForSql($_SESSION['favourites']);


$favouritedGames = \GabrielApp\Classes\Hydrators\GameEntityHydrator::getFavouritedGamesFromDB($db, $gameFavouritesString);
$favouriteGamesHtml = \GabrielApp\Classes\ViewHelpers\GameViewHelper::displayFavouritedGames($favouritedGames);


?>

<!doctype html>
<html lang='en'>
<head>
    <title>GamesHub</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>
<body class='bg-secondary'>
<nav class='navbar navbar-light bg-light border-bottom border-secondary'>
    <div class='container d-flex justify-content-between'>
            <h1>GamesHub</h1>
            <span><button class='btn btn-primary' type='submit'><a class='text-decoration-none link-light' href='index.php'>Back to Homepage</a></button></span>
    </div>
</nav>
<div class='jumbotron bg-info border-bottom border-secondary mb-2'>
    <div class='container d-flex justify-content-center'>
        <h2 class='my-3'>Your Favourite Games</h2>
    </div>
</div>
    <div class='container'>
        <div class='row d-flex justify-content-center'>
            <?= $favouriteGamesHtml?>
        </div>
    </div>
</body>
</html>