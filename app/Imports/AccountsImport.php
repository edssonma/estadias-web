<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;

class AccountsImport implements ToCollection
{
    use Importable;

    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            return [
                'domain'=>$row[0], 
                'user'=>$row[1], 
                'pass'=>$row[2], 
                'email'=>$row[3], 
                'package'=>$row[4], 
                'inode'=>$row[5],
                'limit_nproc'=>$row[6],
                'limit_nofile'=>$row[7],
                'server_ips'=>'187.188.191.103'
            ];
        }
    }
}
