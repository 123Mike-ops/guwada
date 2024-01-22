<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use DB;
use Str;
use Carbon\Carbon;
use Redirect;


class MessageController extends Controller
{
    //
    public function storeMessage(Request $request,$restId,$userId){


        $message=new Message;
        $message->userId=$userId;
        $name=DB::table('users')->select('name')->where('id',$userId)->value('name');
        $message->name=$name;
        $message->restId=$restId;
        $message->message=$request->message;

        $message->save();
      
        

        


    }
}
