<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nisn','nis','nama_lengkap','tempat_lahir','tanggal_lahir','alamat'];


    public function setkelas(){
        return $this->hasMany(SetKelas::class);
    }
}
