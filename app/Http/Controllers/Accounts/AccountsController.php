<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\AccountsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Api\ApiController;
use App\User;
use DB;

class AccountsController extends Controller
{
    public function createAccountView()
    {
        return view('content.accounts.create');
    }

    public function deleteAccountView()
    {
        return view('content.accounts.delete');
    }

    public function registerNewAccount(Request $request)
    {
        $params = (object)$request->get('data');

        $data = [
            'domain'=>$params->domain, 
            'user'=>$params->user, 
            'pass'=>$params->pass, 
            'email'=>$params->email, 
            'package'=>$params->package, 
            'inode'=>$params->inode,
            'limit_nproc'=>$params->limit_nproc,
            'limit_nofile'=>$params->limit_nofile,
            'server_ips'=>'187.188.191.103'];

       $response = ApiController::ApiConnect('account', 'add', $data);

        return response()->json(json_decode($response['response']));
    }

    public function registerAccountsFromExcel(Request $request)
    {
        $excel = $request->file('excel');
        $accounts = (new AccountsImport)->toCollection($excel);
        $collection = $accounts[0];

        $responses = collect([]);

        foreach ($collection as $key => $value) {
            if($collection[$key][0] != null && $collection[$key][0] != "")
            {
                $data = array(
                    'domain'=>$collection[$key][0], 
                    'user'=>$collection[$key][1], 
                    'pass'=>$collection[$key][2], 
                    'email'=>$collection[$key][3], 
                    'package'=>$collection[$key][4], 
                    'inode'=>$collection[$key][5],
                    'limit_nproc'=>$collection[$key][6],
                    'limit_nofile'=>$collection[$key][7],
                    'server_ips'=>'187.188.191.103');
        
                $response = ApiController::ApiConnect('account', 'add', $data);
    
                $responses->push([
                    'user' => $collection[$key][1],
                    'response' => json_decode($response['response'])
                ]);
            }
        }

        return response()->json(json_decode($responses));
        
    }

    public function deleteAccount(Request $request)
    {
        $users = $request->get('users');
        
        $usersToDelete = explode(",", $users);
        
        foreach ($usersToDelete as $key => $value) {

            $data = array(
                'user'=> $value);

            $response = ApiController::ApiConnect('account', 'del', $data); 
        }
        

        return response()->json(json_decode($response['response']));

    }

    //----------------------------------server-------------------------------------------

    public function registerNewServerAccount(Request $request)
    {
        $data = $request->get('data');
        $user = new User($data);

        DB::beginTransaction();
        try {

            if($user->save())
            {
                DB::commit();
                return response()->json([
                    'status' => 'OK',
                    'msj' => 'Usuario creado exitósamente'
                ]);
            }
            return response()->json([
                'status' => 'Error',
                'msj' => 'Ha ocurrido un error'
            ]);

    
        } catch (\Illuminate\Database\QueryException $ex) {
                DB::rollback();
                    return response()->json([
                        'status' => 'Error',
                        'msj' => $ex->getMessage()
                    ]);
        }
    }
}
