<?php

namespace App\Card;

/**
 * Kort klass som utgörs av egenskaperna suit och rank.
*/
class Card
{
    private string $suit;
    private string $rank;

    /**
     * Skapar kort objektet.
    */
    public function __construct(string $suit, string $rank)
    {
        $this->suit = $suit;
        $this->rank = $rank;
    }

    /**
     * Tar fram mönstret.
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /**
     * Tar fram värdet/rangen hos kortet.
     */
    public function getRank(): string
    {
        return $this->rank;
    }
}
