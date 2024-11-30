<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Services\WeatherService;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;
use Illuminate\Support\Facades\Http;



class WeatherController extends Controller
{
    public function getWeather($latitude, $longitude, $location)
    {
        $apiKey = env('OPENWEATHER_API_KEY');
        $url = "https://api.openweathermap.org/data/2.5/forecast?lat={$latitude}&lon={$longitude}&appid={$apiKey}&units=metric";

        $response = Http::get($url);

        $data = $response->body();


        if (is_string($data)) {
            $data = json_decode($data, true); // Decode string JSON menjadi array
        }

        if (is_array($data) && isset($data['list'])) {
            $forecast = $data['list'];
            $recommendations = $this->getRecommendations($forecast);

            return view('weather.mountain', [
                'forecast' => $forecast,
                'recommendations' => $recommendations,
                'location' => $location,
            ]);
        }

        return view('weather.mountain', ['error' => 'Gagal mengambil data cuaca']);
    }

    private function getRecommendations($forecast)
    {
        $recommendations = [];
        foreach ($forecast as $day) {
            $date = date('Y-m-d', strtotime($day['dt_txt']));
            $weather = $day['weather'][0]['main'];
            $temp = $day['main']['temp'];
            $wind = $day['wind']['speed'];
            $humidity = $day['main']['humidity'];
            $pressure = $day['main']['pressure'];
            $rain = $day['rain']['3h'] ?? 0;

            // Membuat catatan berdasarkan kondisi cuaca
            $note = '';

            // Cek suhu
            if ($temp < 10) {
                $note .= 'Suhu sangat dingin. ';
            } elseif ($temp > 25) {
                $note .= 'Suhu sangat panas. ';
            } else {
                $note .= 'Suhu cukup nyaman. ';
            }

            // Cek kecepatan angin
            if ($wind > 15) {
                $note .= 'Kecepatan angin tinggi, berisiko bagi pendaki. ';
            } else {
                $note .= 'Kecepatan angin rendah, aman untuk pendakian. ';
            }

            // Cek kelembapan
            if ($humidity > 80) {
                $note .= 'Kelembapan tinggi, bisa terasa lembab. ';
            } else {
                $note .= 'Kelembapan normal, nyaman untuk pendakian. ';
            }

            // Cek curah hujan
            if ($rain > 0) {
                $note .= 'Curah hujan diperkirakan. Bawa jas hujan atau perlengkapan untuk hujan. ';
            }

            // Cek tekanan udara
            if ($pressure < 1000) {
                $note .= 'Tekanan udara rendah, kemungkinan cuaca buruk. ';
            } else {
                $note .= 'Tekanan udara normal. ';
            }

            // Menambahkan rekomendasi yang lebih rinci
            if ($weather === 'Clear' && $temp > 15 && $temp < 25 && $wind < 10 && $rain == 0) {
                $note .= 'Cuaca ideal untuk pendakian.';
            } else {
                $note .= 'Hindari pendakian jika memungkinkan.';
            }

            $recommendations[$date] = $note;
        }

        return $recommendations;
    }
}
