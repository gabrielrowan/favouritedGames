<?php

namespace GabrielApp\Classes\ViewHelpers;

use GabrielApp\Classes\Entities\GameEntity;

class GameViewHelper {
    public static function displayGame(GameEntity $game) {
        $result  = "<div class='container'><div class='row'><div class='col text-center'>";
        $result  = "<div class='card my-5' style='width: 25rem;'>";
        $result .="<img class='card-img-top' src='" . $game->getThumbnail() . "'/><br>";
        $result .= "<div class='col text-center'><h1 class='card-title'>" . $game->getTitle() . "</h1>";
        $result .= "<h3 class='card-text my-4 mx-2'>" . $game->getShortDescription() . "</h3>";
        $result .="<form method='post' action='addToFavourites.php'>";
        $result .="<input type='hidden' name='id' value='" . $game->getId() . "'/>";
        $result .="<button class='btn btn-outline-success btn-lg mb-4' type='submit'> Add To Favourites </button>";
        $result .="</form></div></div>";
        $result .="</div></div></div>";
        return $result;
    }

    

    public static function displayManyGames(array $games) {
        $result = '';
        foreach ($games as $game) {
            $result .= self::displayGame($game);
        }
        return $result;
    }
}