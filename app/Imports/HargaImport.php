<?php

namespace App\Imports;

use App\Models\importharga;
use Maatwebsite\Excel\Concerns\ToModel;

class HargaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new importharga([
            'id_jenis' => $row[1],
            'nama' => $row[2], 
            'ukuran' => $row[3], 
            'harga' => $row[4],  
            'last_update' => date('Y-m-d', strtotime($row[5])), 
            'agen' => $row[6], 
            'stock' => $row[7],
            'id_kecamatan' => $row[8],
        ]);
    }
}
