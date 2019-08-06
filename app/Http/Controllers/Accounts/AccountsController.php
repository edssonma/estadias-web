<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\AccountsImport;
use Maatwebsite\Excel\Facades\Excel;

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

        $data = array(
            'key' => 'N3Kusp5VuL1ww3JuL9ZGBrb4MnsF4dKEGcvsZxZZwCdyo',
            'action'=>'add', 
            'domain'=>$params->domain, 
            'user'=>$params->user, 
            'pass'=>$params->pass, 
            'email'=>$params->email, 
            'package'=>$params->package, 
            'inode'=>$params->inode,
            'limit_nproc'=>$params->limit_nproc,
            'limit_nofile'=>$params->limit_nofile,
            'server_ips'=>'187.188.191.103');

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
                    'key' => 'N3Kusp5VuL1ww3JuL9ZGBrb4MnsF4dKEGcvsZxZZwCdyo',
                    'action'=>'add', 
                    'domain'=>$collection[$key][0], 
                    'user'=>$collection[$key][1], 
                    'pass'=>$collection[$key][2], 
                    'email'=>$collection[$key][3], 
                    'package'=>$collection[$key][4], 
                    'inode'=>$collection[$key][5],
                    'limit_nproc'=>$collection[$key][6],
                    'limit_nofile'=>$collection[$key][7],
                    'server_ips'=>'187.188.191.103');
        
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
    
                $responses->push([
                    'user' => $collection[$key][1],
                    'response' => json_decode($response)
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
                'key' => 'N3Kusp5VuL1ww3JuL9ZGBrb4MnsF4dKEGcvsZxZZwCdyo',
                'action'=>'del',
                'user'=> $value);
    
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
        }
        

        return response()->json(json_decode($response));

    }
}
