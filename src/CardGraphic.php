<?php

namespace App\Card;

use App\Card\Card;

class CardGraphic
{
    private $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    public function getImage()
    {
        $suit = $this->card->getSuit();
        $rank = $this->card->getRank();
        return "{$suit}_{$rank}.svg";
    }
}
