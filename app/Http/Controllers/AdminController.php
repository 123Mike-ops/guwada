<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;
use Session;

class AdminController extends Controller
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

    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User;

        $CompanyName=$request->input('CompanyName');
        
        $Phone=$request->input('phone');
        // $UserRole=$request->input('adminType');

           $AdminFor=$request->TypeOfCompany;
           
           

        DB::table('users')
            ->where('phone',$Phone) 
            ->update(array('status' =>$CompanyName,'userRole'=>$AdminFor));
        

            return redirect()->route('Add.Admins');
          
           
    }
    public function CreateAdmins()
    {
           return view('Admin.AddAdmins');
    }

    public function adminpage(){
    
        $restaurants=Restaurant::all();
        $userNumber=DB::table('users')->where('userRole',"user")->count();
        $RestaurantNumber=DB::table('restaurants')->count();


        return view('Admin.dashboard')->with('restaurants',$restaurants)->with('NumberOfCustomer',$userNumber)->with('RestaurantNumber',$RestaurantNumber);

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
    public function confirm(Request $request)
    {
            $AdminFor=$request->input('AdminAs');
            
            $phone=$request->input('phone');
            $user=DB::table('users')->where('phone',$phone)->get();

            $AdminTo = DB::table($AdminFor)->get();
            
            return view ('Admin.ConfirmAddAdmin')->with('TypeOfCompany',$AdminFor)->with('ToWhatCompany',$AdminTo)->with('phone',$phone)->with('user',$user);

       
            Session::flash('success','successfuly create Admin');
            


    }
        //
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
