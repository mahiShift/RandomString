<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function login()
    {
        return view('login');
    }

    // public function index()
    // {
    //     $unique_sentences = [];
    //     while (count($unique_sentences) < 5) {
    //         $response = Http::get('https://api.kanye.rest/');

    //         if ($response->successful()) {

    //             $data = $response->json();

    //             $sentences = explode(".", $data['quote']);

    //             $random_sentence = $sentences[array_rand($sentences)];

    //             if (!in_array($random_sentence, $unique_sentences)) {
    //                 $unique_sentences[] = $random_sentence;
    //             }
    //         } else {
    //             echo "Failed....";
    //         }
    //     }

    //     return view('index', ['unique_sentences' => $unique_sentences]);

    // }
    public function index()
    {
        $unique_sentences = [];
        while (count($unique_sentences) < 5) {
            $curl = curl_init();

            curl_setopt($curl, CURLOPT_URL, 'https://api.kanye.rest/');

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);

            if (curl_errno($curl)) {
                echo 'Failed: ' . curl_error($curl);
            } else {
                curl_close($curl);
                $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                if ($http_code === 200) {
                    $data = json_decode($response, true);

                    $sentences = explode('.', $data['quote']);

                    $random_sentence = $sentences[array_rand($sentences)];

                    if (!in_array($random_sentence, $unique_sentences)) {
                        $unique_sentences[] = $random_sentence;
                    }
                } else {
                    echo 'Failed......';
                }
            }
        }

        return view('index', ['unique_sentences' => $unique_sentences]);
    }

}
