<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function fetchData()
    {
        $client = new Client();
        $carsData = [];
        $spareData = [];

        try {
            $responseCars = $client->get('https://thinkbold.africa/hooded/carsP.php');

            if ($responseCars->getStatusCode() == 200) {
                $dataCars = json_decode($responseCars->getBody(), true);

                if (isset($dataCars['cars_jsondata'])) {
                    $carsData = $dataCars['cars_jsondata'];
                }
            }

            $responseSpare = $client->get('https://thinkbold.africa/hooded/spareP.php');

            if ($responseSpare->getStatusCode() == 200) {
                $dataSpare = json_decode($responseSpare->getBody(), true);


                if (isset($dataSpare['cars_jsondata'])) {
                    $spareData = $dataSpare['cars_jsondata'];
                }
            }
           
            return view('index', ['Cars' => $carsData, 'SpareParts' => $spareData]);
        } catch (\Exception $e) {

            return response()->view('error-view', [], 500);
        }
    }
}
