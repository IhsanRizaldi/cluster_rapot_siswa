<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilai';
    protected $fillable = ['setkelas_id','bahasa_indonesia','bahasa_inggris','bahasa_jepang','llmu_pengetahuan_alam','ilmu_pengetahuan_sosial','matematika','seni_budaya','pendidikan_jasmani_dan_rohani','pendidikan_agama_dan_budi_pekerti','pendidikan_kewarganegaraan'];

    public function setkelas(){
        return $this->belongsTo(SetKelas::class);
    }
}
