<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    protected $table='loaitin';

    public function nhomtin()
    {
    	$this->belongsTo(nhomtin::class,'Id_nhomtin');
    }
    public function tin()
    {
    	$this->hasMany(tin::class,'Id_loaitin','Id_loaitin');
    }
}
