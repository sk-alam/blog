<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("/bower_components/sweetalert2/dist/sweetalert2.min.css")}}" rel="stylesheet" type="text/css">
    </head>
    <body>
    @include('partials.nav')
    <div class="container" style="padding-top: 70px;">

        <div class="row">
            <div class="col-sm-12 col-md-12 main">
                @yield('title')
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 main">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{asset('/bower_components/sweetalert2/dist/sweetalert2.min.js')}}"></script>

    @yield('scripts')
    </body>
</html>
