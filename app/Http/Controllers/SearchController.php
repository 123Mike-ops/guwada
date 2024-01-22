<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Drink;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function find(Request $request){
        $mydrink = Drink::all();

        $myfood= Food::all();

    

        $q = $request->input( 'q' );
        $foodfound = Food::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
    
        if(count($foodfound) > 0)
            return view('MainBox.Chooser')->withDetails($foodfound)->with('query', $q )->with('myfood',$myfood)->with('mydrink',$mydrink);
        else return view ('MainBox.Chooser')->withMessage('No foods found. Try to search again !')->with('myfood',$myfood)->with('mydrink',$mydrink)->with('query', $q );
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
