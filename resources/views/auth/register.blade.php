@extends('layouts.auth')

@section('title', 'REGISTER')

@section('content')
<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
    <div class="col-lg-12 mx-10">
        <div class="login-brand">
            <img src="{{ asset ('style/images/bg_title.png')}}" alt="">
        </div>

        <div class="card card-primary">
            <div class="d-flex card-header justify-content-center">
                <h4 class="title-register">Register</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="username">Username</label>
                            <input id="username" type="text"
                                class="form-control @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" autofocus>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="phone">Phone</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" autofocus>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <textarea id="address" class="form-control @error('address') is-invalid @enderror" rows="5"
                                name="address" autofocus>{{ old('address') }}</textarea>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-6 nav-item dropdown">
                            <label for="role">Role</label>
                            <!-- Lang Dropdown Link -->
                            <a class="border nav-link dropdown-toggle" for="role_id" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"
                                value="{{ old('role_id') }}">PILIH</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" name="role_id">
                                <div class="dropdown-item" href="/" onclick="btnClick('ADMIN')">ADMIN </div>
                                <!-- Lang Dropdown Choice -->
                                <div class="dropdown-item" href="#" onclick="btnClick('SUPPLIER')">SUPPLIER </div>
                                <!-- Lang Dropdown Choice -->
                                <div class="dropdown-item" href="#" onclick="btnClick('SALES')">SALES </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="password" class="d-block">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror pwstrength"
                                data-indicator="pwindicator" name="password">
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="password2" class="d-block">Password Confirmation</label>
                            <input id="password2" type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                            <label class="custom-control-label" for="agree">I agree with the terms and
                                conditions</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5 text-muted text-center">
            Already an account? <a href="{{ route('login') }}">Login</a>
        </div>
        <div class="simple-footer">
            Copyright &copy; SIAS-MAHMUDA {{ date('Y') }}
        </div>
    </div>
</div>
@endsection