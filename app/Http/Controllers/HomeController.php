<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\nhomtin;
use App\tin;
use App\loaitin;

class HomeController extends Controller
{

    public function index()
    {   
    	$nhomtin=nhomtin::where('Trangthai',1)->get();
    	$tinhot=tin::where('Trangthai',1)->orderByDesc('Ngaydangtin')->take(4)->get();
    	$xuthe=tin::where('Trangthai',1)->get()->random(8);
    	$tinmoi=tin::where('Trangthai',1)->get()->random(6);
    	$tin=tin::where('Trangthai',1)->get()->random(4);
    	$theloai=loaitin::all();
        return view('home',compact(['nhomtin','tinhot','xuthe','tinmoi','tin','theloai']));
    }


}
