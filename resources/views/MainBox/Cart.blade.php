@extends('MainBox.layout.app')
@section('content')


<div class="stuff-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin-top:90px;">
                <div class="heading-title text-center">
                    <h2>Your Delivery Cart</h2>
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
                                </span><span style="color:orange;"class="post">{{$mycart->totalPrice}} <h3>Birr</h3></span>
                            </div>
                        </div>
                    <a href="{{route('remove.cart',['id'=>$mycart->id])}}"style="color:white;"class="btn btn-danger">Remove</a>
                    </div>
            @endforeach
       
        </div>
     
        
  
        <br /><br />
        <br /><br /><br /><br />  <form method="POST" action="{{route('Confirm.All',['totalPrice'=>$totalPrice,'userId'=>Auth::user()->id])}}">
                                                @csrf
        	                                     <div class="col-6">
													<div class="form-group">
														<label for="cc-exp" class="control-label mb-1">Reach Me at</label>
														<input id="cc-exp" name="time" type="time" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
															data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
															autocomplete="cc-exp">
														<span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true">Oclock</span>
													</div>
                                                </div>
                                                <select name="paymentType" class="dropdown-toggle btn btn-primary" >
													<option type="button" value="Cash" >Cash</option>
													<option type="button" value="CBE Birr" c>CBE Birr</option>
													
											
												</select>
                                             <h2>Grand Total: {{$totalPrice}}Birr </h2>
                                            <button type="submit" class="btn btn-success" class="btn btn-success">Confirm</button>
                                            </form>
        
    </div>
</div>
@endsection