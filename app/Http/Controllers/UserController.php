<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Profile;
use App\User;
use Str;
use Carbon\Carbon;
use App\Type;

use App\Booking;
use App\Deliveries;
use OrderConfirmation;
class UserController extends Controller
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
    public function edit($userId)
    {
        $user=DB::table('users')->where('id',$userId)->get();

        return view('RestaurantAdmin.EditProfile')->with('user',$user);

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
    public function StoreProfile(Request $request,$userId){

        $profile=new Profile;

        $profile->user_id=$userId;
        $profile->user_id=$request->age;

        $image = $request->file('profileimage');
        $slug = Str::slug($request->name);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
 
            if (!file_exists('uploads/profile')) {
                mkdir('uploads/Profile', 0777, true);
            }
            $image->move('uploads/Profile', $imagename);
        } else {
            $imagename = "default.png";
        }
        $profile->profilephoto=$imagename;

        
    DB::table('users')->where('id',$userId)->update(array('image' => $imagename));


        $profile->save();
        return redirect()->back();

    }
}
