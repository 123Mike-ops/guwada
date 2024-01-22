@extends('Guest.layout')
@section('content')

<div class="stuff-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin-top:90px;">
                <div class="heading-title text-center">
                    <h2>Your Order Cart</h2>
                    <p>Confirm Your Orders</p>
                </div>
            </div>
        </div>
       
        <div class="row">
            
            @foreach($cart as $mycart)
                    <div class="col-md-4 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                            <img height=100px src="{{asset('live-dinner/takeaway2.jpg')}}">
                            
                            </div>
                            <div class="team-content">
                                <h3 class="title">{{$mycart->name}}</h3>
                                <span class="post">{{$mycart->quantity}}</span>
                            <h3 style="color:orange;"class="post">{{$mycart->totalPrice}} Birr</h3>
                            </div>
                        </div>
                    <a href="{{route('RemoveGuest.Cart',['id'=>$mycart->id])}}"style="color:white;"class="btn btn-danger">Remove</a>
                    </div>
            @endforeach
       
        </div>
     
        
  
        <br /><br />
        <br /><br /><br /><br />  <form method="POST" action="{{route('Confirm.AllGuest',['totalPrice'=>$totalPrice,'userId'=>Auth::user()->id])}}">
                                                @csrf
        	                                     <div class="col-6">
													<div class="form-group">
											
														
                                                            <input type="hidden" name="time" value="0:00">
													
													</div>
                                                </div>
                                                <select type="hidden"name="paymentType" class="dropdown-toggle btn btn-primary" >
													<option type="button" value="Cash"  >Cash</option>
													<option type="button" value="CBE Birr" c>CBE Birr</option>
													
											
												</select>
                                             <h4>Grand Total: {{$totalPrice}}Birr </h4>
                                            <button type="submit" style="width:200px;" class="btn btn-success">Confirm</button>
                                            </form>
        
    </div>
</div>
@endsection
	