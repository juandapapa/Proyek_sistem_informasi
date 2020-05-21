<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdkk extends Model
{
    protected $table = 'rdkks';
    protected $fillable = ['nama_kelompok', 'alamat', 'nama_pengecer', 'luas_tanah', 'jumlah_pupuk', 'waktu_penggunaan','status'];
}
