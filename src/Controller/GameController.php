<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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
    public function gameBoard(SessionInterface $session, Request $request): Response
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
    
        if ($request->query->get('draw') === 'true') {
            $playerHand->draw();
            $session->set('player_hand', $playerHand);
            if ($playerHand->getTotalValue() > 21) {
                $gameResult = 'You lost!';
            }
        }

        $cards = $session->get('drawn_cards');
    
        return $this->render('game/board.html.twig', [
            'cards' => $cards,
            'playerHand' => $playerHand,
            'bankHand' => $bankHand,
            'gameResult' => $gameResult ?? null,
        ]);
    }
    
    #[Route('/game/reset', name: 'reset')]
    public function resetGame(SessionInterface $session): RedirectResponse
    {
        $session->remove('game_deck');
        $session->remove('player_hand');
        $session->remove('bank_hand');
        $session->remove('card_images');   
        
        return $this->redirectToRoute('board');
    }

    #[Route('/game/draw', name: 'draw')]
    public function drawCard(SessionInterface $session): RedirectResponse
    {
        $drawnCards = $session->get('drawn_cards');
        if (!$drawnCards) {
            $drawnCards = [];
        }

        $deck = $session->get('game_deck');
        $playerHand = $session->get('player_hand');
        $card = $playerHand->draw();

        $drawnCards[] = $card->getImage();
        $session->set('drawn_cards', $drawnCards);

        return $this->redirectToRoute('board');
    }



    // #[Route('/game/result', name: 'result')]
    // public function gameResult(): Response
    // {
    //     //resultat där poäng ges
    // }

    // #[Route('/game/doc', name: 'docs')]
    // public function gameDocs(): Response
    // {
    //     //dokument för spelet
    // }
}
