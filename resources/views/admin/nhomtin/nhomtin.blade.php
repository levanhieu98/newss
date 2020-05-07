@extends('layouts.index')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<input type="hidden" name="_method" value="delete" />
		<div class="card">
			<div class="card-body">
				@include('note.alert')
				<h4 class="card-title">Danh sách nhóm tin</h4>
				<div class="table-responsive">
					<table class="table table-bordered verticle-middle">
						<thead class="text-center">
							<tr>
								<th scope="col">Id nhóm tin</th>
								<th scope="col">Tên nhóm tin</th>
								<th scope="col">Trạng thái</th>
								<th scope="col">Sữa&Xóa</th>
							</tr>
						</thead>
						<tbody class="text-center">
							@foreach($nhomtin as $nhom)
							<tr>
								<td>{{$nhom->Id_nhomtin}}</td>
								<td>
									{{$nhom->Ten_nhomtin}}
								</td>
								<td>{{$nhom->Trangthai}}</td>
								
								<td><span><a href="admin/nhomtin/suanhomtin/{{$nhom->Id_nhomtin}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit  color-muted  mr-3"></i> </a><a href="admin/nhomtin/xoanhomtin/{{$nhom->Id_nhomtin}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
								</td>
							</form>	
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