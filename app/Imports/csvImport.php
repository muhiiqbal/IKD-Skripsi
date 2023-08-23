<?php

namespace App\Imports;

use App\Models\csvimpotmodel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class csvImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new csvimpotmodel([
        'nama'     => $row['nama'],
        'k_satu'    => $row['k_satu'],
        'k_dua'    => $row['k_dua'],
        'k_tiga'    => $row['k_tiga'],
        'k_empat'    => $row['k_empat'],
        'k_lima'    => $row['k_lima'],
        'k_enam'    => $row['k_enam'],
        'k_tuju'    => $row['k_tuju'],
        'k_delapan'    => $row['k_delapan'],
        'k_sembilan'    => $row['k_sembilan'],
        'k_sepuluh'    => $row['k_sepuluh'],
        'k_sebelas'    => $row['k_sebelas'],
        'k_duabelas'    => $row['k_duabelas'],
        'k_tigabelas'    => $row['k_tigabelas'],
        'k_empatbelas'    => $row['k_empatbelas'],
        'keterangan'    =>$row['keterangan'],
        ]);
    }
}
