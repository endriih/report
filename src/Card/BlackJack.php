<?php

namespace App\Card;

use App\Card\DeckOfCards;
use App\Card\CardHand;


class BlackJack
{
    private $playerHands;
    private $bankHand;
    private int $totalBet = 0;

    public function __construct($numHands)
    {
        $this->playerHands = [];

        $deck = new DeckOfCards();

        for ($i = 0; $i < $numHands; $i++) {
            $this->playerHands[] = new CardHand($deck);
        }
    }

    public function placeBet(int $handIndex, int $amount): void
    {
        if (!isset($this->playerHands[$handIndex])) {
            throw new \Exception("invalid index.");
        }

        $hand = $this->playerHands[$handIndex];
        $hand->setBet($amount);
        $this->totalBet += $amount;
    }

    public function getTotalBet(): int
    {
        return $this->totalBet;
    }

    public function drawCard($handIndex)
    {
        $card = $this->playerHands[$handIndex]->draw();
    }

    public function getPlayerHands()
    {
        return $this->playerHands;
    }
}