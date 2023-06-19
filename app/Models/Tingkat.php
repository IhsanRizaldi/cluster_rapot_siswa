<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkat extends Model
{
    use HasFactory;
    protected $table = 'tingkat';
    protected $fillable = ['nama_tingkat','kode_tingkat'];

    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
}
