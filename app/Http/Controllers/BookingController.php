<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use DB;
use App\Food;
use App\Restaurant;
use App\User;
use App\FinalOrder;
use Auth;
class BookingController extends Controller
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

    // public function storeBooking(Request $request,$foodId,$restId,$typeId,$userId)
    // {
    //   $booking=new Booking;
    //   $booking->bookDate=$request->bookDate;
    //   $booking->userId=$userId;
    //   $booking->typeId=$typeId;

    //   $booking->foodId=$foodId;
    //   $booking->restaurantId=$restId;
    //   $booking->quantity=$request->quantity;
    //   $booking->numberOfSeat=$request->numberOfSeat;
    //   $booking->time=$request->time;
    //   $item=Food::find($foodId)->first();
    //   $restaurant=Restaurant::find($restId)->first();
    //   $user=User::find($userId)->first();

    //   $price= DB::table('food')->where('id', $foodId)->value('unitPrice');
    //   $Quantity= $request->quantity ;
    //   $Currency=DB::table('restaurants')->where('id', $restId)->value('currency');

    //   $totalPrice =$Quantity*$price;
    //   $Currency=DB::table('restaurants')->where('id', $restId)->value('currency');


    //   $booking->price= $totalPrice ;
 


    //     $booking->save();
        

    //     return view('MainBox.Confirmation')->with('restId',$restId)->with('Id',$booking->id)->with('price',$totalPrice)->with('currency',$Currency)
    //     ->with('user',$user)->with('restaurant',$restaurant)->with('item',$item);
        

    // }
    public function FinalBookStoreReservation(Request $request,$totalPrice,$userId){
        $user=User::find(Auth::id());
        $user->unreadNotifications->where('type',"App\Notifications\ReserveCartDone")->markAsRead();

        $final=new FinalOrder;
        $final->userId=$userId;
        $final->totalPrice=$totalPrice;

        $totalQuantity=DB::table('carts')->where('userId',$userId)->sum('quantity');
        $final->totalQuantity=$totalQuantity;

        $final->paymentType=$request->paymentType;
        $final->time=$request->time;

        DB::table('bookings')->where('userId',$userId)->update(array('numberOfSeat' => $request->numberOfSeat));
        DB::table('bookings')->where('userId',$userId)->update(array('bookDate' => $request->bookDate));
        DB::table('bookings')->where('userId',$userId)->update(array('time' => $request->time));


        $final->save();
        DB::delete('delete from carts where userId = ?',[$userId]);
        return redirect()->route('home');




    }
    public function FinalBookStoreReservationGuest(Request $request,$totalPrice,$userId){
        $user=User::find(Auth::id());
        $user->unreadNotifications->where('type',"App\Notifications\ReserveCartDone")->markAsRead();

        $final=new FinalOrder;
        $final->userId=$userId;
        $final->totalPrice=$totalPrice;

        $totalQuantity=DB::table('carts')->where('userId',$userId)->sum('quantity');
        $final->totalQuantity=$totalQuantity;

        $final->paymentType=$request->paymentType;
        $final->time=$request->time;

        DB::table('bookings')->where('userId',$userId)->update(array('numberOfSeat' => $request->numberOfSeat));
        DB::table('bookings')->where('userId',$userId)->update(array('bookDate' => $request->bookDate));
        DB::table('bookings')->where('userId',$userId)->update(array('time' => $request->time));


        $final->save();

        DB::table('carts')->where('userId',$userId)->update(array('isOrderd' => 1));
        DB::table('orders')->where('userId',$userId)->update(array('orderStarted' => 1));
        return redirect()->route('HomeGuest');




    }
}
