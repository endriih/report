<?php

namespace App\Card;

use App\Card\Card;

/**
 * Grafisk kortklass med en metod som tar fram bilden.
*/
class CardGraphic extends Card
{
    /**
     * Tar fram bild för kortet.
    */
    public function getImage(): string
    {
        $suit = $this->getSuit();
        $rank = $this->getRank();
        return "{$suit}_{$rank}.svg";
    }
}
