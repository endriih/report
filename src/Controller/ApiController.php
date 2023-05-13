<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
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
