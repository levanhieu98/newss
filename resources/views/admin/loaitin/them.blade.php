@extends('layouts.index')
@section('content')
<div class="row">
	<div class="col-lg-11 ml-5 mr-3 ">
		<div class="card">
			<div class="card-body ">
				@include('note.alert')
				<h4 class="card-title">Thêm loại tin</h4>
				<div class="basic-form ml-5">
					<form action="admin/loaitin/dulieuthem" method="POST">
						@csrf
						<div class="form-group ml-5">
							<div class="form-inline mb-3">
								<div class="col-lg-3">Id nhóm tin</div>
								<div class=" col-lg-9">
									<select class="form-control input-default" id="sel1" name="nhomtin">@foreach($nhomtin as $nt)
										<option value="{{$nt->Id_nhomtin}}">{{$nt->Ten_nhomtin}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-inline">
								<div class="col-lg-3">Tên loại tin</div>
								<div class=" col-lg-9">
									<input type="text" name="ten" class="form-control input-default  @error('ten') is-invalid @enderror" placeholder="Tên loại tin"  value="{{old('ten')}}">
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
											<input type="radio" name="Anhien" value="1" checked="checked">Hiện</label>
											<label class="radio-inline ">
												<input type="radio" name="Anhien" value="0">Ẩn</label>
											</div>
										</div>
									</div>
									<div class="col-auto ml-5 mt-3">
										<button type="submit" class="btn btn-primary mb-2 ml-5">Thêm loại tin</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>@endsection