<?php

namespace Tests\App\Card;

use PHPUnit\Framework\TestCase;
use App\Card\Game;
use App\Card\CardGraphic;

class GameTest extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        $this->game = new Game();
    }

    public function testDrawCard()
    {
        $result = $this->game->drawCard();

        $this->assertIsArray($result);
        $this->assertArrayHasKey('message', $result);
        $this->assertArrayHasKey('type', $result);
        $this->assertGreaterThanOrEqual(0, count($this->game->getDrawnCards()));
    }

    public function testStop()
    {
        $result = $this->game->stop();

        $this->assertIsArray($result);
        $this->assertArrayHasKey('message', $result);
        $this->assertArrayHasKey('type', $result);
        $this->assertGreaterThanOrEqual(0, count($this->game->getBankCards()));
        $this->assertIsInt($this->game->getPlayerScore());
        $this->assertIsInt($this->game->getBankScore());
        $this->assertContains($result['message'], ['Spelaren vinner!', 'Banken vinner!', 'Spelaren förlorar!']);
        $this->assertContains($result['type'], ['notice', 'warning']);
    }

    public function testEqualScore()
    {
        $this->game->getPlayerHand()->addCard(new CardGraphic('hearts', '10'));
        $this->game->getPlayerHand()->addCard(new CardGraphic('hearts', '10'));
        $this->game->getBankHand()->addCard(new CardGraphic('hearts', '10'));
        $this->game->getBankHand()->addCard(new CardGraphic('hearts', '10'));

        $result = $this->game->stop();
        $this->assertEquals('Banken vinner!', $result['message']);
        $this->assertEquals('warning', $result['type']);
    }

    public function testStopPlayerWins()
    {
        $this->game->getPlayerHand()->addCard(new CardGraphic('hearts', '10'));
        $this->game->getPlayerHand()->addCard(new CardGraphic('hearts', '9'));
        $this->game->getBankHand()->addCard(new CardGraphic('hearts', '10'));
        $this->game->getBankHand()->addCard(new CardGraphic('hearts', '7'));
        
        $result = $this->game->stop();
        $this->assertEquals('Spelaren vinner!', $result['message']);
        $this->assertEquals('notice', $result['type']);
    }

    public function testBankHandOver21() 
    {   
        $this->game->getPlayerHand()->addCard(new CardGraphic('hearts', '10'));
        $this->game->getPlayerHand()->addCard(new CardGraphic('hearts', '9'));
        $this->game->getBankHand()->addCard(new CardGraphic('hearts', '10'));
        $this->game->getBankHand()->addCard(new CardGraphic('hearts', '10'));   
        $this->game->getBankHand()->addCard(new CardGraphic('hearts', '10'));      
        
        $result = $this->game->stop();
        $this->assertEquals('Spelaren vinner!', $result['message']);
        $this->assertEquals('notice', $result['type']);
    }

    public function testGetPlayerHand()
    {
        $hand = $this->game->getPlayerHand();

        $this->assertInstanceOf('App\Card\CardHand', $hand);
    }

    public function testGetBankHand()
    {
        $hand = $this->game->getBankHand();

        $this->assertInstanceOf('App\Card\CardHand', $hand);
    }

    public function testGetDrawnCards()
    {
        $cards = $this->game->getDrawnCards();

        $this->assertIsArray($cards);
        $this->assertGreaterThanOrEqual(0, count($cards));
    }

    public function testGetBankCards()
    {
        $cards = $this->game->getBankCards();

        $this->assertIsArray($cards);
        $this->assertGreaterThanOrEqual(0, count($cards));
    }

    public function testGetPlayerScore()
    {
        $score = $this->game->getPlayerScore();

        $this->assertIsInt($score);
    }

    public function testGetBankScore()
    {
        $score = $this->game->getBankScore();
        
        $this->assertIsInt($score);
    }

    public function testReset()
    {
        $this->game->drawCard();
        $this->game->stop();
        $this->game->reset();
        $this->assertEmpty($this->game->getDrawnCards());
        $this->assertEmpty($this->game->getBankCards());
        $this->assertEquals(0, $this->game->getPlayerScore());
        $this->assertEquals(0, $this->game->getBankScore());
    }
}
