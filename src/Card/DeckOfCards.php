<?php

namespace App\Card;

use App\Card\CardGraphic;
use App\Card\Card;

class DeckOfCards
{
    private $cards;
    private $initialCards;

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

    public function getCards(): array
    {
        $cards = [];
        foreach ($this->cards as $card) {
            $cardGraphic = new CardGraphic($card->getSuit(), $card->getRank());
            $cards[] = $cardGraphic;
        }
        return $cards;
    }



    public function shuffle()
    {
        shuffle($this->cards);
        return $this->cards;
    }

    public function reset()
    {
        $this->cards = $this->initialCards;
    }

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
