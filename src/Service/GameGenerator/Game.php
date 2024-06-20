<?php

namespace App\Service\GameGenerator;

class Game implements GameInterface
{

    /**
     * @var DeckGenerator $deskGenerator
     */
    private $deckGenerator;

    /**
     * @var GetMyNRandomCard $getMyNRandomCard
     */
    private $getMyNRandomCard;

    public function __construct(DeckGenerator $deckGenerator, GetMyNRandomCard $getMyNRandomCard)
    {
        $this->deckGenerator = $deckGenerator;
        $this->getMyNRandomCard =  $getMyNRandomCard;
    }

    public function getMyGames() : array
    {
        $newDeck = $this->deckGenerator->generateDesk();

        return $this->getMyNRandomCard->getMyNewGame($newDeck);
    }
}