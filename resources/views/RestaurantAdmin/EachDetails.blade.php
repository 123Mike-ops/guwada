@extends('RestaurantAdmin.layout.RestaurantApp')
@section('content')

                    <div class="table-responsive table-data" style="margin-left:310px;height:100%;padding:0px;">
                        <table class="table" border=0.5 style="align-content: center;margin:0px;">
                            <thead style="background-color: rgb(0, 0, 0);color:white;">
                                <tr>
                                   
                                     <td>Item Id</td> 
                                    <td>Quantity</td> 
                                    <td>Price</td> 
                                    <td>Need to Arrive At</td> 
                                    <td>Ordered at</td>
                                    <td>Deliverd By </td>
                                    <td>Cooking Status</td>
                                    <td>Over All Detail</td>
                                    <td>Delivery Status</td>
                                    <td>payment Date</td>
                                    <td>Payment Type</td> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    
                              
                                    {{-- <td><a href="{{route('Order.DetailEach',['restId'=>$deliver1->restaurantId,'foodId'=>$deliver1->foodId,'created_at'=>$deliver1->created_at,'userId'=>$deliver1->userId])}}" class="btn btn-info">Order Detail</a></td> --}}
                                        
                                        <td>
                                            <label class="btn btn-secondary btn-sm">
                                            {{$order->foodId}}
                                            </label>
                                        </td>                                     
                                        <td>
                                            <label>
                                            {{$order->quantity}}
                                            </label>
                                        </td>
                              
                                    
                                        <td>
                                            <label>
                                            {{$order->price}}
                                            </label>
                                        </td> 
                                        
                                    
                                        <td>
                                            <label>
                                            {{$order->time}}
                                            </label>
                                        </td>
                                        
                                    
                                        <td>
                                            <label>
                                            {{$order->created_at}}
                                            </label>
                                        </td>
                                        <td>
                                            @if(!($order->deliveryManId))

                                            <a type="button" class=" btn btn-warning btn-sm"  href="{{route('Assign.Driver',['mydeliveryid'=>$order->id])}}">Assign</a>
                
                                            @elseif(!($order->isDeliverd))

                                            <a style="color:white;" class="role user">{{$order->deliveryManId}}</a>
                                            @else
                                            <p class="btn btn-success btn-sm">Delivery Completed</p>
                                            @endif

                                        </td>
                                         
                                        <td>
                                            @if(!($order->isCooked))
                                            <a href="{{route('Order.Detail',['restId'=>$order->restaurantId,'foodId'=>$order->foodId,'created_at'=>$order->created_at,'userId'=>$order->userId])}}" class="btn btn-info btn-sm">Cooking...</span>
                                            @else
                                            <span class="btn btn-success btn-sm">Finished</span>
                                            @endif
                                        </td> 
                                        <td><a href="{{route('Order.Detail',['restId'=>$order->restaurantId,'foodId'=>$order->foodId,'created_at'=>$order->created_at,'userId'=>$order->userId])}}" class="btn btn-info btn-sm">Detail</span></td> 
                                    


                                
                                        <td>
                                            @if(!($order->isDeliverd))
                                            <a href="#" class="btn btn-info btn-sm">On the way</span>
                                            @else
                                            <span class="btn btn-success btn-sm">Deliverd</span>
                                            @endif


                                        </td>

                                        <td>
                                            <label>
                                            {{$order->paymentDate}}
                                            </label>
                                        </td> 

                                        <td>
                                            <label>
                                            {{$order->paymentType}}
                                            </label>
                                        </td> 
                                        
                                
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
    {{-- @foreach($elivery2 as $eliver )
    {{$eliver}}
    @endforeach --}}
                    </div>
@endsection