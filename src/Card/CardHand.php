<?php

namespace App\Card;

use App\Card\DeckOfCards;

/**
 * Klass för handen som utgörs av ett flertal kort.
*/
class CardHand
{
    private array $cards;
    private array $initialCards;
    private array $hand;

    public function __construct(DeckOfCards $deck)
    {
        $this->initialCards = [];
        $this->cards = $deck->getCards();
        $this->initialCards = $this->cards;
        $this->hand = [];
    }

    /**
     * Tar fram kortleken (52 kort).
    */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * Plockar ett kort och utesluter det dragna kortet från kortleken.
    */
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

    /**
     * Tar fram antal kort i kortleken.
    */
    public function getAmount(): int
    {
        return count($this->cards);
    }

    /**
     * Lägger till kort i handen.
    */
    public function addCard(CardGraphic $card): void
    {
        $this->hand[] = $card;
    }


    /**
     * Returnerar en lista av din hand.
    */
    public function getHand(): array
    {
        return $this->hand;
    }

    /**
     * Returnera en lista av bildlänkarna till korten i handen.
    */
    public function getCardGraphics(): array
    {
        $cardGraphics = [];
        foreach ($this->hand as $card) {
            $cardGraphics[] = $card->getImage();
        }
        return $cardGraphics;
    }

    /**
     * Återställer kortleken till dess ursprungliga tillstånd.
    */
    public function reset(): void
    {
        $this->cards = $this->initialCards;
    }

    /**
     * Returnerar det totala värdet för handen.
    */
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
