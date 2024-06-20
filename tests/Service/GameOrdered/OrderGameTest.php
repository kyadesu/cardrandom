<?php

namespace App\Tests\Service\GameOrdered;

use App\Service\Card;
use App\Service\GameOrdered\OrderGame;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OrderGameTest extends  KernelTestCase
{
    public function testOrderMyGame()
    {
        $newGame = [];
        $gameNotOrdered = [];

        $gameNotOrdered[] = new Card(5, 5, 'pique');
        $gameNotOrdered[] = new Card('Roi', 13, 'pique');
        $gameNotOrdered[] = new Card('AS', 1, 'pique');

        $orderGame = new OrderGame();
        $newGame = $orderGame->orderMyGame($gameNotOrdered ,$newGame);

        $this->assertEquals('AS', $newGame[0]->getName());
        $this->assertEquals(5, $newGame[1]->getName());
        $this->assertEquals('Roi', $newGame[2]->getName());
    }

    public function testOrderMyGameNone()
    {
        $orderGame = new OrderGame();
        $orderGame = $orderGame->orderMyGame([], []);

        $this->assertEquals(0, count($orderGame));
    }
}