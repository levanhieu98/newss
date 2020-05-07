<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    protected $table='tin';

    public function loaitin()
    {
    	$this->belongsTo(loaitin::class,'Id_loaitin');
    }

    public function binhluan()
    {
    	$this->hasMany(binhluan::class,'Id_tin', 'Id_tin')
    }
}
