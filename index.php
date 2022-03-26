<?php

require_once 'vendor/autoload.php';


$db = new \PDO('mysql:host=db; dbname=games', 'root', 'password');
$gameData = \GabrielApp\Classes\Hydrators\GameEntityHydrator::getGamesFromDB($db);
$gameHtml = \GabrielApp\Classes\ViewHelpers\GameViewHelper::displayManyGames($gameData);



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
<nav class='navbar navbar-light bg-light mb-2 border-bottom border-secondary'>
    <div class='container d-flex justify-content-between'>
        <div>
            <h1>GamesHub</h1>
            <p><em>Click on your favourite games!</em></p>
        </div>
            <span><button class='btn btn-primary' type='submit'><a class='text-decoration-none link-light' href='ViewFavourites.php'>View All Favourites</a></button></span>
    </div>
</nav>
<div class='container'>
    <div class='row d-flex justify-content-center'>
        <?= $gameHtml?>
    </div>
</div>
</body>
</html>
