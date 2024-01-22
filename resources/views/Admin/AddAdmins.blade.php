@extends('Admin.layout.Adminapp')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Asign as Admin') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('Add.Admin') }}">
                        @csrf

                  

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Enter User\'s Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="selectSm" class=" form-control-label">Admin as</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="AdminAs" id="Select" class="form-control-sm form-control">
                                    <option value="restaurants">Restaurant</option>
                                    <option value="bars">Bar</option>
                                    
                                
                                </select>
                            </div>
                        </div>
             
               


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Next') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">
              
    <div class="login-wrap">
        <div class="login-content">
            <p>Add Bar Or Restaurant Admin</p>
            <div class="login-logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="CoolAdmin">
                </a>
            </div>
            <div class="login-form">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    </div>
                   
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="selectSm" class=" form-control-label">Admin as</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                <option value="0">Restaurant</option>
                                <option value="1">Bar</option>
                            
                            </select>
                        </div>
                    </div>
                    <div class="login-checkbox">
                        <label>
                            <input type="checkbox" name="aggree">Agree 
                        </label>
                    </div>
                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
              
                </form>
             
            </div>
        </div>
    </div>
</div> --}}
    
@endsection