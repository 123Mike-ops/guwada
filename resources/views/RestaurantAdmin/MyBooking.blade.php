@extends('RestaurantAdmin.layout.Restaurant2')
@section('content')
<div class="table-responsive table-data" style="margin-left:244px;width:99%;height:100%;margin-top:50px;">
    <table class="table" style="margin:0px;">
        <thead style="background-color: rgb(0, 0, 0);color:white;">
            <tr >
                <td>Ordered By </td>
                 <td>All Book Orders</td>
            </tr>
        </thead>
        <tbody style>
            @foreach($booklist->unique('userId') as $book)
            <tr>
        
               
                <td>
                    <div class="table-data__info">
                        {{$book->userName}}
                        <span>
                        <a href="#"></a>
                        </span>
                    </div>

                </td>
                <td><a href="{{route('BookOrder.DetailEach',['userId'=>$book->userId,'restId'=>$book->restaurantId])}}" class="btn btn-info">Show</a></td>
               
              
         
               
                
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection