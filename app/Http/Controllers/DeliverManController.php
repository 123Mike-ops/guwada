<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DeliverMan;
use App\Restaurant;
use Str;
use Carbon\Carbon;
use DB;
use App\Food;
use App\Image;
use Session;


class DeliverManController extends Controller
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
        return view ('Admin.AddDriver');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $deliverMan=new DeliverMan;
            $deliverMan->name=$request->name;
            $deliverMan->email=$request->email;
            $deliverMan->phone=$request->phone;
            $deliverMan->password=$request->password;



         
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
            $deliverMan->image=$imagename;




            $deliverMan->vehicleType=$request->vehicleType;
            $deliverMan->targaNumber=$request->targaNumber;



            
            $image = $request->file('vehicleImage');
            $slug = Str::slug($request->name);
            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $vehicleImage = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
     
                if (!file_exists('uploads/Restaurant')) {
                    mkdir('uploads/Restaurant', 0777, true);
                }
                
                $image->move('uploads/Restaurant', $vehicleImage);
            } else {
                $vehicleImage = "default.png";
            }
            $deliverMan->vehicleImage= $vehicleImage;



            $deliverMan->address=$request->address;


        
            $image = $request->file('DrivingLicenceImage');
            $slug = Str::slug($request->name);
            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $DrivingLicenceImage = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
     
                if (!file_exists('uploads/Restaurant')) {
                    mkdir('uploads/Restaurant', 0777, true);
                }
                
                $image->move('uploads/Restaurant', $DrivingLicenceImage);
            } else {
                $DrivingLicenceImage = "default.png";
            }
            $deliverMan->DrivingLicenceImage=$DrivingLicenceImage;



        
            $image = $request->file('LegalIdImage');
            $slug = Str::slug($request->name);
            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $LegalIdImage = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
     
                if (!file_exists('uploads/Restaurant')) {
                    mkdir('uploads/Restaurant', 0777, true);
                }
                
                $image->move('uploads/Restaurant', $LegalIdImage);
            } else {
                $LegalIdImage= "default.png";
            }
            $deliverMan->LegalIdImage=$LegalIdImage;

            $deliverMan->save();
            return redirect()->back();

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
