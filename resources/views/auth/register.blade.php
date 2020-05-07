@extends('layouts.auth')
@section('content')
<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">

                            <a class="text-center" href="index.html"> <h4>Thông tin đăng ký</h4></a>       
                            <form class="mt-5 mb-5 login-input" method="POST" action="/register">
                             @csrf
                             <div class="form-group">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Tên quản trị"  autocomplete="name" value="{{ old('name') }}">

                              @error('name')
                              <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email"   placeholder="Email" oninvalid="this.setCustomValidity('Email không hợp lệ')"
                            oninput="this.setCustomValidity('')">

                            @error('email')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password" >

                            @error('password')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Password-confirm" >
                        </div>
                        <button class="btn login-form__btn submit w-100">Đăng ký</button>
                    </form>

                </p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
