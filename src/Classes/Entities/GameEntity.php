<?php

namespace GabrielApp\Classes\Entities;

class GameEntity {
private $title;
private $shortDescription;
private $thumbnail;
private $id;


public function getTitle()
{
return $this->title;
}

public function getShortDescription()
{
return $this->shortDescription;
}

public function getThumbnail()
{
return $this->thumbnail;
}

public function getId()
{
    return $this->id;
}



}
