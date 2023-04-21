<?php

namespace App\Card;

use App\Card\Card;

class CardGraphic extends Card
{
    public function getImage()
    {
        $suit = $this->getSuit();
        $rank = $this->getRank();
        return "{$suit}_{$rank}.svg";
    }
}

