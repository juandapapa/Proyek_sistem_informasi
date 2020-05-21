<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ppl extends Model
{
    public function kelompoktani(){
        return $this->belongsTo('App\KelompokTani');
    }
    protected $table = "ppl";
    protected $fillable = ['nip_ppl','ppl_name','kelompoktani_id'];
}
