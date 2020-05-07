<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loaitinController extends Controller
{
    public function dsloaitin()
    {  $loaitin=DB::table('loaitin')->get();
    	return view('admin.loaitin.loaitin',compact('loaitin'));
    }

    public function themloaitin()
    {
    	$nhomtin=DB::table('nhomtin')->get(['Id_nhomtin','Ten_nhomtin']);
    	return view('admin.loaitin.them',compact('nhomtin'));
    }

    public function dulieuthem(Request $request)
    {
    	$request->validate([
    		'ten'=>'required|unique:loaitin,Ten_loaitin|min:5',
    	],
    	[
    		'ten.required'=>'Tên loại tin không được để trống',
    		'ten.unique'=>'Tên loại tin đã tồn tại',
    		'ten.min'=>'Tên loại tin ít nhất 5 kí tự',
    	]);

    	$idnhomtin=$request->nhomtin;
    	$tenloaitin=$request->ten;
    	$trangthai=$request->Anhien;
    	$data=array(['Ten_loaitin'=>$tenloaitin,'Trangthai'=>$trangthai,'Id_nhomtin'=>$idnhomtin]);
    	DB::table('loaitin')->insert($data);
    	$request->session()->flash('alert','Thêm loại tin thành công');
    	return redirect('admin/loaitin/themloaitin');


    }

    public function sualoaitin($id)
    {	$nhomtin=DB::table('nhomtin')->get(['Id_nhomtin','Ten_nhomtin']);
    	$loaitin=DB::table('loaitin')->where('Id_loaitin',$id)->get();
    	return view('admin.loaitin.sua',compact(['nhomtin','loaitin']));
    }

   public function dulieusua(Request $request,$id)
   {
   		$request->validate([
    		'ten'=>'required|min:5',
    	],
    	[
    		'ten.required'=>'Tên loại tin không được để trống',
    		'ten.min'=>'Tên loại tin ít nhất 5 kí tự',
    	]);
    	$Id_nhomtin=$request->nhomtin;
    	$Ten_loaitin=$request->ten;
    	$Trangthai=$request->Anhien;
        $loaitin=DB::table('loaitin')->where('Ten_loaitin',$Ten_loaitin)->where('Id_loaitin','!=',$id)->first();
        if($loaitin!=null)
        {
            return redirect('admin/loaitin/dsloaitin')->with('error','Cập nhật thất bại tên đã có');
        }
        else
        {
           $data=array('Ten_loaitin'=>$Ten_loaitin,'Trangthai'=>$Trangthai,'Id_nhomtin'=>$Id_nhomtin);
            DB::table('loaitin')->where('Id_loaitin',$id)->update($data);
            return redirect('admin/loaitin/dsloaitin')->with('alert','Cập nhật thành công'); 
        }
   }

   public function xoaloaitin($id)
   {
   	$kt =DB::table('tin')->where('Id_loaitin',$id)->first();
    	if($kt != null)
    	{
    		return redirect('admin/loaitin/dsloaitin')->with('error','Không thể xóa loại tin này ');
    	}
    	else
    	{
    		DB::table('loaitin')->where('Id_loaitin',$id)->delete();
    	return redirect('admin/loaitin/dsloaitin')->with('alert','Xóa thành công');
    	}
   }
}
