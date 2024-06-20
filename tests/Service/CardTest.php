<?php

namespace App\Tests\Service;

use App\Service\Card;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CardTest extends KernelTestCase
{
    public function testGetColor()
    {
        $card = new Card('AS', 1, 'pique');

        $this->assertEquals('pique', $card->getColor());
    }

    public function testGetName()
    {
        $card = new Card('AS', 1, 'pique');

        $this->assertEquals('AS', $card->getName());
    }

    public function testGetValue()
    {
        $card = new Card('AS', 1, 'pique');

        $this->assertEquals(1, $card->getValue());
    }
}