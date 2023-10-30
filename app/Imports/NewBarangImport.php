<?php

namespace App\Imports;

use App\Models\importnewbarang;
use Maatwebsite\Excel\Concerns\ToModel;

class NewBarangImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        importnewbarang::updateOrCreate([
            'id_jenis' => $row[1],
            'kode_jenis' => $row[2],
            'nama_barang' => $row[3]
        ],
        [
            'id_jenis' => $row[1],
            'kode_jenis' => $row[2],
            'nama_barang' => $row[3], 
            'ket_barang' => $row[4],  
            'status' => 1,
        ]);
    }
}
