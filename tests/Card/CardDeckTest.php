<?php

namespace Tests\App\Card;

use PHPUnit\Framework\TestCase;
use App\Card\DeckOfCards;

class DeckOfCardsTest extends TestCase
{
    public function testDrawRemovesCardFromDeck(): void
    {
        $deck = new DeckOfCards();
        $initialCount = count($deck->getCards());
        $deck->draw();
        $newCount = count($deck->getCards());

        $this->assertEquals($initialCount - 1, $newCount);
    }

    public function testGetSortedListReturnsSortedDeck(): void
    {
        $deck = new DeckOfCards();
        $sorted = $deck->getSortedList();
        
        $this->assertIsArray($sorted);
        $this->assertEquals(count($sorted), 52);
    }

    public function testReset(): void
    {
        $deck = new DeckOfCards();
        $deck->shuffle();
        $deck->draw();
        $deck->draw();
        $deck->reset();
        $cards = $deck->getCards();
        $initialCards = $deck->getInitialCards();

        $this->assertEquals($initialCards, $cards);
    }

    public function testAutomaticReset(): void
    {
        $deck = new DeckOfCards();
        $cardsDrawn = [];
        for ($i = 0; $i < 53; $i++) {
            $cardsDrawn[] = $deck->draw();
        }
        $deck->reset();
        $cards = $deck->getCards();
        
        $this->assertEquals(count($cards), 52);
        $this->assertEquals($cards, $deck->getInitialCards());
    }
}
