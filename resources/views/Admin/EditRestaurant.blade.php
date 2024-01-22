@extends('Admin.layout.Adminapp')
@section('content')
    

<div class="col-lg-6" style="margin-left:100px;">
    <div class="card">
        <div class="card-header">
            <strong>update</strong> Resetaurant
        </div>
       
     <div class="card-body card-block">
           @foreach($myrestaurant as $restaurants)
            <form action="{{ route('restaurant.update',['id'=>$restaurants->id ] ) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                        <input type="text" id="text-input" name="name" value="{{$restaurants->name}}"placeholder="name" class="form-control">
                        <small class="form-text text-muted">use well known restaurant name </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Email </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="email-input"  value="{{$restaurants->email}}"name="email" placeholder="Enter Email" class="form-control">
                        <small class="help-block form-text">Please enter your email</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Phone </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="tele" id="email-input"  value="{{$restaurants->phone}}" name="phone" placeholder="Phone" class="form-control">
                        <small class="help-block form-text">Available Phone Number</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Address</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="address" id="text-input"  value="{{$restaurants->address}}"name="address" placeholder="address" class="form-control">
                        <small class="form-text text-muted"> </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Longtude</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input"  value="{{$restaurants->longtude}}"name="longtude" placeholder="" class="form-control">
                        <small class="form-text text-muted"> </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Latitude</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" value="{{$restaurants->latitude}}" name="latitude" placeholder="" class="form-control">
                        <small class="form-text text-muted"> </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="textarea-input" value="{{$restaurants->description}}" rows="5" placeholder="Content..." class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="selectSm" class=" form-control-label">Currency</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="currency"value="{{$restaurants->currency}}" id="SelectLm" class="form-control-sm form-control">
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
                        <input type="text" id="password-input" value="{{$restaurants->approximateDeliveryTime}}" name="approximateDeliveryTime" placeholder=" Hour:Min:sec" class="form-control">
                        <small class="help-block form-text">Please enter aproximate Delivery Time</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">Price Per Km.</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="password-input"value="{{$restaurants->pricePerKm}}" name="pricePerKm" placeholder=" " class="form-control">
                        <small class="help-block form-text"></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Minimum Order Price</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="minOrderPrice"value="{{$restaurants->minOrderPrice}}"  placeholder="" class="form-control">
                        <small class="form-text text-muted">use well known restaurant name </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Minimum Order Amount</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="minOrderAmount"value="{{$restaurants->minOrderAmount}}" placeholder="" class="form-control">
                        <small class="form-text text-muted">use well known restaurant name </small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="selectLg" class=" form-control-label">Charge Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="chargeType" value="{{$restaurants->chargeType}}" id="selectLg" class="form-control-lg form-control">
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
                        <input type="file"  name="image"  value="{{$restaurants->image}}" class="form-control-file">
                        <small class="form-text text-muted">image pixel width and height must be between 550 and 1000px </small>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                  
                </div>
             
                @endforeach
            </form>
  
   </div>
       
       
</div>



@endsection