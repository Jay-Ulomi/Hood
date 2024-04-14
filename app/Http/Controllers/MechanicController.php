<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class MechanicController extends Controller
{
    public function getMechanic(){
        return view('Mechanic.Mechanic');
    }
    public function showMechanic(Request $request)
    {
        $client = new Client();

        $response = $client->request('GET', 'https://thinkbold.africa/hooded/errand.php', [
            'query' => [
                'cars' => $request->input('cars'),
                'region' => $request->input('region'),
                'service' => $request->input('service')
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        if (isset($data['data'])) {

            $Mechanic = $data['data'];

            // dd($Mechanic);

            return view('Mechanic.Mechanic-Get', ['Mechanic' => $Mechanic]);
        } else {
            return redirect()->route('error.page');
        }
    }

}
