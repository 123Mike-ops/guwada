<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Restaurant;
use DB;
use Str;
use Carbon\Carbon;
use App\Type;
use App\User;
use App\Booking;
use App\Deliveries;
use OrderConfirmation;
use App\Profile;
use App\Order;
use Redirect;

use Illuminate\Support\Facades\Auth;


class RestaurantAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function  __construct(){

        $this->middleware('RestaurantAdmin');

     }
     
    public function index()
    {
        $restname=Auth::user()->status;
        $userId=Auth::user()->id;
      
        $restId=DB::table('restaurants')->where('name',$restname)->value('id');


        $OrdersLastWeek = Deliveries::select('created_at')
        ->where('created_at', '>', now()->subWeek()->startOfWeek())
        ->where('created_at', '<', now()->subWeek()->endOfWeek())
        ->where('restaurantId',$restId)
        ->count();
        $BookingLastWeek = Booking::select('created_at')
        ->where('created_at', '>', now()->subWeek()->startOfWeek())
        ->where('created_at', '<', now()->subWeek()->endOfWeek())
        ->where('restaurantId',$restId)
        ->count();
        $OrderPriceLastWeek = Deliveries::select('created_at')
        ->where('created_at', '>', now()->subWeek()->startOfWeek())
        ->where('created_at', '<', now()->subWeek()->endOfWeek())
        ->where('restaurantId',$restId)
        ->sum('price');
        $BookingPriceLastWeek = Booking::select('created_at')
        ->where('created_at', '>', now()->subWeek()->startOfWeek())
        ->where('created_at', '<', now()->subWeek()->endOfWeek())
        ->where('restaurantId',$restId)
        ->sum('price');

       $totalOrders=$OrdersLastWeek+$BookingLastWeek;
       $totalPrice= $OrderPriceLastWeek+ $BookingPriceLastWeek;

        $restId=DB::table('restaurants')->where('name',$restname)->value('id');
        $NumOfCustomers=DB::table('customers')->where('restaurantId',$restId)->count();
        $Customers=DB::table('customers')->where('restaurantId',$restId)->get();

        $currency=DB::table('restaurants')->where('id',$restId)->value('currency');


        return view ('RestaurantAdmin.dashboard')->with('NumOfCustomer',$NumOfCustomers)->with('restname',$restname)
        ->with('totalOrders',$totalOrders)->with('totalPrice',$totalPrice)->with('currency',$currency)->with('Customer',$Customers);
        
    }
    
    // public function __construct(){
    //     middleware('RestaurantAdmin');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('RestaurantAdmin.FoodCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($name,Request $request)
    {
        $RestaurantName=$name;
        $image = $request->file('image');
        $slug = Str::slug($request->name);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
 
            if (!file_exists('uploads/Food')) {
                mkdir('uploads/Food', 0777, true);
            }
            $image->move('uploads/Food', $imagename);
        } else {
            $imagename = "default.png";
        }
 
        $food=new Food;


        
       $food->name=$request->name;
       
       $food->description=$request->description;
       $food->unitPrice=$request->unitPrice;
       $food->image=$imagename;

       $food->restaurant=$RestaurantName;
       $food->category=$request->category;

       $food->save();

       
       return redirect()->route('dashboard.foodcreate');




        
    }
    public function OrderStarted($id){
        DB::table('orders')->where('id',$id)->update(array('orderStarted' => 1));
        return redirect()->back();
    }
    public function mybookingshow($name ,$userid ,Request $request)

    {
        

     
        

        $restid=DB::table('restaurants')->where('name',$name)->value('id');

        $book=DB::table('bookings')->where('restaurantId',$restid)->orderBy('created_at', 'desc')->get();

        // $user=User::find($book->userId);
        return view ('RestaurantAdmin.MyBooking')->with('booklist',$book);

    }
    public function mydeliveryshow($name ,$userid ,Request $request,Deliveries $delivery){

        $restid=DB::table('restaurants')->select('id')->where('name',$name)->value('id');

        $deliverys=DB::table('deliveries')->where('restaurantId',$restid)->orderBy('created_at', 'desc')->get();
        
        // $users = Deliveries::with('users')->get();
        // $date=Carbon::create($year, $month, $day, $hour);
        // $delivery2=DB::table('deliveries')->groupBy('userId')->get();

       
      
        return view ('RestaurantAdmin.mydelivery')->with('delivery',$deliverys);

    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $RestaurantName=$name;

        $items = DB::table('food')->where('restaurant', $RestaurantName)->get();

        return view('RestaurantAdmin.ShowItems')->with('items',$items);
        
    }
    public function menushow($name){
        $foods = DB::table('food')->where('restaurant', $name)->get();

        return view('RestaurantAdmin.MenuItems')->with('foods',$foods);
        
    } 
    public function customershow($name){
        
        $restId=DB::table('restaurants')->select('id')->where('name', $name)->value('id');

        
        $customers = DB::table('customers')->where('restaurantId', $restId)->get();
        

        return view('RestaurantAdmin.CustomerShow')->with('customers',$customers);
        
    } 

    
   public function mykitchenshow($name){
  
    // $RestaurantName=$name;

    // $foods = DB::table('food')->where('restaurant',$name)->get();
  

       return view('RestaurantAdmin.MyKitchen')->with('name',$name);

   }
    public function ModifyItem($name){

    $items = DB::table('food')->where('restaurant', $name)->get();

        return view('RestaurantAdmin.ModifyItem')->with('foods',$items)->with('restaurant',$name);

    }
    
    public function AddType($name,Request $request,$number){

            $type=new Type;
            $foodname=$request->foods;
            
        
           
            $restaurantId = DB::table('restaurants')->where('name', $name)->value('id');
            // $restaurantId=DB::select("select id from restaurants where name='$name';");
            // $foodId=DB::table('food')->where('name', $foodname)->pluck('id');
            // $foodId=DB::select("select id from food where name='$foodname';");

            $type->name=$request->type1;

            // $FoodId=(int)$foodId;
            // $RestaurantId=(int)$restaurantId;

            $type->foodid=$request->foods;
            $type->restaurantid=$restaurantId;
        
            $image = $request->file('image');
            $slug = Str::slug($request->name);
            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
     
                if (!file_exists('uploads/FoodType')) {
                    mkdir('uploads/FoodType', 0777, true);
                }
                
                $image->move('uploads/FoodType', $imagename);
            } else {
                $imagename = "default.png";
            }
            $type->image=$imagename;
            $type->description=$request->description;
         
             
            $type->save();

            $typeId=DB::table('types')->where('name',$request->type1)->value('id');



        return view('RestaurantAdmin.AddIngridentStage1')->with('foodid',$request->foods)->with('restaurantid',$restaurantId)->with('typeid',$typeId)->with('number',$number+1);

          

    }
    

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function AssignDriver($mydeliveryid){
            $deliverMans=DB::table('deliver_men')->where('status','active')->get();
            return view('RestaurantAdmin.AssignDriver')->with('deliverMan',$deliverMans)->with('mydeliveryid',$mydeliveryid);


    }
    public function OrderDetail($restId,$foodId,$created_at,$userId){

            $type=new Type;
            $hastype=DB::table('order_confirmations')->where([['userId',$userId],['restaurantid',$restId],['foodid',$foodId],['created_at','like','%'.Carbon::now()->toDateString().'%']])->value('typeid');
            if ($hastype==0){

         
                $item=DB::table('food')->where('id',$foodId)->get();
                $orderId= DB::table('order_confirmations')->where([['typeid',$hastype],['created_at','like','%'.Carbon::now()->toDateString().'%']])->value('id');
                $type="";
                
                

                return view ('RestaurantAdmin.OrderDetail')->with('items',$item)->with('type',$type)->with('orderId',$orderId)
                ->with('userId',$userId)->with('created_at',$created_at);

            } else
            // $selectedtype=DB::table('types')->where([['restaurantid',$restId],['foodid',$foodId],['id',$hastype]])->get();
  
                //if changes are made on selection of delivery and reserve after choosing type is made here ..changes are here
                $item=DB::table('food')->where('id',$foodId)->get();
                $type=DB::table('types')->where('id',$hastype)->get();

            $selectedIngridents=DB::table('orders')->where([['foodid',$foodId],['restaurantid',$restId],['created_at','like','%'.Carbon::now()->toDateString().'%'],['typeid',$hastype],['userId',$userId]])->get();
            $data = json_decode(json_encode($selectedIngridents, true), true);
           $orderId= DB::table('order_confirmations')->where([['typeid',$hastype],['created_at','like','%'.Carbon::now()->toDateString().'%']])->value('id');
          
          
         
            $item=DB::table('food')->where('id',$foodId)->get();
            return view ('RestaurantAdmin.OrderDetail')->with('items',$item)->with('selectedIngridents',$data)->with('type',$type)
            ->with('orderId',$orderId)->with('userId',$userId)->with('created_at',$created_at);
    }
    public function OrderDetailEach($userId,$restId){
                    $orders=DB::table('deliveries')->where([['userId',$userId],['restaurantId',$restId]])->get();

                    return view('RestaurantAdmin.EachDetails')->with('orders',$orders);



    }
    public function BookOrderDetailEach($userId,$restId){
        $books=DB::table('bookings')->where([['userId',$userId],['restaurantId',$restId]])->orderBy('created_at', 'desc')->get();

        return view('RestaurantAdmin.EachDetailsBooking')->with('books',$books);      

    }
//     public function OrderDetailEach($userId,$restId){
//         $orders=DB::table('deliveries')->where('userId',$userId,'restaurantId',$restId)->get();

//         return view('RestaurantAdmin.EachDetails')->with('orders',$orders);



// }
    public function BookOrderDetail($restId,$food_id,$userId,$bookId){

        $type=new Type;
        $hastype=DB::table('bookings')->where('id',$bookId)->value('typeId');
        if ($hastype==0){

     
            $item=DB::table('food')->where('id',$food_id)->get();
            $orderId= DB::table('order_confirmations')->where([['typeid',$hastype],['created_at','like','%'.Carbon::now()->toDateString().'%']])->value('id');
            $type="";
          
            
            

            return view ('RestaurantAdmin.BookOrderDetail')->with('items',$item)->with('type',$type)->with('orderId',$orderId)
            ->with('userId',$userId)->with('bookId',$bookId)->with('restId',$restId);

        } else
        // $selectedtype=DB::table('types')->where([['restaurantid',$restId],['foodid',$foodId],['id',$hastype]])->get();

            //if changes are made on selection of delivery and reserve after choosing type is made here ..changes are here
            $item=DB::table('food')->where('id',$food_id)->get();
            $type=DB::table('types')->where('id',$hastype)->get();

        $selectedIngridents=DB::table('orders')->where([['foodid',$food_id],['restaurantid',$restId],['created_at','like','%'.Carbon::now()->toDateString().'%'],['typeid',$hastype],['userId',$userId]])->get();
        $data = json_decode(json_encode($selectedIngridents, true), true);
        $orderId= DB::table('order_confirmations')->where([['typeid',$hastype],['created_at','like','%'.Carbon::now()->toDateString().'%']])->value('id');
      
      
     
        $item=DB::table('food')->where('id',$food_id)->get();
        return view ('RestaurantAdmin.BookOrderDetail')->with('items',$item)->with('selectedIngridents',$data)->with('type',$type)
        ->with('orderId',$orderId)->with('userId',$userId)->with('bookId',$bookId)->with('restId',$restId);
}
    public function CheckCook($typeId,$userId,$foodId,$created_at){

        DB::table('deliveries')->where([['userId',$userId],['foodId',$foodId],['typeId',$typeId],['created_at',$created_at]])->update(array('isCooked' => 1));

     
    
        return redirect()->back();
    }
    public function BookCheckCook($bookId,$restId){

        $userId=Auth::user()->id;

        DB::table('bookings')->where('id',$bookId)->update(array('isCooked' => 1));
        
        // $books=DB::table('bookings')->where([['userId',$userId],['restaurantId',$restId]])->get();
    
        // return Redirect::route('BookOrder.DetailEach',['userId'=>$userId,'restId'=>$restId]);
        return redirect()->back();
    }

    public function AssignStore($id,$mydeliveryid){
        DB::table('deliver_men')
        ->where('id',$id) 
        ->update(array('status' =>'cached'));

        DB::table('deliveries')
        ->where('id',$mydeliveryid) 
        ->update(array('deliveryManId' =>$id));

        
        return redirect()->back();


    }
    public function showMessage($name){

        $restId=DB::table('restaurants')->select('id')->where('name',$name)->value('id');
        

        $messages=DB::table('messages')->where('restId',$restId)->get();


        return view('RestaurantAdmin.Messages')->with('messages',$messages);


    }
    public function dailyreport($status,$name,$userid){

        $restId=DB::table('restaurants')->where('name',$name)->value('id');
        
        $date = Carbon::now()->toDateString(); 
        $totalOrders = DB::table('deliveries')->where([['restaurantId',$restId],['created_at','LIKE','%'.$date.'%']])->count();
        $totalBookings=DB::table('bookings')->where([['restaurantId',$restId],['created_at','LIKE','%'.$date.'%']])->count();

        $totalOrderQuantity = DB::table('deliveries')->where([['restaurantId',$restId],['created_at','LIKE','%'.$date.'%']])->sum('quantity');
        $totalBookingQuantity=DB::table('bookings')->where([['restaurantId',$restId],['created_at','LIKE','%'.$date.'%']])->sum('quantity');

        $totalOrderPrice = DB::table('deliveries')->where([['restaurantId',$restId],['created_at','LIKE','%'.$date.'%']])->sum('price');
        $totalBookingPrice=DB::table('bookings')->where([['restaurantId',$restId],['created_at','LIKE','%'.$date.'%']])->sum('price');

        $GrandTotalQuantity=$totalOrderQuantity+$totalBookingQuantity;
        $GrandTotalPrice=$totalOrderPrice+$totalBookingPrice;
        $GrandTotalBookingOrder=$totalOrders+$totalBookings;
       

        return view('RestaurantAdmin.Report')->with('today',$date)->with('totalOrders',$totalOrders)->with('totalBookings',$totalBookings)
        
        ->with('totalOrderPrice',$totalOrderPrice)->with('totalBookingPrice',$totalBookingPrice)->with('totalOrderQuantity',$totalOrderQuantity)
        ->with('totalBookingQuantity',$totalBookingQuantity)->with('GrandTotalPrice',$GrandTotalPrice)->with('GrandTotalQuantity',$GrandTotalQuantity)
        ->with('GrandTotalBookingOrder',$GrandTotalBookingOrder)->with('status',$status);

        

    }
    public function weeklyreport($status,$name,$userid){

        $restId=DB::table('restaurants')->where('name',$name)->value('id');
        $OrdersLastWeek = Deliveries::select('created_at')
                        ->where('created_at', '>', now()->subWeek()->startOfWeek())
                        ->where('created_at', '<', now()->subWeek()->endOfWeek())
                        ->where('restaurantId',$restId)
                        ->count();
        $BookingLastWeek = Booking::select('created_at')
                        ->where('created_at', '>', now()->subWeek()->startOfWeek())
                        ->where('created_at', '<', now()->subWeek()->endOfWeek())
                        ->where('restaurantId',$restId)
                        ->count();
        $OrderPriceLastWeek = Deliveries::select('created_at')
                        ->where('created_at', '>', now()->subWeek()->startOfWeek())
                        ->where('created_at', '<', now()->subWeek()->endOfWeek())
                        ->where('restaurantId',$restId)
                        ->sum('price');
        $BookingPriceLastWeek = Booking::select('created_at')
                        ->where('created_at', '>', now()->subWeek()->startOfWeek())
                        ->where('created_at', '<', now()->subWeek()->endOfWeek())
                        ->where('restaurantId',$restId)
                        ->sum('price');
        $OrderQuantityLastWeek = Deliveries::select('created_at')
                        ->where('created_at', '>', now()->subWeek()->startOfWeek())
                        ->where('created_at', '<', now()->subWeek()->endOfWeek())
                        ->where('restaurantId',$restId)
                        ->sum('quantity');
        $BookingQuantityLastWeek = Booking::select('created_at')
                        ->where('created_at', '>', now()->subWeek()->startOfWeek())
                        ->where('created_at', '<', now()->subWeek()->endOfWeek())
                        ->where('restaurantId',$restId)
                        ->sum('quantity');


                        $date = Carbon::now()->toDateString(); 
            
                        $GrandTotalQuantity=$OrderQuantityLastWeek+$BookingQuantityLastWeek;
                        $GrandTotalPrice=$OrderPriceLastWeek+$BookingPriceLastWeek;
                        $GrandTotalBookingOrder=$OrdersLastWeek+$BookingLastWeek;

        return view('RestaurantAdmin.Report')->with('status',$status)->with('totalOrders',$OrdersLastWeek)->with('totalBookings',$BookingLastWeek)
        ->with('totalOrderQuantity',$OrderQuantityLastWeek)->with('totalOrderPrice',$OrderPriceLastWeek)->with('totalBookingPrice',$BookingPriceLastWeek)
        ->with('totalBookingQuantity',$BookingQuantityLastWeek)->with('GrandTotalPrice',$GrandTotalPrice)->with('GrandTotalQuantity',$GrandTotalQuantity)
        ->with('GrandTotalBookingOrder',$GrandTotalBookingOrder)->with('today',$date);

        

    }
    public function monthlyreport($status,$name,$userid){

        return view('RestaurantAdmin.Report')->with('status',$status);

    }
  

}
