@extends('layouts.index')
@section('content')
<div class="row">
	<div class="col-lg-11 ml-5 mr-3 ">
		<div class="card">
			<div class="card-body ">
				<h4 class="card-title">Sữa nhóm tin</h4>
				<div class="basic-form ml-5">
					@foreach($hienthi as $ht)
					<form method="POST" action="admin/nhomtin/dulieusua/{{$ht->Id_nhomtin}}">
						<input type="hidden" name="_method" value="PUT">
						<input type="hidden" name="_token" value="UYZ2pUvpnxytOMB3U28efT78GH7Dl9wupySLRZ0F">
						<!--  Muốn sử dụng put,delete,pacth cần phải khai báo hidden -->
						@csrf
						<div class="form-group ml-5">
							<div class="form-inline">
								<div class="col-lg-3">Sữa nhóm tin</div>
								<div class=" col-lg-9">
									<input type="text" name="ten_nt" class="form-control input-default @error('ten_nt') is-invalid @enderror" placeholder="Tên nhóm tin" value="{{$ht->Ten_nhomtin}}">
									@error('ten_nt')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="form-inline mt-3">
								<div class="col-lg-3">Trạng thái</div>
								<div class=" col-lg-9">
									<div class="form-group">
										<label class="radio-inline ml-4 mr-5">
											<input type="radio" name="Anhien" value="1" {{($ht->Trangthai==1)?'checked':""  }}  >Hiện</label>
											<label class="radio-inline ">
												<input type="radio" name="Anhien" value="0" {{($ht->Trangthai==0)?'checked':""}} >Ẩn</label>
											</div>
										</div>
									</div>
									<div class="col-auto ml-5 mt-3">
										<button type="submit" class="btn btn-primary mb-2 ml-5">Sữa nhóm tin</button>
									</div>
								</div>
							</form>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>@endsection