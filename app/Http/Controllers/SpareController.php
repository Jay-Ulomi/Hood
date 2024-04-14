<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SpareController extends Controller
{
    public function fetchData()
    {
        $client = new Client();

        try {
            $response = $client->get('https://thinkbold.africa/hooded/spareA.php');

            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);

                // Assuming $data['cars_jsondata'] is the array containing the cars
                $Spare = $data['cars_jsondata'];


                return view('Spare.All-Spare', ['SpareParts' => $Spare]);
            } else {
                return response()->view('error-view', [], 500);
            }
        } catch (\Exception $e) {
            // Handle exceptions, maybe log them
            return response()->view('error-view', [], 500);
        }
    }

   public function Shop($id){

        $client = new Client();

        try {
           $response = $client->get('https://thinkbold.africa/hooded/get_spareid.php', [
    'query' => [
        'id' => $id
    ]
]);

            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);


                $Spare = $data['cars_jsondata'];
               

                return view('Spare.Shop-Spare', ['Spare' => $Spare]);
            } else {
                return response()->view('error-view', [], 500);
            }
        } catch (\Exception $e) {

            return response()->view('error-view', [], 500);
        }
    }
}
