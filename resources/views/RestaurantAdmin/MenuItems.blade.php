@extends('RestaurantAdmin.layout.RestaurantApp')
@section('content')
<div class="page-container2">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                 
                    <div class="row" style="margin-left:0px;">
                                <div class="col-lg-9" >
                                    <div class="table-responsive table--no-card m-b-30" style="width:100%;" >
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>ID</th>
                                                    <th>name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                  
                                                    <th>Unit Price</th>

                                                    <th>Edit</th>
                                            
                                                </tr>
                                            </thead>
                                            <br />
                                            <tbody>
                                                @foreach($foods as $item)
                                                    <tr>
                                                     
                                                        <td> {{$item->id}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->description}}</td>
                                                        <td><img src="{{ asset('uploads/Food/'.$item->image)}}"height=50px width=50px;></td>
                                                     
                                                        <td>{{$item->unitPrice}}</td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                                    <i class="zmdi zmdi-mail-send"></i>
                                                                </button> --}}
                                                                <a href="" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </a>
                                                                <a href="" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </a>
                                                      
                                                             
                                                            </div>
                                                        </td>
                                                    
                                                    </tr>
                                                @endforeach
                                 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection