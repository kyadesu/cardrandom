<?php

namespace App\Tests\Service\GameOrdered;
use App\Service\Card;
use App\Service\GameOrdered\RetrieveColorInGame;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class RetrieveColorInGameTest extends  KernelTestCase
{

    public function testRetrieveCardsByColor()
    {
        $game[] = new Card('Valet', 11, 'pique');
        $game[] = new Card('Roi', 13, 'pique');
        $game[] = new Card('5', 5, 'pique');


        $game[] = new Card('Valet', 11, 'coeur');
        $game[] = new Card('Roi', 13, 'coeur');
        $game[] = new Card('5', 5, 'coeur');
        $game[] = new Card('8', 8, 'coeur');

        $game[] = new Card('Valet', 11, 'carreau');
        $game[] = new Card('Roi', 13, 'carreau');
        $game[] = new Card('5', 5, 'carreau');


        $retrieveColorInGame = new RetrieveColorInGame();

        $spades = $retrieveColorInGame->retrieveCardsByColor($game, 'pique');
        $diamonds = $retrieveColorInGame->retrieveCardsByColor($game, 'carreau');
        $heart = $retrieveColorInGame->retrieveCardsByColor($game, 'coeur');

        $this->assertEquals(3, count($spades));
        $this->assertEquals(3, count($diamonds));
        $this->assertEquals(4, count($heart));
    }

    public function testRetrieveCardsByColorNone()
    {
        $retrieveColorInGame = new RetrieveColorInGame();

        $spades = $retrieveColorInGame->retrieveCardsByColor([], 'pique');

        $this->assertEquals(0, count($spades));
    }
}