<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetKelas extends Model
{
    use HasFactory;
    protected $table = 'set_kelas';
    protected $fillable = [
        'kelas_id','siswa_id','walikelas_id'
    ];


    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
    public function walikelas(){
        return $this->belongsTo(User::class);
    }
    public function nilai(){
        return $this->hasMany(Nilai::class);
    }

}
