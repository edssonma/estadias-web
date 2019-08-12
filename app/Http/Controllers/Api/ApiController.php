<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public static function ApiConnect($url , $action, $params)
    {

        $data = array(
            'key' => 'N3Kusp5VuL1ww3JuL9ZGBrb4MnsF4dKEGcvsZxZZwCdyo',
            'action'=> $action);

        $datos = array_merge($data, $params);

        $url = "https://uttics.com:2304/v1/" . $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt ($ch, CURLOPT_POSTFIELDS, http_build_query($datos));
        curl_setopt ($ch, CURLOPT_POST, 1);
        $response = curl_exec($ch);
        $curl_info = curl_getinfo($ch);
        $err = curl_error($ch);
        curl_close($ch);

        return [
            'response' => $response,
            'info' => $curl_info,
            'error' => $err
        ];
    }
}
