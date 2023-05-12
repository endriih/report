<?php

namespace App\Controller;

use App\Card\Game;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
        if (!$session->has('game')) {
            $game = new Game();
            $session->set('game', $game);
        }

        /** @var Game $game */
        $game = $session->get('game');

        $cards = $game->getDrawnCards();
        $bankCards = $game->getBankCards();

        return $this->render('game/board.html.twig', [
            'cards' => $cards,
            'playerScore' => $game->getPlayerScore(),
            'bankScore' => $game->getBankScore(),
            'bankCards' => $bankCards,
        ]);
    }

    #[Route('/game/reset', name: 'reset')]
    public function resetGame(SessionInterface $session): RedirectResponse
    {
        /** @var Game $game */
        $game = $session->get('game');
        $game->reset();
        $session->set('game', $game);
        return $this->redirectToRoute('board');
    }


    #[Route('/game/draw', name: 'draw')]
    public function drawCard(SessionInterface $session): RedirectResponse
    {
        /** @var Game $game */
        $game = $session->get('game');
        $drawnCards = $game->drawCard();

        if ($game->getPlayerScore() > 21) {
            $this->addFlash($drawnCards['type'], $drawnCards['message']);
        }

        return $this->redirectToRoute('board');
    }

    #[Route('/game/stop', name: 'stop')]
    public function stopGame(SessionInterface $session): RedirectResponse
    {
        /** @var Game $game */
        $game = $session->get('game');
        $result = $game->stop();

        if (!empty($result['message']) && !empty($result['type'])) {
            $this->addFlash($result['type'], $result['message']);
        }

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
        /** @var Game $game */
        $game = $session->get('game');

        return $this->json([
            'playerScore' => $game->getPlayerScore(),
            'bankScore' => $game->getBankScore(),
        ], 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT
        ]);
    }
}
