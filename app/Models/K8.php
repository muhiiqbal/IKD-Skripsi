<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class K8 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    

    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
