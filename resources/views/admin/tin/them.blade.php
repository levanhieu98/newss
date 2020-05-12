@extends('layouts.index')
@section('content')
<div class="row">
	<div class="col-lg-11 ml-5 mr-3 ">
		<div class="card">
			<div class="card-body ">
				{{-- @include('note.alert') --}}
				<h4 class="card-title">Thêm tin</h4>
				<div class="basic-form ml-5">
					<form action="admin/tin/dulieuthem" method="post"  enctype="multipart/form-data">
						@csrf
						
						<div class="form-group ml-5">
							<div class="form-inline mb-3">
								<div class="col-lg-3">Id loại tin</div>
								<div class=" col-lg-9">
									<select class="form-control input-default" id="sel1" name="nhomtin">
										@foreach($loaitin as $l)
										<option value="{{$l->Id_loaitin}}">{{$l->Ten_loaitin}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-inline mb-3">
								<div class="col-lg-3">Tiêu đề</div>
								<div class=" col-lg-9">
                                    <input type="text" name="tieude" class="form-control input-default  @error('tieude') is-invalid @enderror" value="{{old('tieude')}}"  style=" width:500px">
									@error('tieude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
							</div>
							<div class="form-inline mb-3">
								<div class="col-lg-3">Hình đại diện</div>
								<div class=" col-lg-9">
									<input type="file" name="hinhdaidien" class="form-control input-default  @error('hinhdaidien') is-invalid @enderror"> 
									@error('hinhdaidien')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
							</div>
							<div class="form-inline mb-3">
								<div class="col-lg-3">Mô tả</div>
								<div class=" col-lg-9">
									<textarea name="mota" rows="4" cols="60"  class="form-control input-default  @error('mota') is-invalid @enderror">{{old('mota')}}</textarea>
									@error('mota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
							</div>
							<div class="form-inline mb-3">
								<div class="col-lg-3">Nội dung</div>
								<div class=" col-lg-9">
									<textarea name="noidung" rows="4" cols="60"  class="form-control ckeditor   @error('noidung') is-invalid @enderror">{{old('noidung')}}</textarea>
									@error('noidung')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
							</div>
							<div class="form-inline mb-3">
								<div class="col-lg-3">Ngày đăng tin</div>
								<div class=" col-lg-9">
									<input type="date" name="ngaydangtin" class="form-control input-default  @error('ngaydangtin') is-invalid @enderror" value="{{old('ngaydangki')}}">
									@error('ngaydangtin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
							</div>
							<div class="form-inline">
								<div class="col-lg-3">Tác giả</div>
								<div class=" col-lg-9">
									<input type="text" name="tacgia" class="form-control input-default  @error('tacgia') is-invalid @enderror"   value="{{old('tacgia')}}">
									@error('tacgia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
							</div>
							<div class="form-inline mt-3">
								<div class="col-lg-3">Tin hot</div>
								<div class=" col-lg-9">
									<div class="form-group">
										<label class="radio-inline ml-4 mr-5">
											<input type="radio" name="tinhot" value="1" checked="checked" >Hiện</label>
											<label class="radio-inline ">
												<input type="radio" name="tinhot" value="0" >Ẩn</label>
											</div>
										</div>
									</div>
							<div class="form-inline mt-3">
								<div class="col-lg-3">Trạng thái</div>
								<div class=" col-lg-9">
									<div class="form-group">
										<label class="radio-inline ml-4 mr-5">
											<input type="radio" name="Anhien" value="1" checked="checked" >Hiện</label>
											<label class="radio-inline ">
												<input type="radio" name="Anhien" value="0" >Ẩn</label>
											</div>
										</div>
									</div>
									<div class="col-auto ml-5 mt-3">
										<button type="submit" class="btn btn-primary mb-2 ml-5">Thêm tin</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
