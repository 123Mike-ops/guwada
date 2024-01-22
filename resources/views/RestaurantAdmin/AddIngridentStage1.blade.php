
@extends('RestaurantAdmin.layout.RestaurantApp')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30" style="margin-left:300px;">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-6" >
                        <div class="card" style="width:160%;">
                            
                            <div class="card-body card-block" >
                               
                            <form action="{{route('AddIngridentStage1.store',['foodid'=>$foodid,'restaurantid'=>$restaurantid,'typeid'=>$typeid,'number'=>$number])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                             @csrf
                                <p>Add the Ingridents for inserted type using 4 stages</p><br ><hr >
                                <p>Stage {{$number}}</p>
                                <br ><hr >
                                <div class="card-header">
                                    <label>Enter Your Stage Description less than 5 words</label>
                                    <input type="text" id="text-input" name="description" class="form-control">
                                </div><br  >

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label >Ingrident 1 </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="ingrident1" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <small style="font:normal;">Image for ingrident 1</small>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="image1" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label>Ingrident 2 </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="ingrident2" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <small>Image for ingrident 2</small>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="image2" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label >Ingrident 3 </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="ingrident3" class="form-control">
                                    
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <small>Image for ingrident 3</small>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="image3" class="form-control-file">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label>Ingrident 4</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="ingrident4" class="form-control">
                                      
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <small >Image for ingrident 4</small>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="image4" class="form-control-file">
                                    </div>
                                </div>

                                <hr  >
                                
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-sm">
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
            </div>
        </div>
    </div>
</div>


@endsection
