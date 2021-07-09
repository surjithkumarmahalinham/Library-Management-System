<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use Redirect;
use Image;

class BookController extends Controller
{
     public function index()
    {
        $book=Book::all();
        return view('admin.book.index',compact('book'));
    }
    public function create()
    {
        return view('admin.book.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'book_name'=>'required|unique:books,book_name',
            'price'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            'status'=>'required'
        ]);

        $book=new Book();
        //dd($book);
        $book->book_name=$request->book_name;
        $book->price=$request->price;
        $book->author=$request->author;
        $book->status=$request->status;
        $book->meta_title=$request->meta_title;
        $book->meta_desc=$request->meta_desc;
        $book->meta_key=$request->meta_key;
        
        //book image start
        if($request->hasFile('image')) {
            $image       = $request->file('image');
            $filename    = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(300, 300);
            $image_resize->save(public_path('/images/books/' .$filename));
        }
        //book image end

        $book->image=$filename;
        $book->save();
        return Redirect::route('book.index')->with('success','Book Added Successfully');
    }
    public function edit($id)
    {
        $book=Book::find($id);
        return view('admin.book.edit',compact('book'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'book_name'=>'required',
            'price'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            'status'=>'required'
        ]);

        $book=Book::find($id);
        //dd($book);
        $book->book_name=$request->book_name;
        $book->price=$request->price;
        $book->author=$request->author;
        $book->status=$request->status;
        $book->meta_title=$request->meta_title;
        $book->meta_desc=$request->meta_desc;
        $book->meta_key=$request->meta_key;
        
        //book image start
        if($request->hasFile('image')) {
            $image       = $request->file('image');
            $filename    = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(300, 300);
            $image_resize->save(public_path('/images/books/' .$filename));
	        $book->image=$filename;
	        }
	        else{
	            $book->image;
	        }
        //book image end

        $book->image=$book->image;
        $book->update();
        return Redirect::route('book.index')->with('success','Book Updated Successfully');
    }
    public function destroy($id)
    {
        $book=Book::find($id);
        $book->delete();
        return Redirect::route('book.index')->with('success','Book Deleted Successfully');
    }
}
