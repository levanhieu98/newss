<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		 $binhluan= DB::select('select * from binhluan where Date(Thoigian)= ?',[date("Y-m-d")]);
		$tintuc= DB::select('select * from tin where Date(Ngaydangtin)= ?',[date("Y-m-d")]);
	return view('admin.home')->with(['binhluan'=>count($binhluan),'tintuc'=>count($tintuc)]);
}
}
