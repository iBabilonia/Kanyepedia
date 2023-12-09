<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class KanyeController extends Controller
{
    public function getQuote()
    {
        $client = new Client();
        $response = $client->get('https://api.kanye.rest');
        $quote = json_decode($response->getBody(), true)['quote'];

        return view('kanye', ['quote' => $quote]);
    }
}

