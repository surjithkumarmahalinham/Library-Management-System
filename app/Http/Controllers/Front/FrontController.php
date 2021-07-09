<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use Redirect;
class FrontController extends Controller
{
    public function login()
    {
    	return view('front.login');
    }
    public function subscribestore(Request $request)
    {
    	$subs=new Subscriber();
    	$subs->book_id=$request->book_id;
    	$subs->user_id=$request->user_id;
    	$subs->save();
    	//dd($subs);
    	return Redirect::route('home')->with('success','Subscribed Successfully');
    }
}
