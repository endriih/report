<?php

namespace App\Card;

use App\Card\DeckOfCards;

class CardHand
{
    private $cards;
    private $initialCards;

    public function __construct(DeckOfCards $deck)
    {
        $this->initialCards = [];
        $this->cards = $deck->getCards();
        $this->initialCards = $this->cards;
    }

    public function draw(): CardGraphic
    {
        if (count($this->cards) == 0) {
            throw new \Exception("The deck is empty.");
        }

        $index = array_rand($this->cards);
        $card = $this->cards[$index];
        unset($this->cards[$index]);
        $this->cards = array_values($this->cards);
        return $card;
    }


    public function getAmount(): int
    {
        return count($this->cards);
    }

    public function reset()
    {
        $this->cards = $this->initialCards;
    }
}
