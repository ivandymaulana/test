@extends('main')
@section('container')
<div class="containerRegist">
        <div class="row">
            <h1 class="registertitle">REGISTER</h1>
            <div class="col-md-12">
                <div class="col-md-12">
                    <form role="form" action="registerpost" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">
                                Username
                            </label>
                            <input name="username" type="text" class="form-control" id="username" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email
                            </label>
                            <input name="email" type="email" class="form-control" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">
                                Password
                            </label>
                            <input name="password" type="password" class="form-control" id="password" />
                        </div>
                        <div class="form-group">
                            <label for="password">
                                Confirm Password
                            </label>
                            <input type="password" class="form-control" id="confirmPassword" />
                        </div>
                          <div class="form-group">
                              <label for="gender">
                                  Gender
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                    <label class="form-check-label" for="gender1">
                                      Male
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="gender2">
                                      Female
                                    </label>
                                  </div>
                              </label>    
                          </div>
                        <div class="form-group">
                            <label for="dob">
                                Date of Birth
                            </label>
                            <input name="dob" type="text" class="form-control" id="dob" placeholder="dd/mm/yy"/>
                        </div>
                        <div class="form-group">
                            <label for="address">
                                Address
                            </label>
                            <input name="address" type="text" class="form-control" id="address" />
                        </div> 
                        <button type="submit" class="btn btn-primary">
                            REGISTER
                        </button>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection