<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Restaurant;
use Str;
use Carbon\Carbon;
use App\Customer;
use DB;
use App\Food;
use App\Image;
use Session;
use View;
use Auth;
use App\Booking;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.AddRestaurant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $restaurant =new  Restaurant;
       $image = $request->file('image');
       $slug = Str::slug($request->name);
       if (isset($image)) {
           $currentDate = Carbon::now()->toDateString();
           $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

           if (!file_exists('uploads/Restaurant')) {
               mkdir('uploads/Restaurant', 0777, true);
           }
           
           $image->move('uploads/Restaurant', $imagename);
       } else {
           $imagename = "default.png";
       }

       $restaurant->name=$request->name;
       $restaurant->email=$request->email;
       $restaurant->phone=$request->phone;
       $restaurant->address=$request->address;

       $restaurant->longtude=$request->longtude;
       $restaurant->latitude=$request->latitude;
       $restaurant->description=$request->description;
       $restaurant->approximateDeliveryTime=$request->approximateDeliveryTime;
       $restaurant->currency=$request->currency;
       $restaurant->pricePerKm=$request->pricePerKm;
       $restaurant->minOrderPrice=$request->minOrderPrice;
       $restaurant->minOrderAmount=$request->minOrderAmount;
       $restaurant->chargeType=$request->chargeType;
       $restaurant->image=$imagename;

       $restaurant->save();

        return redirect()->back();

        Session::flash('success','successfuly create Restaurant');

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
        $food=Food::find($id);

        // $RestaurantName=$food->restaurant;

        // $fooddescription=$food->description;
        $foodname=$food->name;
        $foodId=$id;


        $restaurants=DB::table('restaurants')
        ->where('description', 'like','%'.$foodname.'%')
        ->get();
    

        // $restaurantget=Restaurant::find($restaurantid);

        // $restaurants = DB::table('restaurants')->where('name', $RestaurantName)->get();

        return view('MainBox.FindRestaurant')->with('restaurants',$restaurants)->with('foodname',$foodname)->with('foodId',$foodId);


    }
 
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $myrestaurant=Restaurant::find($id);
        $myrestaurant = DB::table('restaurants')->where('id', $id)->get();
            return view('Admin.EditRestaurant')->with('myrestaurant',$myrestaurant);
    }
    // public function editconfirm($id)
    // {
    //     $restaurant=Restaurant::find($id);
    //         return view('Admin.EditRestaurant')->with('restaurant',$restaurant);
    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       


        $image = $request->file('image');

        // if($request->hasFile('image')){
        //     $image = $request->file('image');
        //     $imagename = time() . '-' . $image->getClientOriginalExtension();
        //     Image::make($image)->resize(500, 600)->save( public_path('uploads/Restaurant'. $imagename) );

        //     // $product->avatar = $imagename;
        //     // $product->save();
        // }


        $slug = Str::slug($request->name);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename2= $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
 
            if (!file_exists('uploads/Restaurant')) {
                mkdir('uploads/Restaurant', 0777, true);
            }
            $image->move('uploads/Restaurant', $imagename2);

        } else {

            save( public_path('uploads/Restaurant'. $imagename2) );

        }
 
        DB::table('restaurants')
        ->where('id',$id) 
        ->update(array('name' =>$request->name,
                       'email'=>$request->email,
                       'phone'=>$request->phone,
                       'description'=>$request->description,
                       'address'=>$request->address,
                       'longtude'=>$request->longtude,
                       'latitude'=>$request->latitude,
                       'currency'=>$request->currency,
                       'approximateDeliveryTime'=>$request->approximateDeliveryTime,
                       'pricePerKm'=>$request->pricePerKm,
                       'minOrderPrice'=>$request->minOrderPrice,
                       'minOrderAmount'=>$request->minOrderAmount,
                       'chargeType'=>$request->chargeType,
                       'image'=>$imagename2
    
    
    ));
    return redirect()->route('Admin.Home');
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


    public function showkitchen($id,$foodId){

                 $restaurant=Restaurant::find($id);
//   $customer = Customer::all();
//     View::make('MainBox.mainkitchen')->withModel($customer);

  return view('MainBox.mainkitchen')->with('myrestaurant',$restaurant)->with('foodId',$foodId)->with('restId',$id);

    }


    public function ShowSearchkitchen($id){
       $food=Food::find($id);
       $restaurantname=$food->restaurant;
       $restaurant=DB::table('restaurants')->where('name',$restaurantname)->get();
       
        // $restaurant=Restaurant::all()->where('name',$restaurantname);
        return view('MainBox.mainkitchen')->with('myrestaurant',$restaurant);
      
          }
          public function ShowSubscription($email){

        
            $subscription=DB::table('customers')->where('email',$email)->get();

            return view('MainBox.Subscription')->with('subscription',$subscription);


          }

          
    public function pan($restId,$foodId,$userId){

                $restaurant=Restaurant::find($restId);


                $food=Food::find($foodId);

                $foodType=DB::table('types')->where([['foodid',$foodId],['restaurantid',$restId]])->get();
                if($foodType=='[]')
                {
                        return redirect()->back();
                }

                return view('Mainbox.pan')->with('foodType',$foodType)->with('restId',$restId)->with('foodId',$foodId)->with('userId',$userId);

            }
    public function panGuest($food_id,$restId,$userId){

        $restaurant=Restaurant::find($restId);


        $food=Food::find($food_id);

        $foodType=DB::table('types')->where([['foodid',$food_id],['restaurantid',$restId]])->get();
        if($foodType=='[]')
        {
                return view('Guest.pan')->with('message','Food Has No Type ...Please Order Simply')->with('restId',$restId)->with('food_id',$food_id)->with('userId',$userId);
        }

        return view('Guest.pan')->with('foodType',$foodType)->with('message','')->with('restId',$restId)->with('food_id',$food_id)->with('userId',$userId);

    }

    public function myrestaurants($restId,$useremail,$restname){

            $userId=DB::table('users')->where('email',$useremail)->value('id');


            $restname=DB::table('restaurants')->where('id',$restId)->value('name');
            $foods=DB::table('food')->where('restaurant',$restname)->get();


            return view('MainBox.myrestaurantfoods')->with('userId',$userId)->with('foods',$foods)->with('restId',$restId)->with('restname',$restname);

 
    } 
    public function unsubscribe($email,$restId){

        // $customer=DB::table('customers')->where('email',$email)->get();
        Customer::where([['email',$email],['restaurantId',$restId]])->delete();

     
        return redirect()->back();


    }
    public function SeeOrders($userId){

        $myorder=DB::table('bookings')->where([['userId',$userId],['isCooked',0]])->get();
 
        // $itemName=$myorder->$bookings->name;
        return view('Guest.myorder')->with('myorder',$myorder);


    }
    
   
}
