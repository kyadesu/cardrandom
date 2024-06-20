<?php

namespace App\Service\GameGenerator;

use App\Service\Card;

class DeckGenerator implements DeckGeneratorInterface
{
    const colors = ['pique', 'carreau', 'coeur', 'trefle'];
    const cards = [
        1 => 'AS',
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        11 => 'Valet',
        12 => 'Reine',
        13 => 'Roi',
    ];

    /**
     * Generate a complete desk
     *
     * @return array
     */
    public function generateDesk(): array
    {
        $deck = [];

        foreach (self::colors as  $color) {
            foreach (self::cards as $value => $name) {
                $deck[] = new Card($name, $value, $color);
            }
        }

        return $deck;
    }
}