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

    public function chitiet($id)
    { 
        $nhomtin=nhomtin::where('Trangthai',1)->get();
        $theloai=loaitin::all();
        $chitiet=tin::where('Id_tin',$id)->get();
        $tinmoi=tin::where('Trangthai',1)->get()->random(6);

    return view ('tinchitiet',compact(['nhomtin','theloai','chitiet','tinmoi']));  
    }

    public function theloai($id)
    {    $nhomtin=nhomtin::where('Trangthai',1)->get();
        $theloai=loaitin::all();
        $tin=tin::where('Id_loaitin',$id)->get();
        $xuthe=tin::where('Trangthai',1)->get()->random(8);
        return view('theloai',compact(['nhomtin','theloai','tin','xuthe']));
    }

    public function hienthi()
    { $nhomtin=nhomtin::where('Trangthai',1)->get();
        $theloai=loaitin::all();
        return view('timkiemApi',compact(['nhomtin','theloai']));
    }

    public function timkiem(Request $request)
    {
        $nhomtin=nhomtin::where('Trangthai',1)->get();
        $theloai=loaitin::all();
        $tukhoa = $request ->search;
    $tin = tin::where('Tieude','like','%'.$tukhoa.'%') -> get();
  
 return view('timkiem',['tin'=>$tin,'tukhoa'=>$tukhoa,'nhomtin'=>$nhomtin,'theloai'=>$theloai]);
    }
}
