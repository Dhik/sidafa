<?php

namespace App\Imports;

use App\Models\importnewharga;
use Maatwebsite\Excel\Concerns\ToModel;

class NewHargaImport implements ToModel
{
   /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        importnewharga::updateOrCreate([    
            'kode_barang' => $row[1],
            'last_update' => date('Y-m-d', strtotime($row[4])),
            'id_kecamatan' => $row[7]
        ],
        [
            'kode_barang' => $row[1],
            'ukuran' => $row[2], 
            'harga' => $row[3],  
            'last_update' => date('Y-m-d', strtotime($row[4])), 
            'agen' => $row[5], 
            'stock' => $row[6],
            'id_kecamatan' => $row[7],
            'kwalitas' => $row[8],
            'keterangan' => $row[9],
        ]);
    }
}
