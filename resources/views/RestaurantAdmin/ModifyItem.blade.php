@extends('RestaurantAdmin.layout.Restaurant2')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30" style="margin-left:100px;width:140%; ">
        <div class="container-fluid" >
            <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Select</strong> Your Food in your restaurant And Modify it
                            </div>
                            <div class="card-body card-block">
                                 
                            <form  action="{{route('modifyitem.addtype',['name'=>$restaurant,'number'=>0])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf  
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="selectSm" class=" form-control-label"style="font-style: normal;">Food</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="foods" id="SelectLm" class="form-control-sm form-control">
                                            @foreach($foods as $food)
                                        <option value="{{$food->id}}">{{$food->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <p>Add the Types for selected food</p><br >
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label >Enter Type </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="type1" class="form-control">
                                        <small class="form-text text-muted">type</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label >description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label >Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="image" class="form-control-file">
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
