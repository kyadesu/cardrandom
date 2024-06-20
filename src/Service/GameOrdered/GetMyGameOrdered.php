<?php

namespace App\Service\GameOrdered;

class GetMyGameOrdered
{
    const SPADE = 'pique';
    const DIAMOND = 'carreau';
    const HEART = 'coeur';
    const CLOVER = 'trefle';

    /**
     * @var RetrieveColorInGame $retrieveColorInGame
     */
    private $retrieveColorInGame;

    /**
     * @var OrderGame $orderGame
     */
    private $orderGame;

    public function __construct(RetrieveColorInGame  $retrieveColorInGame, OrderGame  $orderGame)
    {
        $this->retrieveColorInGame = $retrieveColorInGame;
        $this->orderGame = $orderGame;
    }

    public function getMyGameOrdered(array $game)
    {

        $orderedGame = [];
        $spades = $this->retrieveColorInGame->retrieveCardsByColor($game, self::SPADE);
        $orderedGame = $this->orderGame->orderMyGame($spades, $orderedGame);

        $diamonds = $this->retrieveColorInGame->retrieveCardsByColor($game, self::DIAMOND);
        $orderedGame = $this->orderGame->orderMyGame($diamonds, $orderedGame);

        $hearts = $this->retrieveColorInGame->retrieveCardsByColor($game, self::HEART);
        $orderedGame = $this->orderGame->orderMyGame($hearts, $orderedGame);

        $clovers = $this->retrieveColorInGame->retrieveCardsByColor($game, self::CLOVER);
        $orderedGame = $this->orderGame->orderMyGame($clovers, $orderedGame);

        return $orderedGame;
    }
}