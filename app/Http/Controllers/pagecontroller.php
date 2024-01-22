<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\food;

class pagecontroller extends Controller
{
    //
    
   public function index(){
       return view('EnatHome.index2');
   }
    
   public function Guest(){
    $myfood=Food::all();

    return view('Guest.Index')->with('myfood',$myfood);
}
   
   public function GuestHome(){
       return view('Guest.Home');
   }
  
public function admin_login(){
    return view('Admin.login');
}
 
   
    // public function index2(){
    //     return view('EnatHome.index2');
    // }
  
    public function startcook(){

        return view('Mainbox.startcook');
    }
 
   
   

   
    public function mainkitchen(){
        return view('Mainbox.mainkitchen');
    }
    public function getthemeal(){
        return view('Mainbox.getthemeal');
    }
    public function reservation(){
        return view('Mainbox.reservation');
    }

    public function order(){
        return view('Mainbox.order');
    }
    
}
