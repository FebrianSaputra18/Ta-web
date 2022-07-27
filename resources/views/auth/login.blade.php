@extends('layouts.auth')

@section('title', 'LOGIN')

@section('content')
<div class="container mt-5 ">
    <div class="card mb-3">
        <img src="{{ asset ('style/images/bg_title.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="col-md-7 col-sm-12">
                <div class="header">
                    <h5 class="title-header">Login dulu.</h5>
                </div>
                <form>
                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="username" class="form-control" id="username">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection