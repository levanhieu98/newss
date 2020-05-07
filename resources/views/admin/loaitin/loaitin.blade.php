@extends('layouts.index')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				@include('note.alert')
				<h4 class="card-title">Danh sách loại tin</h4>
				<div class="table-responsive">
					<table class="table table-bordered verticle-middle">
						<thead class="text-center">
							<tr>
								<th scope="col">Id loại tin</th>
								<th scope="col">Tên loại tin</th>
								<th scope="col">Trạng thái</th>
								<th scope="col">Id nhóm tin</th>
								<th scope="col">Sữa&Xóa</th>
							</tr>
						</thead>
						<tbody class="text-center">
							@foreach($loaitin as $lt)
							<tr>
								<td>{{$lt->Id_loaitin}}</td>
								<td>
								{{$lt->Ten_loaitin}}
								</td>
								<td scope="col">{{$lt->Trangthai}}</td>
								<td scope="col">{{$lt->Id_nhomtin}}</td>
								<td><span><a href="admin/loaitin/sualoaitin/{{$lt->Id_loaitin}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit  color-muted  mr-3"></i> </a>
								<a href="admin/loaitin/xoaloaitin/{{$lt->Id_loaitin}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger delete"></i></a></span>
								</td>
							</tr>
							@endforeach	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection