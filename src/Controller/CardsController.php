<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class CardsController extends AbstractController
{
    //Renderar front-sidan av card
    #[Route('/card', name: 'card')]
    public function card(): Response
    {
        return $this->render('cards/card_home.html.twig');
    }

    //Renderar ett deck av kort
    #[Route('/card/deck', name: 'deck')]
    public function deck(): Response
    {
        $deck = new DeckOfCards();
        $cardsGraphic = $deck->getCards();

        return $this->render('cards/card_deck.html.twig', [
            'cardsGraphic' => $cardsGraphic,
        ]);
    }

    //Renderar ett blandat deck av kort
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

    //Drar ett kort
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

    //Drar x antal kort
    #[Route('/card/deck/draw/{num<\d+>}', name: 'deck_draw_multiple')]
    public function drawMultiple(SessionInterface $session, int $num): Response
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

        $cardsGraphic = $hand->drawMultiple($num);
        $remainingCards = $hand->getAmount();

        return $this->render('cards/card_draw_multiple.html.twig', [
            'cardsGraphic' => $cardsGraphic,
            'remainingCards' => $remainingCards,
        ]);
    }

    //Renderar sidan för att dra kort
    #[Route('/card/deck/draw_start', name: 'draw_start')]
    public function drawStart(): Response
    {
        return $this->render('cards/card_draw_start.html.twig');
    }

    //Bearbetar inputen och drar x antal kort
    #[Route('/card/deck/draw_callback', name: 'draw_callback', methods: ['POST'])]
    public function drawCallback(Request $request): Response
    {
        $numCards = $request->request->get('num_cards', 1);
        return $this->redirectToRoute('deck_draw_multiple', ['num' => $numCards]);
    }
}
