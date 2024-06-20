<?php

namespace App\Service\GameGenerator;

class GetMyNRandomCard implements GetMyNRandomCardInterface
{
    public function getMyNewGame(array $deck, int $nCard = 10): array
    {
        if (empty($deck)) {
            return [];
        }

        shuffle($deck);

        return array_slice($deck, 0, $nCard);
    }
}