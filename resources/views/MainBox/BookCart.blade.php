@extends('MainBox.layout.app')
@section('content')


<div class="stuff-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin-top:90px;">
                <div class="heading-title text-center">
                    <h2>Your Reservation Cart</h2>
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
        <br /><br /><br /><br />  <form method="POST" action="{{route('Confirm.AllBook',['totalPrice'=>$totalPrice,'userId'=>Auth::user()->id])}}">
                                                @csrf
                                                <div class="col-md-6">
                                                    <h3>Book a table</h3>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input id="input_date" name="bookDate" class="datepicker picker__input form-control"  type="text" value="" equired data-error="Please enter Date">
                                                            <div class="help-block with-errors"></div>
                                                        </div>                                 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input id="input_time" name="time" class="time form-control picker__input" required data-error="Please enter time">
                                                            <div class="help-block with-errors"></div>
                                                        </div>                                 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select class="custom-select d-block form-control" name="numberOfSeat" id="person" required data-error="Please select Person">
                                                              <option disabled selected>Select Person*</option>
                                                              <option value="1">1</option>
                                                              <option value="2">2</option>
                                                              <option value="3">3</option>
                                                              <option value="4">4</option>
                                                              <option value="5">5</option>
                                                              <option value="6">6</option>
                                                              <option value="7">7</option>
                                                            </select>
                                                            <div class="help-block with-errors"></div>
                                                        </div> 
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