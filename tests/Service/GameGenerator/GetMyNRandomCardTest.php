<?php

namespace App\Tests\Service\GameGenerator;

use App\Service\Card;
use App\Service\GameGenerator\GetMyNRandomCard;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class GetMyNRandomCardTest extends KernelTestCase
{
    public function testGetMyNewGameNone()
    {
        $getMyNRandomCard = new GetMyNRandomCard();

        $deck = $getMyNRandomCard->getMyNewGame([], 12);

        $this->assertEquals(0, count($deck));
    }

    public function testGetMyNewGame()
    {

        $deck = [];
        for ($i = 0; $i < 52; $i++) {
            $deck[] = new Card($i, $i, 'coeur');
        }

        $getMyNRandomCard = new GetMyNRandomCard();
        $newGame = $getMyNRandomCard->getMyNewGame($deck, 12);

        $this->assertEquals(12, count($newGame));
    }
}