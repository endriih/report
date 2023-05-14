<?php

namespace App\Card;

use App\Card\DeckOfCards;
use Exception;

/**
 * Klass för handen som utgörs av ett flertal kort.
 */
class CardHand
{   
    /**
     * @var CardGraphic[]
     */
    private array $cards;

    /**
     * @var CardGraphic[]
     */
    private array $initialCards;

    /**
     * @var CardGraphic[]
     */
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
     *
     * @return CardGraphic[]
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * Plockar ett kort och utesluter det dragna kortet från kortleken.
     *
     * @return CardGraphic
     * @throws Exception
     */
    public function draw(): CardGraphic
    {
        if (count($this->cards) === 0) {
            throw new Exception("The deck is empty.");
        }

        $index = array_rand($this->cards);
        $card = $this->cards[$index];
        unset($this->cards[$index]);
        $this->cards = array_values($this->cards);
        $this->hand[] = $card;

        return $card;
    }

    /**
     * Drar x antal kort.
     *
     * @return array
     */

    public function drawMultiple(int $num): array
    {
        $cards = [];
        for ($i = 0; $i < $num; $i++) {
            $card = $this->draw();
            $cards[] = $card->getImage();
        }
        return $cards;
    }

    /**
     * Tar fram antal kort i kortleken.
     *
     * @return int
     */
    public function getAmount(): int
    {
        return count($this->cards);
    }

    /**
     * Lägger till kort i handen.
     *
     * @param CardGraphic $card
     */
    public function addCard(CardGraphic $card): void
    {
        $this->hand[] = $card;
    }


    /**
     * Returnerar en lista av din hand.
     *
     * @return CardGraphic[]
     */
    public function getHand(): array
    {
        return $this->hand;
    }

    /**
     * Returnera en lista av bildlänkarna till korten i handen.
     *
     * @return string[]
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
    * Returnerar totala värdet för handen.
    *
    * @return int Det totala värdet av handen.
    */
    public function getTotalValue(): int
    {
        $totalValue = 0;
        $aceCount = 0;

        foreach ($this->hand as $card) {
            $rank = $card->getRank();

            if ($rank === 1) {
                $aceCount++;
                $totalValue += 11;
            } else if ($rank >= 10) {
                $totalValue += 10;
            } else {
                $totalValue += $rank;
            }
        }

        while ($aceCount > 0 && $totalValue > 21) {
            $totalValue -= 10;
            $aceCount--;
        }

        return $totalValue;
    }
}
