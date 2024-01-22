<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Drink;
use App\Type;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function GuestIndex()
    {
    
        $mydrink = Drink::all();

        $myfood= Food::all();
        $types=Type::all();




        return view ('Guest.Index')->with('myfood',$myfood)->with('mydrink',$mydrink)->with('types',$types);
    }
    /**s
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $mydrink= Drink::find(1);
        
        $mydrink = Drink::all();

        $myfood= Food::all();

        return view('MainBox.Chooser')->with('mydrink',$mydrink)->with('myfood',$myfood);

        // return view('MainBox.chooser');
    }
}
