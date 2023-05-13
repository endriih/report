<?php

namespace App\Card;

use App\Card\DeckOfCards;
use App\Card\CardHand;

/**
 * Klass för kortspelet 21.
 */
class Game
{
    private DeckOfCards $deck;
    private CardHand $playerHand;
    private CardHand $bankHand;
    /**
     * @var string[]
     */
    private array $drawnCards = [];
    /**
     * @var string[]
     */
    private array $bankCards = [];

    public function __construct()
    {
        $this->deck = new DeckOfCards();
        $this->playerHand = new CardHand($this->deck);
        $this->bankHand = new CardHand($this->deck);
    }

    /**
    * Draw a card from the deck and add it to the player's hand.
    * @return array
    */
    public function drawCard(): array
    {   
        $result = [];
        $result['message'] = 'Spelaren förlorar!';
        $result['type'] = 'warning';

        if ($this->playerHand->getTotalValue() < 21) {
            $card = $this->playerHand->draw();
            $this->drawnCards[] = $card->getImage();
        }

        return $result;
    }



    /**
     * Metoden körs när personen stannar med sin hand vilket genererar kort för banken.
     * @return string[]
     */
    public function stop(): array
    {
        $result = [];

        while ($this->bankHand->getTotalValue() < 17) {
            $this->bankHand->draw();
        }

        $this->bankCards = $this->bankHand->getCardGraphics();

        if ($this->bankHand->getTotalValue() > 21) {
            $result['message'] = 'Spelaren vinner!';
            $result['type'] = 'notice';
        } elseif ($this->playerHand->getTotalValue() < $this->bankHand->getTotalValue()) {
            $result['message'] = 'Spelaren förlorar!';
            $result['type'] = 'warning';
        } elseif ($this->playerHand->getTotalValue() == $this->bankHand->getTotalValue()) {
            $result['message'] = 'Banken vinner!';
            $result['type'] = 'warning';
        } else {
            $result['message'] = 'Spelaren vinner!';
            $result['type'] = 'notice';
        }

        return $result;
    }

    /**
     * Returnerar spelarens hand.
     */
    public function getPlayerHand(): CardHand
    {
        return $this->playerHand;
    }

    /**
     * Returnerar bankens hand.
     */
    public function getBankHand(): CardHand
    {
        return $this->bankHand;
    }

    /**
     * Returnerar en lista för dragna korten.
     * @return string[]
     */
    public function getDrawnCards(): array
    {
        return $this->drawnCards;
    }

    /**
     * Returnerar en lista för bankens kort.
     * @return string[]
     */
    public function getBankCards(): array
    {
        return $this->bankCards;
    }

    /**
     * Returnerar spelarens poäng.
     * @return int
     */
    public function getPlayerScore(): int
    {
        return $this->playerHand->getTotalValue();
    }

    /**
     * Returnerar bankens poäng.
     * @return int
     */
    public function getBankScore(): int
    {
        return $this->bankHand->getTotalValue();
    }

    /**
     * Återställer spelet.
     */
    public function reset(): void
    {
        $this->deck = new DeckOfCards();
        $this->playerHand = new CardHand($this->deck);
        $this->bankHand = new CardHand($this->deck);
        $this->drawnCards = [];
        $this->bankCards = [];
    }
}