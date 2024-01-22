@extends('RestaurantAdmin.layout.Restaurant2')
@section('content')
<div class="main-content">
    <div class="container-fluid">
            <div class="row">

                        <div class="col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h3>Customer  Overview</h3>
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
                                                    <th>Customer</th>
                                                    <td>Email</td>
                                                    <td>Phone</td>
                                                    <td>Status</td>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($customers as $customer)
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            
                                                            <div class="d-inline-block">
                                                                <h6>{{$customer->name}}</h6>
                                                                
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$customer->email}}</td>
                                                    <td>{{$customer->phone}}</td>
                                                    {{-- <td>19-11-2018</td> --}}
                                                    <td>
                                                        <label class="badge badge-primary">indoor</label>
                                                       
                                                    </td>
                                                    <td><a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a><a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a></td>
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