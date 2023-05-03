<?php

namespace App\Card;

use App\Card\CardGraphic;
use App\Card\Card;

/**
 * Klass för kortleken.
*/
class DeckOfCards
{
    private array $cards;
    private array $initialCards;

    public function __construct()
    {
        $this->initialCards = [];
        $this->cards = array();
        $suits = array('hearts', 'diamonds', 'clubs', 'spades');
        $ranks = array('01','02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13');

        foreach ($suits as $suit) {
            foreach ($ranks as $rank) {
                $card = new Card($suit, $rank);
                $this->cards[] = $card;
                $this->initialCards[] = $card;
            }
        }
    }

    /**
     * Returnerar en lista på de ursprungliga korten.
    */
    public function getInitialCards()
    {
        $cards = [];
        foreach ($this->initialCards as $card) {
            $cardGraphic = new CardGraphic($card->getSuit(), $card->getRank());
            $cards[] = $cardGraphic;
        }
        return $cards;
    }

    /**
     * Plockar ut ett kort och uppdaterar antalet kort i kortleken.
    */
    public function draw(): Card
    {
        if (empty($this->cards)) {
            $this->reset();
        }
        $index = array_rand($this->cards);
        $card = $this->cards[$index];
        unset($this->cards[$index]);
        $this->cards = array_values($this->cards);
        $drawnCard = new Card($card->getSuit(), $card->getRank());
        return $drawnCard;
    }

    /**
     * Returnerar en lista med korten.
    */
    public function getCards(): array
    {
        $cards = [];
        foreach ($this->cards as $card) {
            $cardGraphic = new CardGraphic($card->getSuit(), $card->getRank());
            $cards[] = $cardGraphic;
        }
        return $cards;
    }

    /**
     * Blandar kortleken.
    */
    public function shuffle(): array
    {
        shuffle($this->cards);
        return $this->cards;
    }

    /**
     * Återställer kortleken till dess ursprungliga tillstånd.
    */
    public function reset(): void
    {
        $this->cards = $this->initialCards;
    }

    /**
     * Returnerar en lista av sorterade kort.
    */
    public function getSortedList(): array
    {
        $cards = $this->initialCards;
        $compareCards = function ($card1, $card2) {
            $suitOrder = ['diamonds', 'hearts', 'clubs', 'spades'];
            $card1SuitIndex = array_search($card1->getSuit(), $suitOrder);
            $card2SuitIndex = array_search($card2->getSuit(), $suitOrder);

            if ($card1SuitIndex === $card2SuitIndex) {
                return $card1->getRank() <=> $card2->getRank();
            }
            return $card1SuitIndex <=> $card2SuitIndex;
        };

        usort($cards, $compareCards);

        return $cards;
    }
}
