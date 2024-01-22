{{-- 

 


 --}}

 @extends('RestaurantAdmin.layout.RestaurantApp')
 @section('content')
            <div class="main-content">
              <div class="section__content section__content--p30">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-lg-9">
                              <div class="table-responsive table--no-card m-b-30" style="margin-left:300px;">
                                  <table class="table table-borderless table-striped table-earning" >
                                      <thead>
                                          <tr>
                                            @if(!$type)
                                              <th  class="text-center">Order ID</th>
                                              <th class="text-center">Name</th>
                                              <th  class="text-center">Looks</th>
                                              <th  class="text-center">Description</th>
                                            <th></th>
                                            @endif
                                                @if($type)
                                             
                                            <th class="text-center">Order Id</th>
                                            <th class="text-center">Name</th>
                                              <th class="text-center">Type</th>
                                              <th class="text-center">image</th>
                                              <th class="text-center">Ingrident</th>
                                              <th></th>
                                                @endif
                                          </tr>
                                      </thead>
                                      <tbody>
                                                    <tr>
                                                        @if(!$type)
                                                        <td class="text-center">{{$orderId}}</td>
                                                        @foreach($items as $item)
                                                             <td class="text-center">{{$item->name}}</td>
                                                             <td class="text-center"><img src="{{ asset('uploads/Food/'.$item->image)}}" style="height:50px;"class="img-fluid" alt="Image"></td>
                                                             <td class="text-center">{{$item->description}}</td>
                                                             <td class="text-center"><a class="btn btn-primary" href="{{route('check.cook',['typeId'=>0,'userId'=>$userId,'foodId'=>$item->id,'created_at'=>$created_at])}}"style="color:white;">Finish Task</a></td>
                                                        @endforeach
                                                        @endif
                                                @if($type)
                                                    <td class="text-center">{{$orderId}}</td>
                                                    @foreach($items as $item)
                                                        <td class="text-center">{{$item->name}}</td>
                                                    @endforeach
                                                        @foreach($type as $types)
                                                    <td class="text-center">{{$types->name}}</td>
                                                    <td class="text-center"><img src="{{ asset('uploads/FoodType/'.$types->image)}}" style="height:50px;"class="img-fluid" alt="Image"></td>
                                                    
                                                         @endforeach 
                                                        <td class="text-center">
                                                                <table>
                                                                    @foreach($selectedIngridents as $selectedIngrident)
                                                                
                                                                    <tr>
                                                                    
                                                                    <td style="color:orange;" class="text-center">{{$selectedIngrident['stageDesc']}}</td>
                                                                
                
                                                                    <td class="text-center">{{$selectedIngrident['ingrident']}} </td>
                                                                    </tr>

                                                                    
                                                                    @endforeach
                                                    
                        
                                                                </table>
                                                            </td>
                                                            <td class="text-center"><a class="btn btn-primary" href="{{route('check.cook',['typeId'=>$types->id,'userId'=>$userId,'foodId'=>$types->foodid,'created_at'=>$created_at])}}"style="color:white;">Finish Task</a></td>
                                                           
                                                     
                                                       
                                               @endif

                                                    </tr>
                                                    
                                  
                                       
                                      </tbody>
                                  </table>
                               
                                  
                               
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
@endsection


