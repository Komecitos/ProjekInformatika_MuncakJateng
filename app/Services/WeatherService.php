<?php

namespace App\Services;

use GuzzleHttp\Client;

class WeatherService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('WEATHER_API_KEY'); // Mengambil API Key dari file .env
    }

    // Fungsi untuk mendapatkan cuaca saat ini
    public function getCurrentWeather($location)
    {
        $response = $this->client->get("https://api.weatherapi.com/v1/current.json", [
            'query' => [
                'key' => $this->apiKey,
                'q' => $location,
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    // Fungsi untuk mendapatkan prakiraan cuaca
    public function getForecast($location, $days = 7)
    {
        $response = $this->client->get("https://api.weatherapi.com/v1/forecast.json", [
            'query' => [
                'key' => $this->apiKey,
                'q' => $location,
                'days' => $days,
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
