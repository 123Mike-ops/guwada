<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Order;
use App\Restaurant;
use DB;
use Auth;
use Carbon\Carbon;
use App\User;


class FoodController extends Controller
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
    public function startcook($foodId,$restId,$typeId,$userId){

        $stages=DB::table('stages')->where([['foodid',$foodId],['restaurantid',$restId],['typeid',$typeId]])->get();
        $userId=Auth::user()->id;
        $user=User::find($userId);
        $selected=DB::table('orders')->where([['userId',$userId],['created_at','like','%'.Carbon::now()->toDatestring().'%']])->orderBy('created_at', 'asc')->get();

        return view('Mainbox.startcook2')->with('user',$user)->with('stages',$stages)->with('restId',$restId)->with('typeId',$typeId)->with('foodId',$foodId)->with('userId',$userId)->with('selected',$selected);

    } 
    public function startcookGuest($food_id,$restId,$typeId,$userId){

        $stages=DB::table('stages')->where([['foodid',$food_id],['restaurantid',$restId],['typeid',$typeId]])->get();
        $userId=Auth::user()->id;
        $user=User::find($userId);
        $selected=DB::table('orders')->where([['userId',$userId],['typeid',$typeId],['foodid',$food_id],['orderStarted',0]])->orderBy('created_at', 'asc')->get();

        return view('Guest.StartCook')->with('user',$user)->with('stages',$stages)->with('restId',$restId)->with('typeId',$typeId)->with('food_id',$food_id)->with('userId',$userId)->with('selected',$selected);

    } 
    public function storeIngrident($food_id,$restId,$typeId,$userId,$stageId,$ingrident)
    {
        $before=Order::where([['userId',$userId],['foodid',$food_id],['restaurantid',$restId],['typeid',$typeId],['stageid',$stageId]]);
        $before->delete();
        $order =new Order;

        $order->foodid=$food_id;
        $order->restaurantid=$restId;
        $order->typeid=$typeId;
        $order->ingrident=$ingrident;
        $order->stageid=$stageId;
        $desc=DB::table('stages')->where('id',$stageId)->value('description');

        
        $order->userId=$userId;
        $order->stageDesc=$desc;

        $order->save();
        return redirect()->back();


        
    }
    
    public function destroyIngrident($id,$userId){
        $before=Order::where([['userId',$userId],['id',$id]]);
        $before->delete();
     
        return redirect()->back();

    }
    public function destroyIngridentGuest($id,$userId){
        $before=Order::where([['userId',$userId],['id',$id]]);
        $before->delete();
     
        return redirect()->back();

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
    public function show($id)
    {
        //
 
        // $food=Food::find($id);
        // $RestaurantName=$food->restaurant;
        // $foodname=$food->name;
        // // $restaurantget=Restaurant::find($restaurantid);
        // $restaurants = DB::table('food')->where('restaurant', $RestaurantName)->get();

        // return view('MainBox.mealgetter')->with('restaurants',$restaurants)->with('foodname',$foodname);

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
