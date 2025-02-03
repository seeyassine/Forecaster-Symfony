<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class WeatherController extends AbstractController {

    // weather/PL/Stettin
    #[Route("/weather/{countryCode}/{city}")]
    public function forecast(string $countryCode,string $city):Response
    {
        $forecast= [
                [
                    "date" => new \DateTime('2025-01-01'),
                    "temperatureCelsius" => 17,
                    "flTemperatureCelsius" => 16,
                    "pressure" => 1000,
                    "humidity" => 64,
                    "wind_speed" => 3.2,
                    "wind_deg" => 270,
                    "cloudiness" => 75,
                    'icon' => 'sun',
                ],
                [
                    "date" => new \DateTime('2025-01-02'),
                    "temperatureCelsius" => 17,
                    "flTemperatureCelsius" => 16,
                    "pressure" => 1000,
                    "humidity" => 64,
                    "wind_speed" => 3.2,
                    "wind_deg" => 270,
                    "cloudiness" => 75,
                    'icon' => 'cloud',
                ],
                [
                    "date" => new \DateTime('2025-01-03'),
                    "temperatureCelsius" => 17,
                    "flTemperatureCelsius" => 16,
                    "pressure" => 1000,
                    "humidity" => 64,
                    "wind_speed" => 3.5,
                    "wind_deg" => 270,
                    "cloudiness" => 15,
                    'icon' => 'cloud-rain',
                ],
        ];
//
            $response = $this->render('weather/forcast.html.twig',[
                'forecasts' => $forecast,
                'city' =>  $city,
                'countrycode'=> $countryCode
            ]);

            return $response;
    }
}