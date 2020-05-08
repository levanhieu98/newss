@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('note.alert')
                <h4 class="card-title">Danh sách tin</h4>
                <div class="table-responsive ">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr class="text-center">
                                <th>Id</th>
                                <th>Tiêu đề</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($tin as $t)
                            <tr>
                                <td><a href="admin/tin/suatin/{{$t->Id_tin}}">{{$t->Id_tin}}</a></td>
                                <td><a href="admin/tin/suatin/{{$t->Id_tin}}">{{$t->Tieude}}</a></td>
                                <td class="text-center"><span><a href="admin/tin/xoatin/{{$t->Id_tin}}/{{$t->Id_loaitin}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger "></i></a></span>
                                </td>   
                                
                            </tr>
                        
                           @endforeach
                        </tbody>
                       {{--  <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                     </tfoot> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
