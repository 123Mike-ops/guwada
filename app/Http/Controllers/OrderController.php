<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurant;
use Str;
use Carbon\Carbon;
use DB;
use App\Food;
use App\Image;
use Session;
use App\Order;
use App\OrderConfirmation;
use App\Customer;

class OrderController extends Controller
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
    public function storeReservation(Request $request,$foodId,$restId,$typeId,$userId)
    {
        $confirm=new OrderConfirmation;
        $confirm->foodid=$foodId;
        $confirm->restaurantid=$restId;
        $confirm->typeid=$typeId;
        $confirm->userId=$userId;

        $confirm->save();

        $restname=Restaurant::find($restId);
        $userEmail=DB::table('users')->where('id',$userId)->value('email');

        $check=DB::table('customers')->where([['email',$userEmail],['restaurantId',$restId]])->get();


        return view('MainBox.Book')->with('restname',$restname->name)->with('foodId',$foodId)->with('restId',$restId)->with('typeId',$typeId)->with('userId',$userId)->with('check',$check);



    }
    public function storeOrderGuest(Request $request,$food_id,$restId,$typeId,$userId)
    {
        $confirm=new OrderConfirmation;
        $confirm->foodid=$food_id;
        $confirm->restaurantid=$restId;
        $confirm->typeid=$typeId;
        $confirm->userId=$userId;

        $confirm->save();

        $restname=Restaurant::find($restId);
        $userEmail=DB::table('users')->where('id',$userId)->value('email');

        $check=DB::table('customers')->where([['email',$userEmail],['restaurantId',$restId]])->get();


        return view('Guest.OrderBook')->with('restname',$restname->name)->with('food_id',$food_id)->with('restId',$restId)->with('typeId',$typeId)->with('userId',$userId)->with('check',$check);



    }
    public function storeOrder(Request $request,$foodId,$restId,$typeId,$userId)
    {
        $confirm=new OrderConfirmation;
        $confirm->foodid=$foodId;
        $confirm->restaurantid=$restId;
        $confirm->typeid=$typeId;
        $confirm->userId=$userId;

        $confirm->save();

        $restname=Restaurant::find($restId);

        $userEmail=DB::table('users')->where('id',$userId)->value('email');

        $check=DB::table('customers')->where([['email',$userEmail],['restaurantId',$restId]])->get();
             
    
        
        return view('MainBox.order')->with('restname',$restname->name)->with('foodId',$foodId)->with('restId',$restId)->with('userId',$userId)->with('typeId',$typeId)->with('check',$check);


    


        
}

                
    

            

   
            



        


    
  


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
