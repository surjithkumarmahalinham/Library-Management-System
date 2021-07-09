@extends('layouts.master')

@section('css')
        <!-- DataTables -->
        <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ URL::asset('assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
            <div class="container-fluid">
               
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Books</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('book.index')}}">Books</a></li>


                                    </ol>
                                <div class="state-information d-none d-sm-block">
                     <div class="btn-group pull-right">
                    <a href="{{ route('book.create') }}" class="btn btn-primary btn-lg waves-effect waves-light float-left" >
                        Create
                    </a>
                </div>
               </div>

                                </div>
                            </div>
                        </div><br>
                        <!-- end row -->
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
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">Books</h4>


                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>S. NO</th>
                                                <th>Book Name</th>
                                                <th>Author</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Action </th>


                                            </tr>
                                            </thead>


                                            <tbody>
                                            <?php $i = 0 ?>
                                            <?php if (isset($book)): ?>
                                            <?php foreach ($book as $data): ?>
                                                <?php $i++ ?>
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$data->book_name}}</td>
                                                <td>{{$data->author}}</td>
                                                <td>{{$data->price}}</td>
                                                @if($data->image)
                                                <td><img src="/images/books/{{ $data->image}}" style="width: 50px;height: 50px;" /></td>
                                                @else
                                                <td><h5>no image</h5></td>
                                                @endif
                                               <td> <div class="btn-group">
                                        <a href="{{route('book.edit',$data->id)}}" class="btn btn-primary btn-flat"><i class="ion-edit"></i></a>
                                        <button class="btn btn-danger btn-flat" data-toggle="modal" data-message="Are you Sure You Want to Delete This Book Record ?" data-target="#modal-delete-confirmation" data-action-target="{{route('book.delete',$data->id)}}"><i class="fa fa-trash"></i></button>
                                    </div>
                          </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>


                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <!-- end row -->



                    </div> <!-- container-fluid -->
@endsection

@section('script')
        <!-- Required datatable js -->
        <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{ URL::asset('assets/pages/datatables.init.js')}}"></script>
@endsection