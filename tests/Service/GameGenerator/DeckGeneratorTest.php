<?php

namespace App\Tests\Service\GameGenerator;

use App\Service\GameGenerator\DeckGenerator;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DeckGeneratorTest extends KernelTestCase
{
    public function testDeckGenerator(): void
    {
        $newDeckGenerator = new DeckGenerator();
        $deck = $newDeckGenerator->generateDesk();

        $this->assertEquals(52, count($deck));
    }
}