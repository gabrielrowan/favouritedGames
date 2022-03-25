<?php

namespace GabrielApp\Classes\Hydrators;

use GabrielApp\Classes\Entities\GameEntity;

class GameEntityHydrator {
    public static function getGamesFromDB(\PDO $db)
    {
        $query = $db->prepare('SELECT `id`, `title`, `thumbnail`, `shortDescription` FROM `pc-games`;');
        $query->setFetchMode(\PDO::FETCH_CLASS, GameEntity::class);
        $query->execute();
        return $query->fetchAll();
    }

    public static function getFavouritedGamesFromDB(\PDO $db, string $stringFormatterResult) {
        $query = $db->prepare('SELECT `id`, `title`, `thumbnail`, `shortDescription` FROM `pc-games` WHERE' . $stringFormatterResult . ';');
        $query->setFetchMode(\PDO::FETCH_CLASS, GameEntity::class);
        $query->execute();
        return $query->fetchAll();

    }
}

