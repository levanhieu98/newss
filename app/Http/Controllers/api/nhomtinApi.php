<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\nhomtin;

class nhomtinApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        $nhomtin=nhomtin::all();
        return response()->json($nhomtin);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nt=nhomtin::create($request->all());
        return response()
        ->json([$nt,'message'=>'Thêm thành công']); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nhomtin=nhomtin::where('Id_nhomtin',$id)->get();
        if($nhomtin->count()>0)
        {
           return response()->json([$nhomtin,'message'=>'Tim thay']);
           
       }
       else
       {
           return response()->json(['message'=>'Không tìm thấy']);
       }
       
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $nhomtin=nhomtin::where('Id_nhomtin',$id);
        $nhomtin->update($request->all());
        return response()->json(['message'=>'cập nhập thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhomtin=nhomtin::where('Id_nhomtin',$id);
        $nhomtin->delete();
        return response()->json(['message'=>'xóa thành công']);
    }
}
