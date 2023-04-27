<?php

namespace App\Card;

use App\Card\DeckOfCards;

class CardHand
{
    private $cards;
    private $initialCards;
    private $hand;

    public function __construct(DeckOfCards $deck)
    {
        $this->initialCards = [];
        $this->cards = $deck->getCards();
        $this->initialCards = $this->cards;
        $this->hand = [];
    }

    public function getCards(): array
    {
        return $this->cards;
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
        $this->hand[] = $card;

        return $card;
    }

    public function getAmount(): int
    {
        return count($this->cards);
    }

    public function getHand(): array
    {
        return $this->hand;
    }

    public function getCardGraphics(): array
    {
        $cardGraphics = [];
        foreach ($this->hand as $card) {
            $cardGraphics[] = $card->getImage();
        }
        return $cardGraphics;
    }

    public function reset()
    {
        $this->cards = $this->initialCards;
    }

    public function getTotalValue(): int
    {
        $total = 0;
        $aces = 0;

        foreach ($this->hand as $card) {
            $value = $card->getRank();
        
            if ($value == 1) {
                $aces++;
                $total += 11;
            }
            if ($value >= 10) {
                $total += 10;
            }
            if ($value > 1 && $value < 10) {
                $total += $value;
            }
        }

        while ($aces > 0 && $total > 21) {
            $total -= 10;
            $aces--;
        }

        return $total;
    }
}
