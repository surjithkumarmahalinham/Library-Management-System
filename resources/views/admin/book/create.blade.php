@extends('layouts.master')

@section('content')
            <div class="container-fluid">
                @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Books</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('book.index')}}">Books</a></li>
                                       <li class="breadcrumb-item active">Add Book</li>
                                    </ol>


                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <form method="post" class="book" action="{{ route('book.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                <div class="card m-b-20">
                                    <div class="card-body">

                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                <div class="form-group">
                                <label>Book Name</label>
                                <input id="book_name" type="text" class="form-control" name="book_name" value="" required placeholder="Book Name">
                                @if($errors->first('book_name'))
                                    <div class="alert-danger">{{$errors->first('book_name')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="form-group">
                                <label>Price</label>
                                <input id="price" type="number" class="form-control" name="price" value="" required placeholder="Price">
                                @if($errors->first('price'))
                                    <div class="alert-danger">{{$errors->first('price')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="form-group">
                                <label>Author</label>
                                <input id="author" type="text" class="form-control" name="author" value="" required placeholder="Author">
                                @if($errors->first('author'))
                                    <div class="alert-danger">{{$errors->first('author')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <label>Book Image</label>
                                <input id="Image" type="file" class="form-control" name="image" required="">
                                <label style="font-size: smaller;color: red;">Format: png, jpeg, jpg</label>
                                @if($errors->first('image'))
                                    <div class="alert-danger">{{$errors->first('image')}}</div>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                <div class="form-group">
                                <label>Status</label>
                                    <input id="status" type="checkbox"class="form-control" name="status" value="1" required placeholder="Category Name">
                                    @if($errors->first('status'))
                                    <div class="alert-danger">{{$errors->first('status')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <label>Meta Title</label>
                                <input id="meta_title" type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" value="" placeholder="Title">
                                @if($errors->first('meta_title'))
                                    <div class="alert-danger">{{$errors->first('meta_title')}}</div>
                                    @endif
                                </div>
                       
                                <div class="col-md-3">
                                  <label>Meta Keywords</label>
                                    <input id="meta_key" type="text" class="form-control @error('meta_key') is-invalid @enderror" name="meta_key" placeholder="Keywords">
                                    @if($errors->first('meta_key'))
                                    <div class="alert-danger">{{$errors->first('meta_key')}}</div>
                                    @endif
                                </div>
                                 <div class="col-md-3">
                                  <label>Meta Description</label>
                                  <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                    <textarea class="form-control" name="meta_desc"></textarea>
                                    @if($errors->first('meta_desc'))
                                    <div class="alert-danger">{{$errors->first('meta_desc')}}</div>
                                    @endif
                                  </div>
                               </div>
                                </div>
                                <br>
                                <div class="">
                                        <button type="submit" class="btn btn-primary btn-lg  text-white">Create</button>
                    <a href="{{route('book.index')}}">
                    <button type="button" class="btn btn-danger btn-lg float-right text-white ">Close</button></a>
                          </div>






                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

        </form>
                    </div> <!-- container-fluid -->


<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
<script>
CKEDITOR.replace( 'product-ckeditor' );
</script>
@endsection
