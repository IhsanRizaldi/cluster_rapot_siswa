<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasFactory;
    protected $table = 'tahun_ajaran';
    protected $fillable = ['nama_tahun_ajaran','kode_tahun_ajaran','is_active'];


    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
}
