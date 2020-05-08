<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tinController extends Controller
{
	public function dstin()
	{  $tin=DB::table('tin')->get(['Id_tin','Tieude','Id_loaitin']);
	return view('admin.tin.tin',compact('tin'));
}

public function xoatin($id,$idloai)
{
	$dem=DB::table('tin')->where('Id_loaitin',$idloai)->count('Id_tin'); 
	if($dem>1)
	{ 
		DB::table('tin')->where('Id_tin',$id)->delete();
		return redirect('admin/tin/dstin')->with('alert','Xóa thành công');
	}
	else
	{
		return redirect('admin/tin/dstin')->with('error','Xóa thất bại  tin không thể rỗng');
	}
}

public function suatin($id)
{
	return view('admin.tin.sua');
}
}
