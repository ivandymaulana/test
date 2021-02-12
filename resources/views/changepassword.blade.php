@extends('navbar');
@section('container');
<div class="changepass">
    <div class="row">
        <h1 class="changepasstitle">Change Password</h1>
        <div class="col-md-12">
            <div class="col-md-12">
                <form role="form" action="changepasspost" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="password">
                            Password
                        </label>
                        <input name="password" type="password" class="form-control" id="password" />
                    </div>
                    <div class="form-group">
                        <label for="password">
                            New Password
                        </label>
                        <input name="newpassword" type="password" class="form-control" id="newpassword" />
                    </div>
                    <div class="form-group">
                        <label for="password">
                            Confirm Password
                        </label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmnewpassword"/>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Change Password
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

    
@endsection
