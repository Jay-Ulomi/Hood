<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FeedController extends Controller
{
    public function fetchData()
    {
        $client = new Client();

        try {
            $response = $client->get('https://thinkbold.africa/hooded/list.php');

            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);

                // Assuming $data['cars_jsondata'] is the array containing the cars
                $Feed = $data['data'];

                return view('Feed.Feed', ['Feeds' => $Feed]);
            } else {
                return response()->view('error-view', [], 500);
            }
        } catch (\Exception $e) {
            // Handle exceptions, maybe log them
            return response()->view('error-view', [], 500);
        }
    }
}
