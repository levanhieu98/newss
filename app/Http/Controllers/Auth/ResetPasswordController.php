<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo ='admin/home';

    public function reset()
    {
        return view ('auth.passwords.reset');
    }
    public function rspass($id,Request $requests)
    {
      $requests->validate([
       'password'=>'required|confirmed' ,
       'password_confirmation'=>'required|min:8' ,
     ],
     [
      'password.required'=>'Chưa nhập mật khẩu ', 
      'password_confirmation.required'=>'Chưa nhập mật khẩu ', 
      'password_confirmation.min'=>'Mật khẩu mới ít nhất 8 kí tự',
      'password.confirmed'=>'Không trùng khớp ',  
    ]);
      $mkmoi=Hash::make($requests->password);
     DB::table('users')->where('id',$id)->update(['password'=>$mkmoi]);
            return redirect('admin/logout');
    }
}
