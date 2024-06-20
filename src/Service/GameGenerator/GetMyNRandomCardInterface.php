<?php

namespace App\Service\GameGenerator;

interface GetMyNRandomCardInterface
{
    public function getMyNewGame(array $deck, int $nCard): array;
}