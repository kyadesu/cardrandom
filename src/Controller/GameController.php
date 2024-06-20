<?php

namespace App\Controller;

use App\Service\GameGenerator\Game;
use App\Service\GameOrdered\GetMyGameOrdered;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    /**
     * @Route("/", name="app_game")
     */
    public function index(Game $game, GetMyGameOrdered  $getMyGameOrdered): Response
    {
        $newGame =  $game->getMyGames();
        $gameOrdered = $getMyGameOrdered->getMyGameOrdered($newGame);

        return $this->render('game/index.html.twig', [
            'controller_name' => 'GameController',
            'gameShuffled' => $newGame,
            'gameOrdered' => $gameOrdered
        ]);
    }
}
