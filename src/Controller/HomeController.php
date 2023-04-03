<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function number(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/about')]
    public function about(): Response
    {
        $number = random_int(0, 100);

        return $this->render('about.html.twig');
    }

    
    #[Route('/report')]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route('/lucky')]
    public function fox(HttpClientInterface $httpClient): Response
    {
        $response = $httpClient->request('GET', 'https://randomfox.ca/floof/');

        $imageData = $response->toArray();
        $imageUrl = $imageData['image'];

        return $this->render('lucky.html.twig', [
            'imageUrl' => $imageUrl,
        ]);
    }

    #[Route('/api/quote')]
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
