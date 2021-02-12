@extends('main')
@section('container')
<div class="container">
        <div class="row">
            <h1 class="logintitle">LOGIN</h1>
            <div class="col-md-12">
                <form role="form" action="loginpost" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">
                            Email address
                        </label>
                        <input name="email" type="email" class="form-control" id="email" />
                        {{-- @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>EMAIL SALAH</strong>
                        </span>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="password">
                            Password
                        </label>
                        <input name="password" type="password" class="form-control" id="password" />
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"/> remember me
                        </label>
                    </div> 
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </form>
            </div>
        </div>
</div>

@if(Session::get('error-email'))
<div class="alert alert-danger mt-2"> {{Session::get('error-email')}}</div>
@endif
@endsection
