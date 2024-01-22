@extends('RestaurantAdmin.layout.RestaurantApp')
@section('content')

                    <div class="table-responsive table-data" style="margin-left:305px;height:100%;">
                        <table class="table" style="align-content: center;margin:0px;">
                            <thead style="background-color: rgb(0, 0, 0);color:white;">
                                <tr>
                                    <td>Ordered by</td>
                                    <td>Over All Detail</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($delivery->unique('userId') as $deliver1)
                                <tr>
                                    <td>
                                        <label>
                                        {{$deliver1->userName}}
                                        </label>
                                    </td>
                                    <td><a href="{{route('Order.DetailEach',['userId'=>$deliver1->userId,'restId'=>$deliver1->restaurantId])}}" class="btn btn-info"> All Orders</a></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
    {{-- @foreach($elivery2 as $eliver )
    {{$eliver}}
    @endforeach --}}
                    </div>
@endsection