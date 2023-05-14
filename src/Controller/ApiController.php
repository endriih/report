<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Card\DeckOfCards;
use App\Card\CardHand;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ApiController extends AbstractController
{
    #[Route('/api/quote', name: 'quote')]
    public function quote(): JsonResponse
    {
        $quotes = [
            'Somebody get the tacos. - SZA',
            'Forget your troubles, cmon get happy. - Judy Garland',
            'Happiness is a butterfly. - Lana Del Rey',
        ];

        $randomQuote = $quotes[array_rand($quotes)];

        $date = new \DateTime();
        $timestamp = $date->getTimestamp();

        $response = [
            'quote' => $randomQuote,
            'date' => $date->format('Y-m-d'),
            'timestamp' => $timestamp
        ];

        return new JsonResponse($response);
    }

    #[Route('/api/deck/draw', name: 'api_draw', methods: ['GET'])]
    public function apiDraw(SessionInterface $session): JsonResponse
    {
        $deck = $session->get('deckapi');
        if (!$deck instanceof DeckOfCards) {
            $deck = new DeckOfCards();
            $session->set('deckapi', $deck);
        }

        $hand = $session->get('handapi');
        if (!$hand instanceof CardHand) {
            $hand = new CardHand($deck);
            $session->set('handapi', $hand);
        }

        $card = $hand->draw();
        $remainingCards = $hand->getAmount();

        return $this->json([
            'cards' => $card,
            'remainingcards' => $remainingCards
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }

    #[Route('/api/deck/draw/{num<\d+>}', name: 'api_draw_multiple', methods: ['GET'])]
    public function apiDrawMultiple(SessionInterface $session, int $num): JsonResponse
    {
        $deck = $session->get('apideck');
        if (!$deck instanceof DeckOfCards) {
            $deck = new DeckOfCards();
            $session->set('apideck', $deck);
        }

        $cards = [];
        $hand = $session->get('apihand');
        if (!$hand instanceof CardHand) {
            $hand = new CardHand($deck);
            $session->set('apihand', $hand);
        }

        for ($i = 0; $i < $num; $i++) {
            $card = $hand->draw();
            $cards[] = $card;
        }

        $remainingCards = $hand->getAmount();

        return $this->json([
            'cards' => $cards,
            'remainingcards' => $remainingCards
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }

    #[Route('/api/deck', name: 'api_deck', methods: ['GET'])]
    public function apiDeck(): JsonResponse
    {
        $deck = new DeckOfCards();
        $cards = $deck->getSortedList();

        return $this->json([
            'cards' => $cards,
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }

    #[Route('/api/deck/shuffle', name: 'api_shuffle', methods: ['GET'])]
    public function apiShuffle(SessionInterface $session): JsonResponse
    {
        $deck = new DeckOfCards();
        $cards = $deck->shuffle();

        if ($session->has('handapi')) {
            $session->remove('handapi');
        }

        return $this->json([
            'cards' => $cards,
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }
}
