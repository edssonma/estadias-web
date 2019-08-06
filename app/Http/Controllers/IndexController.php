<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getProjects(Request $request)
    {

        $data = array( 'key' => 'N3Kusp5VuL1ww3JuL9ZGBrb4MnsF4dKEGcvsZxZZwCdyo',
        'action'=>'list');

        $url = "https://uttics.com:2304/v1/account";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt ($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt ($ch, CURLOPT_POST, 1);
        $response = curl_exec($ch);
        $curl_info = curl_getinfo($ch);
        $err = curl_error($ch);
        curl_close($ch);    

        return response()->json(json_decode($response));

    }
}
