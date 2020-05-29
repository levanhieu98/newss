<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhomtin extends Model
{
    protected $table='nhomtin';
    public $timestamps=false;
    public function loaitin()
    {
    	$this->hasMany(loaitin::class,'Id_nhomtin','Id_nhomtin');
    }
    protected $fillable = [
        'Ten_nhomtin', 'Trangthai'
    ];
}
