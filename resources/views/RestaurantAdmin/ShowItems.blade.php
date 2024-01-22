@extends('RestaurantAdmin.layout.Restaurant2')
@section('content')
<div class="main-content">
    <div class="container-fluid">
            <div class="row">
                        <div class="col-xl-8 col-md-6">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h3>Our Products</h3>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                            <li><i class="ik ik-minus minimize-card"></i></li>
                                            <li><i class="ik ik-x close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product Id</th>
                                                    <th>Product Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Unit Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($items as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->description}}</td>
                                                    <td><img src="{{ asset('uploads/Food/'.$item->image)}}" alt="" class="img-fluid img-20"></td>
                                                    <td>
                                                        <div class="p-status bg-green"></div>
                                                    </td>
                                                    <td>{{$item->unitPrice}}</td>
                                                    <td>
                                                        <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                                        <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
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