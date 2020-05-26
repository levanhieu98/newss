@extends('layouts.index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="text-center">
                    <h2>Hoạt động trong ngày</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th>Ngày {{date('d-m-Y ')}}</th>
                                    <th>Hoạt động </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tin tức</td>
                                    <td>
                                      {{$tintuc}} 
                                 </td>
                             </tr>
                             <tr>
                                <td>Bình luận</td>
                                <td>
                                   {{$binhluan}} 
                              </td>
                          </tr>

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>
@endsection
