<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class tinController extends Controller
{
	public function dstin()
	{  $tin=DB::table('tin')->get(['Id_tin','Tieude','Id_loaitin']);
	return view('admin.tin.tin',compact('tin'));
}

public function xoatin($id,$idloai)
{ 	$image=DB::table('tin')->select('Hinhdaidien')->Where('Id_tin',$id)->first();
$dem=DB::table('tin')->where('Id_loaitin',$idloai)->count('Id_tin'); 
if($dem>1)
{ 
	$tin=DB::table('tin')->where('Id_tin',$id)->delete();
	unlink("admin/images/".$image->Hinhdaidien); 
	return redirect('admin/tin/dstin')->with('alert','Xóa thành công');
}
else
{
	return redirect('admin/tin/dstin')->with('error','Xóa thất bại  tin không thể rỗng');
}
}

public function suatin($id)
{
	$tin=DB::table('tin')->where('Id_tin',$id)->get();
	$loaitin=DB::table('loaitin')->get();
	return view('admin.tin.sua',compact(['tin','loaitin']));
}
public function dulieusua(Request $request,$idt)
{
	$request->validate([
		'tieude'=>'required|min:10|max:255',
		'hinhdaidien'=>'image',
		'mota'=>'required|min:10|max:255',
		'noidung'=>'required|min:10',
		'ngaydangtin'=>'required',
		'tacgia'=>'required',
	],
	[
		'tieude.required'=>"Thêm thất bại tiều đề chưa nhập",
		'mota.required'=>"Thêm thất bại mô tả chưa nhập",
		'noidung.required'=>"Thêm thất bại nội dung chưa nhập",
		'ngaydangtin.required'=>"Thêm thất bại ngày chưa được chọn",
		'tacgia.required'=>"Thêm thất bại tác giả chưa nhập",
		'hinhdaidien.image'=>' Thêm thất bại File hình không hợp lệ',
		'tieude.min'=>"Thêm thất bại tiều đề ít nhất 10 kí tự",
		'noidung.min'=>"Thêm thất bại nội dung ít nhất 100 kí tự",
		'mota.min'=>"Thêm thất bại mô tả ít nhất 10 kí tự",
	]);
	$id=$request->nhomtin;
	$td=$request->tieude;
	$mt=$request->mota;
	$nd=$request->noidung;
	$ngay=$request->ngaydangtin;
	$tg=$request->tacgia;
	$hot=$request->tinhot;
	$trangthai=$request->Anhien;
	$list=DB::table('tin')->where('Tieude',$td)->Where('Id_tin','!=',$idt)->first();
	$image=DB::table('tin')->select('Hinhdaidien')->Where('Id_tin',$idt)->first();
	if($list!=null)
	{
		return redirect('admin/tin/dstin')->with('error','Cập nhật thất bại tiêu đề đã có');
	}
	else 
	{
		if($request->hasFile('hinhdaidien'))
		{
			$hinh=($request->file('hinhdaidien'));
			$name=$hinh->getClientOriginalName(); 
			$ten=str::random(4)."_".$name;   
			unlink("admin/images/".$image->Hinhdaidien);  
			$hinh->move("admin/images/",$ten);
		}
		else
		{
			$ten=$image->Hinhdaidien;
		}


		$data=array('Tieude'=>$td,'Hinhdaidien'=>$ten,'Mota'=>$mt,'Noidung'=>$nd,'Ngaydangtin'=>$ngay,'Tacgia'=>$tg,'Tinhot'=>$hot,'Trangthai'=>$trangthai,'Id_loaitin'=>$id);
		DB::table('tin')->Where('Id_tin',$idt)->update($data);
		return redirect('admin/tin/dstin')->with('alert','Cập nhật thành công');

	}

}

public function themtin()
{
	$loaitin=DB::table('loaitin')->get(['Id_loaitin','Ten_loaitin']);
	return view('admin.tin.them',compact('loaitin'));
}

public function dulieuthem(Request $request )
{
	$request->validate([
		'tieude'=>'required|min:10|max:255|unique:tin,Tieude',
		'hinhdaidien'=>'image|required',
		'mota'=>'required|min:10|max:255',
		'noidung'=>'required|min:10',
		'ngaydangtin'=>'required',
		'tacgia'=>'required',
	],
	[
		'tieude.required'=>" Tiêu đề chưa nhập",
		'mota.required'=>"Mô tả chưa nhập",
		'noidung.required'=>" Nội dung chưa nhập",
		'ngaydangtin.required'=>" Ngày chưa được chọn",
		'tacgia.required'=>"Tác giả chưa nhập",
		'hinhdaidien.image'=>'File hình không hợp lệ',
		'hinhdaidien.required'=>" Hình chưa có",
		'tieude.min'=>" Tiêu đề ít nhất 10 kí tự",
		'noidung.min'=>" Nội dung ít nhất 100 kí tự",
		'mota.min'=>" Mô tả ít nhất 10 kí tự",
		'tieude.unique'=>'Tiêu đề đã tồn tại',
	]);
	$id=$request->nhomtin;
	$td=$request->tieude;
	$mt=$request->mota;
	$nd=$request->noidung;
	$ngay=$request->ngaydangtin;
	$tg=$request->tacgia;
	$hot=$request->tinhot;
	$trangthai=$request->Anhien;
	$slx=0;
	if($request->hasFile('hinhdaidien'))
		{
			$hinh=($request->file('hinhdaidien'));
			$name=$hinh->getClientOriginalName(); 
			$ten=str::random(4)."_".$name;   
			$hinh->move("admin/images/",$ten);
		}
	$data=array('Tieude'=>$td,'Hinhdaidien'=>$ten,'Mota'=>$mt,'Noidung'=>$nd,'Ngaydangtin'=>$ngay,'Tacgia'=>$tg,'Solanxem'=>$slx,'Tinhot'=>$hot,'Trangthai'=>$trangthai,'Id_loaitin'=>$id);
		DB::table('tin')->insert($data);
		return redirect('admin/tin/dstin')->with('alert','Thêm thành công');

}

}
