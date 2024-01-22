@extends('Admin.layout.Adminapp')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
{{Session::get('success')}}
  </div>
  @endif

<div class="col-lg-6" style="margin-left:100px;">
    <div class="card">
        <div class="card-header">
            <strong>Driver</strong> Registration
        </div>
        <div class="card-body card-block">
            <form action="{{route('driver.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Elements</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static"></p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Driver Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="name" class="form-control">
                        <small class="form-text text-muted">use well known restaurant name </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Email </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control">
                        <small class="help-block form-text">Please enter your email</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Phone </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="tele"  name="phone" placeholder="Phone" class="form-control">
                        <small class="help-block form-text">Available Phone Number</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Your Password </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="email-input" name="password" class="form-control">
                       
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Address</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="address" id="text-input" name="address" placeholder="address" class="form-control">
                        <small class="form-text text-muted"> </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="selectLg" class=" form-control-label">Vehicle Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="vehicleType" id="selectLg" class="form-control-lg form-control">
                            <option value="Cash">Motor Bike</option>
                            <option value="Amole">Car</option>
                     
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label"> Driver Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file"  name="image" class="form-control-file">
                        <small class="form-text text-muted">image pixel width and height must be between 550 and 1000px </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Targa</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="targaNumber" placeholder="" class="form-control">
                        <small class="form-text text-muted"> </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Vehicle Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file"  name="vehicleimage" class="form-control-file">
                        <small class="form-text text-muted">image pixel width and height must be between 550 and 1000px </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Driving Licence</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file"  name="DrivingLicenceImage" class="form-control-file">
                        <small class="form-text text-muted">image pixel width and height must be between 550 and 1000px </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Legal Id </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file"  name="LegalIdImage" class="form-control-file">
                        <small class="form-text text-muted">image pixel width and height must be between 550 and 1000px </small>
                    </div>
                </div>

            

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
              
            </form>
        </div>
       
    </div>
 
</div>

@endsection