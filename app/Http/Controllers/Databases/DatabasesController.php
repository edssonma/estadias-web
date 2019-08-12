<?php

namespace App\Http\Controllers\Databases;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\ApiController;
use function GuzzleHttp\json_decode;

class DatabasesController extends Controller
{
    public function databasesView()
    {
        return view('content.databases.databases');
    }

    public function getUsers($user = 'tics')
    {
        $params = [
            'user' => $user
        ];

        $response = ApiController::ApiConnect('usermysql', 'list', $params);
       
        return response()->json(json_decode($response['response']));
    }

    public function getDatabases($user = 'tics')
    {
            $data = array(
                'user'=> $user);

            $response = ApiController::ApiConnect('databasemysql', 'list', $data);

        return response()->json([
            'collection' => json_decode($response['response'])->msj,
            'length' =>  sizeof(json_decode($response['response'])->msj)
        ]);
    }
}
