@extends('layouts.index')
@section('content')
<div class="row">
	<div class="col-lg-11 ml-5 mr-3 ">
		<div class="card">
			<div class="card-body ">
				@include('note.alert')
				<h4 class="card-title">Sữa loại tin</h4>
				<div class="basic-form ml-5">
					@foreach($loaitin as $lt)
					<form action="admin/loaitin/dulieusua/{{$lt->Id_loaitin}}" method="POST">
						<input type="hidden" name="_method" value="PUT">
						<input type="hidden" name="_token" value="UYZ2pUvpnxytOMB3U28efT78GH7Dl9wupySLRZ0F">
						<!--  Muốn sử dụng put,delete,pacth cần phải khai báo hidden -->
						@csrf
						
						<div class="form-group ml-5">
							<div class="form-inline mb-3">
								<div class="col-lg-3">Id nhóm tin</div>
								<div class=" col-lg-9">
									<select class="form-control input-default" id="sel1" name="nhomtin">@foreach($nhomtin as $nt)
										<option value="{{$nt->Id_nhomtin}}" @if($lt->Id_nhomtin==$nt->Id_nhomtin){{'selected'}}@endif>{{$nt->Ten_nhomtin}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-inline">
								<div class="col-lg-3">Tên loại tin</div>
								<div class=" col-lg-9">
									<input type="text" name="ten" class="form-control input-default  @error('ten') is-invalid @enderror" placeholder="Tên loại tin"  value="{{$lt->Ten_loaitin}}">
									@error('ten')
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
											<input type="radio" name="Anhien" value="1" checked="checked" {{$lt->Trangthai==1?'checked':''}}>Hiện</label>
											<label class="radio-inline ">
												<input type="radio" name="Anhien" value="0" {{$lt->Trangthai==0?'checked':''}}>Ẩn</label>
											</div>
										</div>
									</div>
								@endforeach
									<div class="col-auto ml-5 mt-3">
										<button type="submit" class="btn btn-primary mb-2 ml-5">Sữa loại tin</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>@endsection