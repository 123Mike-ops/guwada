@extends('RestaurantAdmin.layout.Restaurant2')
@section('content')
<div class="page-container">
 <div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
                <div class="row">

                   <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Basic Form</strong> Elements
                                    </div>

                                    <div class="card-body card-block">
                                        <form action="{{ route('food.store',['name'=>Auth::user()->status])}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label"></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"></p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Item Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="" class="form-control">
                                                    <small class="form-text text-muted">Enter the full name of item</small>
                                                </div>
                                            </div>
                                   
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Unit Price </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input" name="unitPrice" placeholder="price" class="form-control">
                                                    <small class="help-block form-text">Price calculated as By your Restaurant's Currency</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Image Of Food</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-multiple-input" name="image" multiple="" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Category</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="category" value="modern" class="form-check-input">Modern 
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="radio2" name="category" value="traditional" class="form-check-input">Traditional
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio3" class="form-check-label ">
                                                                <input type="radio" id="radio3" name="category" value="fast served" class="form-check-input">Fast Served
                                                            </label>
                                                        </div>
                                                    </div>
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
                         </div>
                  </div>
             </div>
    </div>
</div>


      


@endsection