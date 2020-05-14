@extends('layouts.index')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				@include('note.alert')
				<h4 class="card-title">Danh sách quản trị</h4>
				<div class="table-responsive">
					<table class="table table-bordered verticle-middle">
						<thead class="text-center">
							<tr>
								<th scope="col">Id </th>
								<th scope="col">Tên </th>
								<th scope="col">Email</th>
								<th scope="col">Xóa</th>
							</tr>
						</thead>
						<tbody class="text-center">
							@foreach($qt as $q)
							<tr>
								<td>{{$q->id}}</td>
								<td>{{$q->name}}</td>
								<td>{{$q->email}}</td>
								<td>
									<a  href="admin/user/users/{{$q->id}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger delete"></i></a></span>
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