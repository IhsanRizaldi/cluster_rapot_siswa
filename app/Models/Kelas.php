<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas','kode_kelas','tahun_ajaran_id','tingkat_id'];


    public function setkelas(){
        return $this->hasMany(SetKelas::class);
    }
    public function tahun_ajaran(){
        return $this->belongsTo(TahunAjaran::class);
    }
    public function tingkat(){
        return $this->belongsTo(Tingkat::class);
    }
    
}
