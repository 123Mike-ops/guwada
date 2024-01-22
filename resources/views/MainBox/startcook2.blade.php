
@extends('MainBox.layout.app')
@section('content')
<div class="blog-box">
    <div class="container">
        <div class="row" style="margin-top:100px;">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2></h2>
                    <p>Cook Your Meal With Best Deserve</p>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-xl-8 col-lg-8 col-12">
                <div class="blog-inner-details-page">
                    <div class="post-box-blog">
                        <div class="recent-post-box" >
                            @foreach($stages as  $stage)
                            <table>
                             
                                <tr>
                                   
                                    <td>

                                            <table width=750px font-size=30px;>
                                                <tr>
                                                    <h2>{{$stage->description}}</h2>
                                                    <td>
                                               
                                                <div class="recent-box-blog">
                                                    <div class="recent-img">
                                                        <img class="img-fluid"  alt="{{$stage->ingrident1}}"height=90px width=100px src="{{asset('uploads/RecipeStage/'.$stage->image1)}}" alt="">
                                                    </div>
                                                    <div class="recent-info">
                                                        <ul>
                                                            
                                                            <li><h3 style="color:orange;">{{$stage->ingrident1}}</h3></li>
                                                            <li>|</li>
                                                            {{-- <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li> --}}
                                                        </ul>
                                                        <h4>Ingrident Description:</h4> <span style="color:orange;">{{$stage->description}}</span>
                                                    </div>
                                                </div>
                                                <a href="{{ route('ingrident.store',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>$userId,'stageId'=>$stage->id,'ingrident'=>$stage->ingrident1])}}" class="btn btn-success  btn-sm" style="color:white;"> Use</a>
                                                
                                               </td><td>
                                                <div class="recent-box-blog">
                                                    <div class="recent-img">
                                                        <img class="img-fluid" alt="{{$stage->ingrident2}}" height=90px width=100px src="{{asset('uploads/RecipeStage/'.$stage->image2)}}" alt="">
                                                    </div>
                                                    <div class="recent-info">
                                                        <ul>
                                                            
                                                            <li><h3 style="color:orange;">{{$stage->ingrident2}}</h3></li>
                                                            <li>|</li>
                                                            {{-- <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li> --}}
                                                        </ul>
                                                        <h4>Ingrident Description:</h4><span style="color:orange;">{{$stage->description}}</span>
                                                    </div>
                                                </div>
                                                <a href="{{ route('ingrident.store',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>$userId,'stageId'=>$stage->id,'ingrident'=>$stage->ingrident2])}}" class="btn btn-success  btn-sm" style="color:white;"> Use</a>
                                                
                                                </td></tr><tr><td>
                                                    <div class="recent-box-blog">
                                                        <div class="recent-img">
                                                            <img class="img-fluid" alt="{{$stage->ingrident3}}" height=90px width=100px  src="{{asset('uploads/RecipeStage/'.$stage->image3)}}" alt="">
                                                        </div>
                                                        <div class="recent-info">
                                                            <ul>
                                                                
                                                                <li><h3 style="color:orange;">{{$stage->ingrident3}}</h3></li>
                                                                <li>|</li>
                                                                {{-- <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li> --}}
                                                            </ul>
                                                            <h4>Ingrident Description:</h4><span style="color:orange;">{{$stage->description}}</span>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('ingrident.store',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>$userId,'stageId'=>$stage->id,'ingrident'=>$stage->ingrident3])}}" class="btn btn-success  btn-sm" style="color:white;"> Use</a>
                                                    
                                                    </td>
                                                    <td>
                                        
                                                        <div class="recent-box-blog">
                                                            <div class="recent-img">
                                                                <img class="img-fluid" alt="{{$stage->ingrident4}}" height=90px width=100px  src="{{asset('uploads/RecipeStage/'.$stage->image4)}}" alt="">
                                                            </div>
                                                            <div class="recent-info">
                                                                <ul>
                                                                    
                                                                    <li><h3 style="color:orange;">{{$stage->ingrident4}}</h3></li>
                                                                    <li>|</li>
                                                                    {{-- <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li> --}}
                                                                </ul>
                                                                <h4>Ingrident Description:</h4><span >{{$stage->description}}</span>
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('ingrident.store',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>$userId,'stageId'=>$stage->id,'ingrident'=>$stage->ingrident4])}}" class="btn btn-success  btn-sm" style="color:white;">Use</a>
                                                        
                                                </td>
                                            </tr>
                                        
                                        </table> 

                                    </td>
                                    
                                  
                                  
                                </tr>
                              
                            </table><hr /><hr /><hr />
                            @endforeach
                        </div>
                    </div>
                
                </div>
            </div>

            <div  class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                <div class="right-side-blog">
                    {{-- <h3>Search</h3>
                    <div class="blog-search-form">
                        <input name="search" placeholder="Search blog" type="text">
                        <button class="search-btn">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                    <h3>Categories</h3>
                    <div class="blog-categories">
                        <ul>
                            <li><a href="#"><span>Food</span></a></li>
                            <li><a href="#"><span>Pizza</span></a></li>
                            <li><a href="#"><span>Drink</span></a></li>
                            <li><a href="#"><span>Lorem Sit</span></a></li>
                            <li><a href="#"><span>Burger</span></a></li>
                            <li><a href="#"><span>Music</span></a></li>
                        </ul>
                    </div> --}}
                    <h1>Your Orders</h1>
                    <div class="post-box-blog">
                        <div class="recent-post-box">
                        <p>Ordered By : <span>{{$user->name}}</p>
                            @foreach($selected as $select)
                                <div class="recent-box-blog" >
                                    <a href="{{route('remove.order',['id'=>$select->id,'userId'=>$select->userId])}}"type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </a>
                                
                                    <div class="recent-info">
                                       
                                        <ul>
                                            {{-- <li>{{$stage->description}} </li> --}}
                                            <h2>Stage <span style="color:orange;">{{$select->stageDesc}}</span> </h2>
                                        <h3 style="background-color:lightgreen;">{{$select->ingrident}}</h3>
                                            <li><h4>Choosed</h4></li>
                                            <h5>you choose Your best ingreident to be this</h5>
                                        </ul>
                                       
                                    </div>
                                </div>
                            @endforeach
                          
                        </div>
                    </div>
             
                    <div class="blog-tag-box">
                        <ul class="list-inline tag-list">
                            {{-- <li class="list-inline-item"><a href="#">Food</a></li>
                            <li class="list-inline-item"><a href="#">Drink</a></li>
                            <li class="list-inline-item"><a href="#">Nature</a></li>
                            <li class="list-inline-item"><a href="#">Italian</a></li>
                            <li class="list-inline-item"><a href="#">Bootstrap4</a></li>
                            <li class="list-inline-item"><a href="#">Fashion</a></li> --}}
                            <h3>Confirm All your choice in each stage that are filled with Your intereset</h3>
                            <a class="btn btn-warning" href="{{ route('delivery',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>Auth::user()->id])}}"> Delivery</a>
                            <a class="btn btn-success" href="{{ route('Reservation',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>Auth::user()->id])}}"> Reservation</a>
                         
                        </ul>
                    </div>
                </div>
            </div>
    

        
        </div>






    </div>
</div>
@endsection