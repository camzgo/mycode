<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sample.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container" id="bcont">
            @include('inc.messages')
            @yield('content')
        </div>  
    </div>


</body>
</html>



    
    {{-- Scripts --}}
   
    {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script> --}}
     {{-- <script src="/ckeditor/ckeditor.js"/> --}}
    {{-- <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script> --}}
    {{-- <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script> --}}



    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="{{node_modules('bootstrap/dist/js/bootstrap.min.js')}}"></script> --}}
    {{-- <script src = "{{asset('js/bootstrap.js')}}"></script> --}}
    {{-- <script src="{{url('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('node_modules/popper.js/dist/popper.min.js')}}"></script>
    <script src="{{url('node_modules/jquery/dist/jquery.slim.min.js')}}"></script> --}}
