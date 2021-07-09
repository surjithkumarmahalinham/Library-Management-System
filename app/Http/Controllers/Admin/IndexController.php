<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;

class IndexController extends Controller
{
    public function subscriber()
    {
    	$subscriber=Subscriber::leftJoin('books','subscribers.book_id','=','books.id')->leftJoin('users','subscribers.user_id','=','users.id')->select('books.book_name as bname','users.name as uname','subscribers.*')->get();
    	return view('admin.subscriber',compact('subscriber'));
    }
}
