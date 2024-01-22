@extends('Guest.Layout')
@section('content')
    @if($message)
        {{$message}}
        <a href="{{route('GuestOrderCook',['food_id'=>$food_id,'restId'=>1,'typeId'=>0,'userId'=>Auth::user()->id])}}" class="btn btn-warning" style="color:white;">Simply Order Default</a>
    @endif
@if(!$message)
<hr />
  <div>

  <a href="{{route('GuestOrderCook',['food_id'=>$food_id,'restId'=>1,'typeId'=>0,'userId'=>Auth::user()->id])}}" class="btn btn-warning" style="color:white;">Simply Order Default</a>
  
</div>
  <div> <p>Here with Varties</p></div>
  <hr >
  <div style="margin-left:0px;" class="content"> 

    
                            @foreach($foodType as $foodtype)
                        
                                <div>
                                        <div class="recent-box-blog">
                                            <div class="recent-img">
                                                <img class="img-fluid"  alt="{{$foodtype->name}}"height=300px width=300px src="{{asset('uploads/FoodType/'.$foodtype->image)}}" alt="">
                                            </div>
                                            <div class="recent-info">
                                                <ul>
                                                    
                                                    <li><h3 style="color:orange;">{{$foodtype->name}}</h3></li>
                                                
                                    
                                                </ul>
                                                <h4> Description:</h4> <span style="color:orange;">{{$foodtype->description}}</span>
                                            </div>
                                        </div>
                                    <a href="{{route('panGuest',['food_id'=>$food_id,'restId'=>1,'typeId'=>$foodtype->id,'userId'=>$userId])}}" class="btn btn-warning">Get</a> 
                                </div> 
                            <br />
                            @endforeach
        
  </div>
          
@endif
@endsection