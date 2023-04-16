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
            $cardGraphic = new CardGraphic($card);
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

        // here we define the custom comparison function for usorts second parameter
        $compareCards = function ($a, $b) {
            // initiate the suitorder and then search the cards suit index for later comparison
            $suitOrder = ['diamonds', 'hearts', 'clubs', 'spades'];
            $aSuitIndex = array_search($a->getSuit(), $suitOrder);
            $bSuitIndex = array_search($b->getSuit(), $suitOrder);

            if ($aSuitIndex === $bSuitIndex) {
                // if suits of both cards match we compare card ranks with spaceship operator
                return $a->getRank() <=> $b->getRank();
            } else {
                // if suits of both cards do not match we compare the suits with spaceship operator
                return $aSuitIndex <=> $bSuitIndex;
            }
        };

        // here we sort the cards using our custom comparison function
        usort($cards, $compareCards);

        return $cards;
    }
}
