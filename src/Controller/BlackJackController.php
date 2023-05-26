<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;
use App\Card\BlackJack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class BlackJackController extends AbstractController
{
    #[Route('/proj', name: 'proj_start')]
    public function start(): Response
    {
        return $this->render('blackjack/game.html.twig');
    }

    #[Route('/proj/game', name: 'proj_game')]
    public function startGame(SessionInterface $session): Response
    {
        if (!$session->has('blackjackgame')) {
            $blackjackGame = new BlackJack(3);
            $session->set('blackjackgame', $blackjackGame);
        }

        $blackjackGame = $session->get('blackjackgame');
        $output = '';
        foreach ($blackjackGame->getPlayerHands() as $index => $hand) {
            $output .= "Hand " . ($index + 1) . ": " . implode(", ", $hand->getCardGraphics()) . "<br>";
        }
        
        return new Response($output);
    }

    #[Route('/proj/game/draw', name: 'proj_game_draw')]
    public function drawCard(SessionInterface $session): RedirectResponse
    {
        $blackjackGame = $session->get('blackjackgame');
        $blackjackGame->drawCard(0);
        return $this->redirectToRoute('proj_game');
    }
}

