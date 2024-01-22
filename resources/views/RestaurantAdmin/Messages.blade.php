@extends('RestaurantAdmin.layout.RestaurantApp')
@section('content')
<div class="col-lg-6" style="margin-left:400px;margin-top:70px;">
    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
        <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
            <div class="bg-overlay bg-overlay--blue"></div>
            <h3>
                <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
            <button class="au-btn-plus">
                <i class="zmdi zmdi-plus"></i>
            </button>
        </div>
        
        <div class="au-inbox-wrap js-inbox-wrap">
           
            <div class="au-message js-list-load">
                <div class="au-message__noti">
                    <p>You Have
                        <span>2</span>

                        new messages
                    </p>
                </div>
             
                <div class="au-message-list">
                    <div class="au-message__item unread">
                        @foreach($messages as $message)
                                <div class="au-message__item-inner">
                                    <div class="au-message__item-text">
                                        <div class="avatar-wrap">
                                            <div class="avatar">
                                                <img src="{{asset('Admin/images/icon/avatar-02.jpg')}}" alt="John Smith">
                                            </div>
                                        </div>
                                      
                                        <div class="text">
                                        <h5 class="name">{{$message->name}}</h5>
                                            <p>Have sent a message</p>
                                        </div>
                                        
                                    </div>
                                    <div class="au-message__item-time">
                                        <span>12 Min ago</span><br /><a style="color:white;"class="btn btn-primary">Read </a>
                                    </div>
                                </div>
                                @endforeach
                                
                    </div>
                 
                </div>
              
                <div class="au-message__footer">
                    <button class="au-btn au-btn-load js-load-btn">load more</button>
                </div>
            </div>
          
            <div class="au-chat">
               
                <div class="au-chat__title">
                  
                    <div class="au-chat-info">
                       
                        <div class="avatar-wrap online">
                            <div class="avatar avatar--small">
                                <img src="{{asset('Admin/images/icon/avatar-02.jpg')}}" alt="John Smith">
                            </div>
                        </div>
                        <span class="nick">
                            <a href="#">{{$message->name}}</a>
                        </span>
                       
                    </div>
                   
                </div>
                <div class="au-chat__content">
                   
                    <div class="recei-mess-wrap">
                        <span class="mess-time">12 Min ago</span>
                        <div class="recei-mess__inner">
                            <div class="avatar avatar--tiny">
                                <img src="{{asset('Admin/images/icon/avatar-02.jpg')}}" alt="John Smith">
                            </div>
                            <div class="recei-mess-list">
                                <div class="recei-mess">{{$message->message}}</div>
                                {{-- <div class="recei-mess">Donec tempor, sapien ac viverra</div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="send-mess-wrap">
                        <span class="mess-time">30 Sec ago</span>
                        <div class="send-mess__inner">
                            <div class="send-mess-list">
                                {{-- <div class="send-mess"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="au-chat-textfield">
                    <form class="au-form-icon">
                        <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                        <button class="au-input-icon">
                            <i class="zmdi zmdi-camera"></i>
                        </button>
                    </form>
                </div>
            </div>
         
        </div>
       
    </div>
</div>
    
@endsection