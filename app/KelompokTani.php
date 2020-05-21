<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelompokTani extends Model
{
    use SoftDeletes; 
    protected $table = "kelompok_tani";
    protected $fillable =['id_kelompok','Nama_Kelompok','Nama_Ketua','Jumlah_Anggota'];
}
