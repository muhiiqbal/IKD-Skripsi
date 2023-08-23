<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csvimpotmodel extends Model
{
    protected $table =  'csvimports';

    protected $fillable = [
        'no',
        'nama',
        'k_satu',
        'k_dua',
        'k_tiga',
        'k_empat',
        'k_lima',
        'k_enam',
        'k_tuju',
        'k_delapan',
        'k_sembilan',
        'k_sepuluh',
        'k_sebelas',
        'k_duabelas',
        'k_tigabelas',
        'k_empatbelas',
        'rata_rata',
        'keterangan'
    ];
}
