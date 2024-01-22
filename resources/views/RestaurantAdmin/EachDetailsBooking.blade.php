@extends('RestaurantAdmin.layout.Restaurant2')
@section('content')
<div class="table-responsive table-data" style="margin-left:245px;width:99%;height:100%;margin-top:55px;">
    <table class="table" style="margin:0px;">
        <thead style="background-color: rgb(0, 0, 0);color:white;">
            <tr >
                {{-- <td>
                    <label>
                   Book Date
                    </label>
                </td> --}}

                <td>Item Id</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Ordered at</td>
                <td>Cooking Status</td>
                <td>Order Status</td>
                <td>payment Date</td>
                <td>Payment Type</td>
            </tr>
        </thead>
        <tbody style>
            @foreach($books as $book)
    
            <tr>
{{--         
                <td>
                    <label>
                 {{$book->bookDate}}
                    </label>
                </td> --}}
                {{-- <td>
                    <div class="table-data__info">
                        {{$book->userId}}
                        <span>
                        <a href="#"></a>
                        </span>
                    </div>
                </td> --}}
               
              
                <td>
                    <div class="table-data__info">
                        <h6>     {{$book->food_id}}</h6>
                        <span>
                            <a href="#"></a>
                        </span>
                    </div>
                </td>
                <td>
                    <div class="table-data__info">
                        <h6>     {{$book->quantity}}</h6>
                        <span>
                            <a href="#"></a>
                        </span>
                    </div>
                </td>
                <td>
                    <div class="table-data__info">
                        <h6>     {{$book->price}}</h6>
                        <span>
                            <a href="#"></a>
                        </span>
                    </div>
                </td>

                {{-- <td>
                    <div class="table-data__info">
                        <h6>     {{$book->time}}</h6>
                        <span>
                            <a href="#"></a>
                        </span>
                    </div>
                </td> --}}
                
                 {{-- <td>
                    <div class="table-data__info">
                        <h6>     {{$book->numberOfSeat}}</h6>
                        <span>
                            <a href="#"></a>
                        </span>
                    </div>
                </td> --}}
                <td>
                    <div class="table-data__info">
                        <h6>     {{$book->created_at}}</h6>
                        <span>
                            <a href="#"></a>
                        </span>
                    </div>
                </td>
                <td>
                    @if(!($book->isCooked))
                <a href="{{route('BookOrder.Detail',['restId'=>$book->restaurantId,'food_id'=>$book->food_id,'userId'=>$book->userId,'bookId'=>$book->id])}}" class="role user">Cooking....</span>
                    @else
                    <span class="btn btn-success">Finished</span>
                    @endif
                </td>
                <td>
                    @if(!($book->isServed))
                    <span class="role user">OnGoing</span>
                    @else
                    <span class="btn btn-success">Served</span>
                    @endif
                </td>

                {{-- <td>
                    <div class="table-data__info">
                        <h6>     {{$book->paymentDate}}</h6>
                        <span>
                            <a href="#"></a>
                        </span>
                    </div>
                </td>
                <td>
                    <div class="table-data__info">
                        <h6>     {{$book->paymentType}}</h6>
                        <span>
                            <a href="#"></a>
                        </span>
                    </div>
                </td> --}}
               
                
            </tr>


            @endforeach
            
        </tbody>
    </table>
</div>
@endsection