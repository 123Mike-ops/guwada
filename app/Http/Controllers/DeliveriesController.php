<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliveries;
use DB;
use App\Food;
use App\Restaurant;
use App\User;
use App\Cart;
use App\FinalOrder;
use Auth;

class DeliveriesController extends Controller
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
  

    // public function storeDelivery(Request $request,$foodId,$restId,$typeId,$userId )
    // {

    //     $this->validate($request,[
    //         // 'time'=>'required',
    //         'quantity'=>'required'
    //     ]);

    //     $deliveries=new Deliveries;

    //     $deliveries->userId=$userId;
    //     $deliveries->foodId=$foodId;
    //     $deliveries->time=$request->time;
    //     $deliveries->quantity=$request->quantity;
    //     $deliveries->restaurantId=$restId;
    //     $deliveries->userId=$userId;
    //     $deliveries->typeId=$typeId;     

    //     $user=User::find($userId)->first();
    //     $restaurant=Restaurant::find($restId)->first();
    //     $item=Food::find($foodId)->first();


  
     
    //   $deliveries->time=$request->time;

    //     $price= DB::table('food')->where('id', $foodId)->value('unitPrice');
    //   $Quantity= $request->quantity ;
    //   $Currency=DB::table('restaurants')->where('id', $restId)->value('currency');

    //   $totalPrice =$Quantity*$price;

    //   $deliveries->price= $totalPrice ;


    //     $deliveries->save();

    //    $deliveryId= $deliveries->id;
    //     return view('MainBox.Confirmation')->with('restId',$restId)->with('Id',$deliveryId)->with('price',$totalPrice)->with('currency',$Currency)
    //     ->with('user',$user)->with('restaurant',$restaurant)->with('item',$item);

       
      

    // }

    public function FinalStoreDelivery(Request $request,$totalPrice,$userId){
        
        $user=User::find(Auth::id());
        $user->unreadNotifications->where('type',"App\Notifications\CartDone")->markAsRead();
            $final=new FinalOrder;
            $final->userId=$userId;
            $final->totalPrice=$totalPrice;

            $totalQuantity=DB::table('carts')->where('userId',$userId)->sum('quantity');
            $final->totalQuantity=$totalQuantity;

            $final->paymentType=$request->paymentType;
            $final->time=$request->time;
            


            $final->save();
            DB::table('deliveries')->where('userId',$userId)->update(array('time' => $request->time));
            DB::delete('delete from carts where userId = ?',[$userId]);
            return redirect()->route('home');

         



    }


    // public function confirmDelivery(Request $request,$Id,$price){

    //     DB::table('deliveries')
    //         ->where('id',$Id) 
    //         ->update(array('price' =>$price,'paymentType'=>$request->paymentType));

    //         return redirect()->route('home');



    // }


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
