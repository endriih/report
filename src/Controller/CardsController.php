<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class CardsController extends AbstractController
{
    #[Route('/card', name: 'card')]
    public function card(): Response
    {
        return $this->render('cards/card_home.html.twig');
    }

    #[Route('/card/deck', name: 'deck')]
    public function deck(): Response
    {
        $deck = new DeckOfCards();
        $cardsGraphic = $deck->getCards();

        return $this->render('cards/card_deck.html.twig', [
            'cardsGraphic' => $cardsGraphic,
        ]);
    }

    #[Route('/card/deck/shuffle', name: 'deck_shuffle')]
    public function shuffleDeck(SessionInterface $session): Response
    {
        $deck = new DeckOfCards();
        $deck->shuffle();
        $cardsGraphic = $deck->getCards();

        // reset the hand if shuffle route is accessed
        if ($session->has('hand')) {
            $session->remove('hand');
        }
        return $this->render('cards/card_deck.html.twig', [
            'cardsGraphic' => $cardsGraphic,
        ]);
    }

    #[Route('/card/deck/draw', name: 'deck_draw')]
    public function draw(SessionInterface $session): Response
    {
        $deck = $session->get('deck');
        if (!$deck instanceof DeckOfCards) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        }

        $hand = $session->get('hand');
        if (!$hand instanceof CardHand) {
            $hand = new CardHand($deck);
            $session->set('hand', $hand);
        }

        $card = $hand->draw();
        $remainingCards = $hand->getAmount();

        $session->set('hand', $hand);

        return $this->render('cards/card_draw.html.twig', [
            'cardGraphic' => $card->getImage(),
            'remainingCards' => $remainingCards,
        ]);
    }


    #[Route('/card/deck/draw/{num<\d+>}', name: 'deck_draw_multiple')]
    public function drawMultiple(SessionInterface $session, int $num): Response
    {
        $deck = $session->get('deck');
        if (!$deck instanceof DeckOfCards) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        }

        $cards = [];
        $hand = $session->get('hand');
        if (!$hand instanceof CardHand) {
            $hand = new CardHand($deck);
            $session->set('hand', $hand);
        }
        for ($i = 0; $i < $num; $i++) {
            $card = $hand->draw();
            $cards[] = $card->getImage();
        }
        $remainingCards = $hand->getAmount();

        return $this->render('cards/card_draw_multiple.html.twig', [
            'cardsGraphic' => $cards,
            'remainingCards' => $remainingCards,
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

    #[Route('/api/deck/shuffle', name: 'api_shuffle', methods: ['POST'])]
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

    #[Route('/api/deck/draw', name: 'api_draw', methods: ['POST'])]
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

    #[Route('/api/deck/draw/{num<\d+>}', name: 'api_draw_multiple', methods: ['POST'])]
    public function apiDrawMultiple(SessionInterface $session, int $num): Response
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
}
