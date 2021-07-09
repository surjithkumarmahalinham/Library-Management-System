<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title','Books')</title>
    <meta name="keywords" content="@yield('meta_keywords','Books')">
    <meta name="description" content="@yield('meta_desc','Books')">
        @include('layouts.head')
  </head>
<body>
    <!-- Begin page -->
        <div id="wrapper">
            @yield('content')
        </div>
    @include('layouts.footer-script')
    </body>
</html>
