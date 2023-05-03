<?php

namespace Tests\App\Card;

use App\Card\Card;
use App\Card\CardGraphic;
use PHPUnit\Framework\TestCase;

class CardTest extends TestCase
{
    public function testGetSuitReturnsCorrectValue(): void
    {
        $card = new Card('hearts', '1');

        $this->assertEquals('hearts', $card->getSuit());
    }

    public function testGetRankReturnsCorrectValue(): void
    {
        $card = new Card('hearts', '1');

        $this->assertEquals('1', $card->getRank());
    }

    public function testGetImage(): void
    {
        $card = new CardGraphic('hearts', '05');
        
        $this->assertEquals('hearts_05.svg', $card->getImage());
    }
}
