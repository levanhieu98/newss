<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class quantri extends Controller
{
    public function dsquantri()
    {
    	$qt=User::all();
    	return view ('admin.quantri.quantri',compact('qt'));
    }
    public function xoa($id)
    {
    	
    	if($id!=Auth::id())
    	{
    		DB::table('users')->where('id',$id)->update(['Trangthai'=>0]);
    		 return redirect('admin/user/dsquantri')->with('alert','Xóa thành công');
    	}
    	else {
    		 return redirect('admin/user/dsquantri')->with('error','Không thể xóa được');
    	}

    }
}
