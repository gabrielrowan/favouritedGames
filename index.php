<?php

require_once 'vendor/autoload.php';


$db = new \PDO('mysql:host=db; dbname=games', 'root', 'password');
$gameData = \GabrielApp\Classes\Hydrators\GameEntityHydrator::getGamesFromDB($db);
$gameHtml = \GabrielApp\Classes\ViewHelpers\GameViewHelper::displayManyGames($gameData);



?>
<!doctype html>
<html lang="en">
<head>
    <title>Favourite Games</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<h1>GamesHub</h1>
<button class='btn btn-outline-success btn-lg' type='submit'><a href='ViewFavourites.php'>View All Favourites</a></button>
<?= $gameHtml?>

</body>
</html>
