<?php

namespace GabrielApp\Classes\ViewHelpers;

use GabrielApp\Classes\Entities\GameEntity;

class GameViewHelper {
    public static function displayGame(GameEntity $game) {
        $result  = "<div class='card my-3 mx-2 text-center bg-light' style='width: 25rem;'>";
        $result .="<img class='card-img-top mt-3 border border-secondary rounded' src='" . $game->getThumbnail() . "'/><br>";
        $result .= "<div class='col text-center'><h1 class='card-title'>" . $game->getTitle() . "</h1>";
        $result .= "<p class='card-text my-4 mx-2' style='height: 11rem; font-size: 1.5rem;'>" . $game->getShortDescription() . "</p></div>";
        $result .="<form method='post' action='addToFavourites.php'>";
        $result .="<input type='hidden' name='id' value='" . $game->getId() . "'/>";
        $result .="<button id='favouriteButton' class='btn btn-outline-primary btn-lg mb-4' type='submit'> Add To Favourites </button>";
        $result .="</form></div>";
        return $result;
    }

    public static function displayFavouritedGame(GameEntity $game) {
        $result  = "<div class='card my-3 mx-2 text-center bg-light' style='width: 25rem;'>";
        $result .="<img class='card-img-top mt-3 border border-secondary rounded' src='" . $game->getThumbnail() . "'/><br>";
        $result .= "<div class='col text-center'><h1 class='card-title'>" . $game->getTitle() . "</h1>";
        $result .= "<p class='card-text my-4 mx-2' style='height: 11rem; font-size: 1.5rem;'>" . $game->getShortDescription() . "</p></div>";
        $result .="<form method='post' action='removeFromFavourites.php'>";
        $result .="<input type='hidden' name='id' value='" . $game->getId() . "'/>";
        $result .="<button id='favouriteButton' class='btn btn-outline-danger btn-lg mb-4' type='submit'> Delete from Favourites </button>";
        $result .="</form></div>";
        return $result;
    }

    public static function displayManyGames(array $games) {
        $result = '';
        foreach ($games as $game) {
            $result .= self::displayGame($game);
        }
        return $result;
    }

    public static function displayFavouritedGames(array $games) {
        $result = '';
        foreach ($games as $game) {
            $result .= self::displayFavouritedGame($game);
        }
        return $result;
    }
}