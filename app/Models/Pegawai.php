<?php

namespace App\Models;
use App\Models\Kehadiran;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    
    public function Kehadiran()
    {
        
        return $this->hasMany('App\Models\Kehadiran','id_pegawai');
    }
    public function Hadir()
    {
        
        return $this->hasMany('App\Models\Hadir','id_pegawai');
    }
    use HasFactory;
}
