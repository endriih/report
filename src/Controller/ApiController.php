<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Card\DeckOfCards;
use App\Card\CardHand;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\BookRepository;

class ApiController extends AbstractController
{
    //API route som tar fram ett kort
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

    //API route som tar fram x antal kort
    #[Route('/api/deck/draw/{num<\d+>}', name: 'api_draw_multiple', methods: ['GET'])]
    public function apiDrawMultiple(SessionInterface $session, int $num): JsonResponse
    {
        $deck = $session->get('apideck');
        if (!$deck instanceof DeckOfCards) {
            $deck = new DeckOfCards();
            $session->set('apideck', $deck);
        }
        $hand = $session->get('apihand');
        if (!$hand instanceof CardHand) {
            $hand = new CardHand($deck);
            $session->set('apihand', $hand);
        }

        $cardsGraphic = $hand->drawMultiple($num);
        $remainingCards = $hand->getAmount();

        return $this->json([
            'cards' => $cardsGraphic,
            'remainingcards' => $remainingCards
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }

    //API route som tar fram ett deck av kort
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

    //API route som tar fram ett blandat deck av kort
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

    //API Route som tar fram alla böcker
    #[Route('/api/library/books', name: 'api_library', methods: ['GET'])]
    public function getLibraryBooks(BookRepository $bookRepository): JsonResponse
    {
        $books = $bookRepository->findAll();

        $bookArray = [];
        foreach ($books as $book) {
            $bookArray[] = [
                'id' => $book->getId(),
                'name' => $book->getName(),
                'title' => $book->getTitle(),
                'isbn' => $book->getIsbn(),
                'image' => $book->getImage(),
            ];
        }

        return $this->json([
            'books' => $bookArray
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }

    //API route som tar fram en bok baserat på bokens isbn-nummer
    #[Route('/api/library/book/{isbn}', name: 'api_library_book', methods: ['GET'])]
    public function getBookByISBN(string $isbn, BookRepository $bookRepository): JsonResponse
    {
        $book = $bookRepository->findOneBy(['isbn' => $isbn]);

        if (!$book) {
            return $this->json(['error' => 'Book not found'], 404);
        }

        $bookData = [
            'id' => $book->getId(),
            'name' => $book->getName(),
            'title' => $book->getTitle(),
            'isbn' => $book->getIsbn(),
            'image' => $book->getImage(),
        ];

        return $this->json([
            'book' => $bookData
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }
}
