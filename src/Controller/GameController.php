<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class GameController extends AbstractController
{
    #[Route('/game', name: 'game')]
    public function gameHome(SessionInterface $session): Response
    {
        if (!$session->has('deck')) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        }

        return $this->render('game/game.home.html.twig');
    }

    #[Route('/game/board', name: 'board')]
    public function gameBoard(SessionInterface $session): Response
    {
        if (!$session->has('game_deck')) {
            $deck = new DeckOfCards();
            $session->set('game_deck', $deck);
        } else {
            $deck = $session->get('game_deck');
        }

        if (!$session->has('player_hand')) {
            $playerHand = new CardHand($deck);
            $session->set('player_hand', $playerHand);
        } else {
            $playerHand = $session->get('player_hand');
        }

        if (!$session->has('bank_hand')) {
            $bankHand = new CardHand($deck);
            $session->set('bank_hand', $bankHand);
        } else {
            $bankHand = $session->get('bank_hand');
        }

        $cards = $session->get('drawn_cards');
        $bankCards = $session->get('bank_cards');

        return $this->render('game/board.html.twig', [
            'cards' => $cards,
            'playerHand' => $playerHand,
            'bankHand' => $bankHand,
            'bankCards' => $bankCards,
        ]);
    }

    #[Route('/game/reset', name: 'reset')]
    public function resetGame(SessionInterface $session): RedirectResponse
    {
        $session->remove('game_deck');
        $session->remove('player_hand');
        $session->remove('bank_hand');
        $session->remove('drawn_cards');
        $session->remove('bank_cards');
        return $this->redirectToRoute('board');
    }

    #[Route('/game/draw', name: 'draw')]
    public function drawCard(SessionInterface $session): RedirectResponse
    {
        $drawnCards = $session->get('drawn_cards');
        if (!$drawnCards) {
            $drawnCards = [];
        }

        $playerHand = $session->get('player_hand');
        if ($playerHand->getTotalValue() < 21) {
            $card = $playerHand->draw();
            $drawnCards[] = $card->getImage();
            $session->set('drawn_cards', $drawnCards);
        }

        if ($playerHand->getTotalValue() > 21) {
            $this->addFlash(
                'warning',
                'Du slog över 21!'
            );
        }

        return $this->redirectToRoute('board');
    }

    #[Route('/game/stop', name: 'stop')]
    public function stopGame(SessionInterface $session): RedirectResponse
    {
        $playerHand = $session->get('player_hand');
        $bankHand = $session->get('bank_hand');
        while ($bankHand->getTotalValue() < 17) {
            $bankHand->draw();
        }

        $bankCards = $bankHand->getCardGraphics();

        if ($bankHand->getTotalValue() > 21) {
            $this->addFlash(
                'notice',
                'Spelaren vinner!'
            );
        } elseif ($bankHand->getTotalValue() <= 21 && $playerHand->getTotalValue() < $bankHand->getTotalValue()) {
            $this->addFlash(
                'warning',
                'Spelaren förlorar!'
            );
        } elseif ($playerHand->getTotalValue() == $bankHand->getTotalValue()) {
            $this->addFlash(
                'warning',
                'Banken vinner!'
            );
        } elseif ($playerHand->getTotalValue() > $bankHand->getTotalValue() && $bankHand->getTotalValue() <= 21 && $playerHand->getTotalValue() <= 21) {
            $this->addFlash(
                'notice',
                'Spelaren vinner!'
            );
        }

        $session->set('bank_cards', $bankCards);

        return $this->redirectToRoute('board');
    }


    #[Route('/game/doc', name: 'docs')]
    public function gameDocs(): Response
    {
        return $this->render('game/doc.html.twig');
    }

    #[Route('/api/game', name: 'api_game', methods: ['GET'])]
    public function apiDrawMultiple(SessionInterface $session): Response
    {
        $playerHand = $session->get('player_hand');
        $bankHand = $session->get('bank_hand');

        return $this->json([
            'playerScore' => $playerHand->getTotalValue(),
            'bankScore' => $bankHand->getTotalValue()
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }
}
