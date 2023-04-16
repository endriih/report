<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function number(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }


    #[Route('/report', name: 'report')]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route('/lucky', name: 'lucky')]
    public function fox(HttpClientInterface $httpClient): Response
    {
        $response = $httpClient->request('GET', 'https://randomfox.ca/floof/');

        $imageData = $response->toArray();
        $imageUrl = $imageData['image'];

        return $this->render('lucky.html.twig', [
            'imageUrl' => $imageUrl,
        ]);
    }

    #[Route('/api', name: 'api')]
    public function api(): Response
    {
        $routes = [
            'quote' => 'Displays a random quote',
            'deck' => 'Returns the sorted deck of cards in JSON format',
            'deck_shuffle' => 'Shuffles the deck of cards and returns it in JSON format',
            'deck_draw' => 'Draws a single card from the deck and returns it in JSON format',
            'deck_draw_multiple' => 'Draws multiple cards from the deck and returns them in JSON format',
        ];
        return $this->render('api.html.twig', [
            'routes' => $routes,
        ]);
    }

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
}
