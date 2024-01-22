
@extends('RestaurantAdmin.layout.RestaurantApp')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30" style="margin-left:300px;">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-6" >
                        <div class="card" style="width:100%;">
                            
                            <div class="card-body card-block" >
                               @foreach($user as $users)
                            <form action="{{route('profile.store',['userId'=>Auth::user()->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                             @csrf
                                <p>Edit Your Profile</p><br ><hr >
                                <p></p>
                                <br ><hr >
                                <div class="card-header">
                                    <label style="font:normal;">Add Nick Name</label>
                                    <input type="text" id="text-input" name="nickname" class="form-control">
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label style="font:normal;">Age</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="age" class="form-control">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label style="font:normal;">Other Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="otheremail" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label style="font:normal;">Profile Picture</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="profileimage" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label style="font:normal;">Add Other Phone </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="otherphone" class="form-control">
                                       
                                    </div>
                                </div>
                              
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label style="font:normal;">Add Other Location</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="otherlocation" class="form-control">
        
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                             </form>
                             @endforeach
                        
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>


@endsection
