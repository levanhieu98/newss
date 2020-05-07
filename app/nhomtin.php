<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhomtin extends Model
{
    protected $table='nhomtin'
    public function loaitin($)
    {
    	$this->hasMany(loaitin::class,'Id_nhomtin','Id_nhomtin');
    }
}
