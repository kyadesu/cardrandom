<?php

namespace App\Service\GameOrdered;

class OrderGame
{
    public function orderMyGame(array $games, array $newGame)
    {
        if (empty($games)) {
            return $newGame;
        }

        for ($i = 0; $i < count($games); $i++) {
            for ($j = $i+1; $j < count($games); $j++) {
                if ($games[$i]->getValue() > $games[$j]->getValue()) {
                    $swap =  $games[$i];
                    $games[$i] =$games[$j];
                    $games[$j] = $swap;
                }
            }
        }

        foreach ($games as $game ) {
            $newGame[] = $game;
        }

        return $newGame;
    }
}