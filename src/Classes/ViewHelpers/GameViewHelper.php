<?php

namespace GabrielApp\Classes\ViewHelpers;

use GabrielApp\Classes\Entities\GameEntity;

class GameViewHelper {
    public static function displayGame(GameEntity $game) {
        $result = "<h1>" . $game->getTitle() . "</h1>";
        $result .= "<h3>" . $game->getShortDescription() . "</h3>";
        $result .="<img src='" . $game->getThumbnail() . "'/><br>";
        $result .="<form method='post' action='addToFavourites.php'>";
        $result .="<input type='hidden' name='id' value='" . $game->getId() . "'/>";
        $result .="<button type='submit'> Add To Favourites </button>";
        $result .="</form>";
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