<?php

use \PHPUnit\Framework\TestCase;
require_once '../../../vendor/autoload.php';

class GameViewHelperTest extends TestCase
{
public function testDisplayGameSuccess()
{
//create a blank mock object and set expectations of how it works
$gameMock = $this->createMock(\GabrielApp\Classes\Entities\GameEntity::class);
$gameMock->method('getTitle') ->willReturn('title');
$gameMock->method('getShortDescription') ->willReturn('shortDescription');
$gameMock->method('getThumbnail') ->willReturn('thumbnail');
$gameMock->method('getId') ->willReturn('1');

//pass the mocked object in where its needed so that we can unit test as normal
$test = new GabrielApp\Classes\ViewHelpers\GameViewHelper;
$case = $test->displayGame($gameMock);
$expected =
    "<h1> title </h1>
    <h3> shortDescription </h3>
    <img src='thumbnail'/><br>
    <form method='post' action='addToFavourites.php'>
    <input type='hidden' name='id' value='1'/>
    <button type='submit'> Add To Favourites </button>
    </form>";


$this->assertEquals($case, $expected);
}
}