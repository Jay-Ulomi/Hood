<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NearMeController extends Controller
{
    public function nearby(){

        $client = new Client();

    try {
        $response = $client->get('https://thinkbold.africa/hooded/admin/gm.php');

        if ($response->getStatusCode() == 200) {
            $data = json_decode($response->getBody(), true);

            $NearMe = $data['data'];
            return view('NearMe.Near-Me', ['NearMe' => $NearMe]);
        } else {
            return response()->view('error-view', [], 500);
        }
    } catch (\Exception $e) {

        return response()->view('error-view', [], 500);
    }
}

public function location($id){

    $client = new Client();

try {
    $response = $client->get('https://thinkbold.africa/hooded/admin/gmid.php?&&id='.$id);

    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $NearMe = $data['cars_jsondata'];
        return view('NearMe.Direction-Near-Me', ['NearMe' => $NearMe]);
    } else {
        return response()->view('error-view', [], 500);
    }
} catch (\Exception $e) {

    return response()->view('error-view', [], 500);
}
}
}
