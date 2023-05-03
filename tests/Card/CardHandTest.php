<?php

use App\Card\CardHand;
use App\Card\CardGraphic;
use App\Card\DeckOfCards;
use PHPUnit\Framework\TestCase;

class CardHandTest extends TestCase
{
    public function testDrawCard()
    {
        $deck = new DeckOfCards();
        $hand = new CardHand($deck);
        $card1 = $hand->draw();
        $card2 = $hand->draw();

        $this->assertContains($card1, $hand->getHand());
        $this->assertContains($card2, $hand->getHand());
        $this->assertEquals($card1->getRank(), $hand->getHand()[0]->getRank());
        $this->assertEquals($card2->getRank(), $hand->getHand()[1]->getRank());
        $this->assertEquals($card1->getSuit(), $hand->getHand()[0]->getSuit());
        $this->assertEquals($card2->getSuit(), $hand->getHand()[1]->getSuit());
    }

    public function testReset()
    {
        $deck = new DeckOfCards();
        $hand = new CardHand($deck);

        $card1 = new CardGraphic('hearts', '10');
        $card2 = new CardGraphic('spades', '9');
        $hand->addCard($card1);
        $hand->addCard($card2);

        $initialCards = $hand->getCards();

        $hand->reset();

        $this->assertEquals($initialCards, $hand->getCards());
    }

    public function testGetAmount()
    {
        $deck = new DeckOfCards();
        $hand = new CardHand($deck);
        $hand->draw();

        $this->assertEquals(51, $hand->getAmount());
    }

    public function testDrawFromEmptyDeckThrowsException()
    {
        $this->expectException(\Exception::class);

        $deck = new DeckOfCards();
        $hand = new CardHand($deck);
        for ($i = 0; $i < 52; $i++) {
            $hand->draw();
        }
        $hand->draw();
    }


    public function testTotalValue()
    {
        $deck = new DeckOfCards();
        $hand = new CardHand($deck);

        $card1 = new CardGraphic('hearts', '10');
        $card2 = new CardGraphic('hearts', '10');
        $card3 = new CardGraphic('hearts', '1');
        $hand->addCard($card1);
        $hand->addCard($card2);
        $hand->addCard($card3);

        $this->assertEquals(21, $hand->getTotalValue());
    }
}