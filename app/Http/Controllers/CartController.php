<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use DB;
use App\Food;
use App\Restaurant;
use App\User;
use App\Cart;
use App\Deliveries;
use Notification;
use Auth;
use App\Notifications\CartDone;
use App\Notifications\ReserveCartDone;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCart($userId)
    {
       
        
        $carts=DB::table('carts')->where('userId',$userId)->get();
       $totalPrice=DB::table('carts')->where('userId',$userId)->sum('totalPrice');
        

        return view('MainBox.Cart')->with('cart',$carts)->with('totalPrice',$totalPrice);

    }
    public function GuestShowCart($userId)
    {
       
        
        $carts=DB::table('carts')->where([['userId',$userId],['isOrderd',0]])->get();
       $totalPrice=DB::table('carts')->where('userId',$userId)->sum('totalPrice');
        

        return view('Guest.Cart')->with('cart',$carts)->with('totalPrice',$totalPrice);

    }
    public function showCartBook($userId)
    {
      

        $carts=DB::table('carts')->where('userId',$userId)->get();
       $totalPrice=DB::table('carts')->where('userId',$userId)->sum('totalPrice');
        

        return view('MainBox.BookCart')->with('cart',$carts)->with('totalPrice',$totalPrice);

    }
    
    public function AddCart(Request $request,$foodId,$restId,$typeId,$userId,$restname){
        $this->validate($request,[
            
            'quantity'=>'required'
        ]);

        $cart =new Cart;
        $cart->itemId=$foodId;
        $cart->userId=$userId;
        $cart->quantity=$request->quantity;
       
        $ItemName=DB::table('food')->where('id',$foodId)->value('name');
        $cart->name=$ItemName;
        $QuantityC= $request->quantity ;
        $priceC= DB::table('food')->where('id', $foodId)->value('unitPrice');
        $totalPriceT =$QuantityC*$priceC;
        $cart->totalPrice=$totalPriceT;
        

        $cart->save();
        $useremail=DB::table('users')->where('id',$userId)->value('email');
        $resname=Db::table('restaurants')->where('id',$restId)->get();
        $username=DB::table('users')->where('id',$userId)->value('name');



        $deliveries=new Deliveries;

        $deliveries->userId=$userId;
        $deliveries->foodId=$foodId;
        
        $deliveries->quantity=$request->quantity;
        $deliveries->restaurantId=$restId;
        $deliveries->userId=$userId;
        $deliveries->typeId=$typeId; 

        $deliveries->userName=$username;    

        $user=User::find($userId)->first();
        $restaurant=Restaurant::find($restId)->first();
        $item=Food::find($foodId)->first();

     

      


  
     
     

        $price= DB::table('food')->where('id', $foodId)->value('unitPrice');
        $Quantity= $request->quantity ;
        $Currency=DB::table('restaurants')->where('id', $restId)->value('currency');

        $totalPrice =$Quantity*$price;

        $deliveries->price= $totalPrice ;


        $deliveries->save();
        $users=array();
        array_push($users,User::all());
        
      

            $emails=DB::table('users')->where('id',2)->value('email');
     

           
    
            // Notification::route('mail',Auth::user()->email)->notify(new CartDone());
         
            $food=$deliveries->foodId;
            $user=User::find($userId);
            $user->notify(new CartDone( $deliveries));

         
            // DB::table('orders')->where([['userId',$userId],['restaurantid',$restId],['typeid',$typeId],['foodid',$foodId],['created_at']])->update(array('orderStarted'=>1));
      
        return redirect()->route('myrestaurant.show',['restId'=>$restId,'useremail'=>$useremail,'restname'=>$restname]);
    

    }

    public function notifications()
    {
        return auth()->user()->unreadNotifications()->limit(5)->get()->toArray();
    }

    public function AddCartBook( Request $request,$foodId,$restId,$typeId,$userId,$restname){

        $this->validate($request,[
            
            'quantity'=>'required'
        ]);

        $cart =new Cart;
        $cart->itemId=$foodId;
        $cart->userId=$userId;
        $cart->quantity=$request->quantity;
       
        $ItemName=DB::table('food')->where('id',$foodId)->value('name');
        $cart->name=$ItemName;
        $QuantityC= $request->quantity ;
        $priceC= DB::table('food')->where('id', $foodId)->value('unitPrice');
        $totalPriceT =$QuantityC*$priceC;
        $cart->totalPrice=$totalPriceT;
        

        $cart->save();
        $useremail=DB::table('users')->where('id',$userId)->value('email');
        $username=DB::table('users')->where('id',$userId)->value('name');
        $resname=Db::table('restaurants')->where('id',$restId)->get();



        $booking=new Booking;
      $booking->bookDate=$request->bookDate;
      $booking->userId=$userId;
      $booking->typeId=$typeId;

      $booking->foodId=$foodId;
      $booking->restaurantId=$restId;
      $booking->quantity=$request->quantity;
      $booking->userName=$username;  
     
   
      $item=Food::find($foodId)->first();
      $restaurant=Restaurant::find($restId)->first();
      $user=User::find($userId)->first();

      $priceB= DB::table('food')->where('id', $foodId)->value('unitPrice');
      $QuantityB= $request->quantity ;
      $Currency=DB::table('restaurants')->where('id', $restId)->value('currency');

      $totalPriceB =$QuantityB*$priceB;
      $Currency=DB::table('restaurants')->where('id', $restId)->value('currency');


      $booking->price= $totalPriceB ;
 


        $booking->save();
        $user=User::find($userId);

        $user->notify(new ReserveCartDone($booking));

        return redirect()->route('myrestaurant.show',['restId'=>$restId,'useremail'=>$useremail,'restname'=>$restname]);


        


    }
    public function AddGuestCartBook( Request $request,$food_id,$restId,$typeId,$userId,$restname){

        $this->validate($request,[
            
            'quantity'=>'required'
        ]);

        $cart =new Cart;
        $cart->itemId=$food_id;
        $cart->userId=$userId;
        $cart->quantity=$request->quantity;
       
        $ItemName=DB::table('food')->where('id',$food_id)->value('name');
        $cart->name=$ItemName;
        $QuantityC= $request->quantity ;
        $priceC= DB::table('food')->where('id', $food_id)->value('unitPrice');
        $totalPriceT =$QuantityC*$priceC;
        $cart->totalPrice=$totalPriceT;
        

        $cart->save();
        $useremail=DB::table('users')->where('id',$userId)->value('email');
        $username=DB::table('users')->where('id',$userId)->value('name');
        $resname=Db::table('restaurants')->where('id',$restId)->get();



        $booking=new Booking;
      $booking->bookDate=$request->bookDate;
      $booking->userId=$userId;
      $booking->typeId=$typeId;

      $booking->food_id=$food_id;
      $booking->restaurantId=$restId;
      $booking->quantity=$request->quantity;
      $booking->userName=$username;  
     
   
      $item=Food::find($food_id)->first();
      $restaurant=Restaurant::find($restId)->first();
      $user=User::find($userId)->first();

      $priceB= DB::table('food')->where('id', $food_id)->value('unitPrice');
      $QuantityB= $request->quantity ;
      $Currency=DB::table('restaurants')->where('id', $restId)->value('currency');

      $totalPriceB =$QuantityB*$priceB;
      $Currency=DB::table('restaurants')->where('id', $restId)->value('currency');


      $booking->price= $totalPriceB ;
 


        $booking->save();
        $user=User::find($userId);

        $user->notify(new ReserveCartDone($booking));
    

        return redirect()->route('HomeGuest');


        


    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function RemoveAll($id){

        // $cart=DB::table('carts')->where('userId',$id)->delete();
        DB::delete('delete from carts where userId = ?',[$id]);
        DB::delete('delete from deliveries where userId = ?',[$id]);
        DB::delete('delete from bookings where userId = ?',[$id]);
        $user=User::find(Auth::id());
        $user->unreadNotifications->where('type',"App\Notifications\CartDone")->markAsRead();
        $user->unreadNotifications->where('type',"App\Notifications\ReserveCartDone")->markAsRead();
      
        return redirect()->route('home');
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
        $cart=Cart::find($id)->delete();
         $userId=DB::table('carts')->where('id',$id)->value('userId');
         $foodId=DB::table('carts')->where('id',$id)->value('itemId');

         DB::table('deliveries')->where([['userId',$userId],['foodId',$foodId]])->delete();
         DB::table('bookings')->where([['userId',$userId],['foodId',$foodId]])->delete();


        return redirect()->back();
    }
    public function destroyGuest($id)
    {
        //
        $cart=Cart::find($id)->delete();
        $user=User::find(Auth::id());
         $userId=DB::table('carts')->where('id',$id)->value('userId');
         $foodId=DB::table('carts')->where('id',$id)->value('itemId');
         $user->unreadNotifications->where('type',"App\Notifications\ReserveCartDone")->markAsRead();

         DB::table('deliveries')->where([['userId',$userId],['foodId',$foodId]])->delete();
         DB::table('bookings')->where([['userId',$userId],['foodId',$foodId]])->delete();


        return redirect()->back();
    }
}
