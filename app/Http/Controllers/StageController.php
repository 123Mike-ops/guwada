<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type;
use App\Food;
use App\Restaurant;
use App\Stage;
use Str;
use Carbon\Carbon;


class StageController extends Controller
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
    public function store(Request $request,$foodid,$restaurantid,$typeid,$number)
    {
         $stage=new Stage;

         $stage->foodid=$foodid;
         $stage->restaurantid=$restaurantid;
         $stage->typeid=$typeid;
            $stage->ingrident1=$request->ingrident1;
            $stage->ingrident2=$request->ingrident2;
            $stage->ingrident3=$request->ingrident3;
            $stage->ingrident4=$request->ingrident4;
            // $stage->description=$request->description;

            // $image = $request->file('image1');
            // $slug = Str::slug($request->name);
            // if (isset($image)) {
            //     $currentDate = Carbon::now()->toDateString();
            //     $imagename1= $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
     
            //     if (!file_exists('uploads/RecipeStage')) {
            //         mkdir('uploads/RecipeStage', 0777, true);
            //     }
                
            //     $image->move('uploads/RecipeStage', $imagename1);
            // } else {
            //     $imagename1 = "default.png";
            // }

            $image = $request->file('image1');
            $slug = Str::slug($request->name);
            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $imagename1= $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
     
                if (!file_exists('uploads/RecipeStage')) {
                    mkdir('uploads/RecipeStage', 0777, true);
                }
                
                $image->move('uploads/RecipeStage', $imagename1);
            } else {
                $imagename1 = "default.png";
            }

            $image = $request->file('image2');
            $slug = Str::slug($request->name);
            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $imagename2= $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
     
                if (!file_exists('uploads/RecipeStage')) {
                    mkdir('uploads/RecipeStage', 0777, true);
                }
                
                $image->move('uploads/RecipeStage', $imagename2);
            } else {
                $imagename2 = "default.png";
            }

            $image = $request->file('image3');
            $slug = Str::slug($request->name);
            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $imagename3= $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
     
                if (!file_exists('uploads/RecipeStage')) {
                    mkdir('uploads/RecipeStage', 0777, true);
                }
                
                $image->move('uploads/RecipeStage', $imagename3);
            } else {
                $imagename3 = "default.png";
            }

            $image = $request->file('image4');
            $slug = Str::slug($request->name);
            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $imagename4= $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
     
                if (!file_exists('uploads/RecipeStage')) {
                    mkdir('uploads/RecipeStage', 0777, true);
                }
                
                $image->move('uploads/RecipeStage', $imagename4);
            } else {
                $imagename4 = "default.png";
            }

            $stage->image1=$imagename1;
            $stage->image2=$imagename2;
            $stage->image3=$imagename3;
            $stage->image4=$imagename4;
            $stage->description=$request->description;

            $stage->save();

            if($number<4)

            return view('RestaurantAdmin.AddIngridentStage1')->with('foodid',$foodid)->with('restaurantid',$restaurantid)->with('typeid',$typeid)->with('number',$number+1);
           
            else
            return redirect()->route('restaurantadmin.dashboard');




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
