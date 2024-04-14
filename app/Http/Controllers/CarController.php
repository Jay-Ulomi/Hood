<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CarController extends Controller
{
    public function fetchData()
    {
        $client = new Client();

        try {
            $response = $client->get('https://thinkbold.africa/hooded/carsA.php');

            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);

                // Assuming $data['cars_jsondata'] is the array containing the cars
                $cars = $data['cars_jsondata'];

                return view('Car.All-Car', ['Cars' => $cars]);
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
           $response = $client->get('https://thinkbold.africa/hooded/get_carid.php', [
    'query' => [
        'id' => $id
    ]
]);

            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);


                $car = $data['cars_jsondata'];

               
                return view('Car.Shop-Car', ['Car' => $car]);
            } else {
                return response()->view('error-view', [], 500);
            }
        } catch (\Exception $e) {

            return response()->view('error-view', [], 500);
        }
    }

}
