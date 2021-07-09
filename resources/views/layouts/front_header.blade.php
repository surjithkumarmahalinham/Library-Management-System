<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Book</title>
    <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
   <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head><!--/head-->

<body>
  <header id="header"><!--header-->
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo pull-left">
              <a href="{{route('home')}}"><h2 style="margin-top: -10px;">Books Availabe</h2></a>
            </div>
            </div>
          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                @if (Auth::user())
                
              <ul class="nav navbar-nav collapse navbar-collapse">
                <li class="dropdown"><a href="#">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    <li><a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}" style="color:orange;">Log out</a>
                                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                                    </ul>
                                </li> 
                              </ul>
                            </div>
                        @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->
  </header><!--/header-->