<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
        <title>Spotlight</title>
        <link href="{{ asset('img/spotlight.ico')}}" type="image/x-icon" rel="icon"/>
        <link href="{{ asset('img/spotlight.ico')}}" type="image/x-icon" rel="shortcut icon"/>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css?q=60820317') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style-new.css?q=60820317') }}"/>
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}"/>
        <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/sweetalert.js') }}"></script>
        <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script> 
        <script>
            var urlForJs = "https://testing.myspotlight.co/";
            var pageURL = "supportDashboard";
            var activeController = "Users";
            var activeMenu = "";
            var activeMenu2 = "";
            var clientId = "";
        </script>
    </head>
    <body>
        <div class="loader-div" style="display: none;"></div>
            <div class="message">
    </div>
                        <div class="app">
            
                        @include('backend.layouts.partials.navbar')


