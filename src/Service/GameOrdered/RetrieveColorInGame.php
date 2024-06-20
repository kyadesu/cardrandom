<?php

namespace App\Service\GameOrdered;

use App\Service\Card;

class RetrieveColorInGame
{

    public function retrieveCardsByColor(array $deck, string $color)
    {
        if (empty($deck)) {
            return [];
        }

        $deckByColor = [];
        /**
         * @var Card $card
         */
        foreach ($deck as $card)  {
            if ($card->getColor() == $color) {
                $deckByColor[] = $card;
            }
        }

        return $deckByColor;
    }
}