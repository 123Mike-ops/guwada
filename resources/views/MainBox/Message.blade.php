
@extends('MainBox.layout.app')
@section('content')


<div class="col-xl-8 col-lg-8 col-12">
    <div class="blog-inner-details-page">
        <div class="blog-inner-box">
        
        <div class="comment-respond-box">
            <h3>Leave your Message before went Out</h3>
            <div class="comment-respond-form">
            <form action="{{route('send.message',['restId'=>$restId,'userId'=>Auth::user()->id])}}"  method="POST"> 
                    @csrf
                <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input id="name_com" class="form-control" name="name" placeholder="Name" type="text">
                        </div>
                        {{-- <div class="form-group">
                            <input id="email_com" class="form-control" name="email" placeholder="Your Email" type="email">
                        </div> --}}
                </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="textarea_com" placeholder="Your Message" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <button type="submit" class="btn btn-submit">Send Message</button>
                    </div>

            </form>
            </div>
        </div>
    </div>
</div>
@endsection