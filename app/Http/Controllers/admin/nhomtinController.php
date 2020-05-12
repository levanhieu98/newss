<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class nhomtinController extends Controller
{
	public function dsnhomtin()
	{
		$nhomtin=DB::table('nhomtin')->get();
		return view('admin.nhomtin.nhomtin',compact('nhomtin'));
	}

	public function themnhomtin()
	{
		return view('admin.nhomtin.them');
	}

	public function dulieuthem(Request $request)
	{
		$request->validate([
			'ten'=>'required|min:5|unique:nhomtin,Ten_nhomtin',
		],
		[
			'ten.required'=>"Tên không được để trống",
			'ten.min'=>'Tên ít nhất 5 kí tự',
			'ten.unique'=>'Tên đã tồn tại',
		]);
		 $Ten_nhomtin=$request->ten;
    	 $Trangthai=$request->Anhien;
    	// $check = preg_match('/^[a-zA-Z0-9-\s]+$/',$Ten_nhomtin);
     //$check = preg_match('/[^\w$\x{0080}-\x{FFFF}]+/u',$Ten_nhomtin); kiem tra unicode
    	$data=array('Ten_nhomtin'=>$Ten_nhomtin,'Trangthai'=>$Trangthai);
    	DB::table('nhomtin')->insert($data);
    	return redirect('admin/nhomtin/themnhomtin')->with('alert','Thêm thành công');
	} 

	public function suanhomtin($id)
	{
		$hienthi=DB::table('nhomtin')->where('Id_nhomtin',$id)->get();
		return view('admin.nhomtin.suanhomtin',compact('hienthi'));
	}

	public function dulieusua( Request $request,$id)
	{
		$request->validate([
			'ten_nt'=>'required|min:5',
		],
		[
			'ten_nt.required'=>"Tên không được để trống",
			'ten_nt.min'=>'Tên ít nhất 5 kí tự',
		]); 
		$Ten_nhomtin=$request->ten_nt;
		$Trangthai=$request->Anhien;
		$nhomtin=DB::table('nhomtin')->where('Ten_nhomtin',$Ten_nhomtin)->where('Id_nhomtin', '!=', $id)->first();
		if($nhomtin!=null)
		{
			return redirect('admin/nhomtin/dsnhomtin')->with('error','Cập nhật thất bại tên đã có');
		}
		else
		{
			$data=array('Ten_nhomtin'=>$Ten_nhomtin,'Trangthai'=>$Trangthai);
			DB::table('nhomtin')->where('Id_nhomtin',$id)->update($data);
			return redirect('admin/nhomtin/dsnhomtin')->with('alert','Cập nhật thành công');
		}

	}

	public function xoanhomtin($id)
	{
		$kt =DB::table('loaitin')->where('Id_nhomtin',$id)->first();
    	if($kt != null)
    	{
    		return redirect('admin/nhomtin/dsnhomtin')->with('error','Không thể xóa nhóm tin này ');
    	}
    	else
    	{
    		DB::table('nhomtin')->where('Id_nhomtin',$id)->delete();
    	   return redirect('admin/nhomtin/dsnhomtin')->with('alert','Xóa thành công');
    	}
	}


}
