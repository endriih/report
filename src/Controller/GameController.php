<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class GameController extends AbstractController
{
    #[Route('/game', name: 'game')]
    public function gameHome(): Response
    {
        return $this->render('game/game.home.html.twig');
    }

    #[Route('/game/board', name: 'board')]
    public function gameBoard(SessionInterface $session): Response
{
    if (!$session->has('deck')) {
        $deck = new DeckOfCards();
        $session->set('deck', $deck);
    } else {
        $deck = $session->get('deck');
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

    // ...
}

    #[Route('/game/result', name: 'result')]
    public function gameResult(): Response
    {
        //resultat där poäng ges
    }

    #[Route('/game/doc', name: 'docs')]
    public function gameDocs(): Response
    {
        //dokument för spelet
    }
}
