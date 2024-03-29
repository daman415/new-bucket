<?php

namespace App\Imports;

use App\Models\Jurusan;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class JurusanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Jurusan([
            'nama_jurusan'     => $row[0],
            'kode_jurusan' => $row[1],
        ]);
    }
}
