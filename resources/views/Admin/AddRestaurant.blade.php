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
            <strong>Restaurant</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="{{route('restaurant.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                        <label for="text-input" class=" form-control-label">Restaurant Name</label>
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
                        <input type="tele" id="email-input" name="phone" placeholder="Phone" class="form-control">
                        <small class="help-block form-text">Available Phone Number</small>
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
                        <label for="text-input" class=" form-control-label">Longtude</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="longtude" placeholder="" class="form-control">
                        <small class="form-text text-muted"> </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Latitude</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="latitude" placeholder="" class="form-control">
                        <small class="form-text text-muted"> </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">List your Current Menus</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="selectSm" class=" form-control-label">Currency</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="currency" id="SelectLm" class="form-control-sm form-control">
                            <option value="Birr">Birr</option>
                            <option value=" US Dollar">US Dollar</option>
                            <option value="2">Pound</option>
                            <option value="3">Dirham</option>
                          
                        </select>
                    </div>
                </div>
                    
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">Delivery Time</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="password-input" name="approximateDeliveryTime" placeholder=" Hour:Min:sec" class="form-control">
                        <small class="help-block form-text">Please enter aproximate Delivery Time</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">Price Per Km.</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="password-input" name="pricePerKm" placeholder=" " class="form-control">
                        <small class="help-block form-text"></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Minimum Order Price</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="minOrderPrice" placeholder="" class="form-control">
                        <small class="form-text text-muted">use well known restaurant name </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Minimum Order Amount</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="minOrderAmount" placeholder="" class="form-control">
                        <small class="form-text text-muted">use well known restaurant name </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="selectLg" class=" form-control-label">Charge Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="chargeType" id="selectLg" class="form-control-lg form-control">
                            <option value="Cash">Cash</option>
                            <option value="Amole">Amole</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file"  name="image" class="form-control-file">
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
    {{-- <div class="card">
        <div class="card-header">
            <strong>Inline</strong> Form
        </div>
        <div class="card-body card-block">
            <form action="" method="post" class="form-inline">
                <div class="form-group">
                    <label for="exampleInputName2" class="pr-1  form-control-label">Name</label>
                    <input type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2" class="px-1  form-control-label">Email</label>
                    <input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </div> --}}
</div>

@endsection