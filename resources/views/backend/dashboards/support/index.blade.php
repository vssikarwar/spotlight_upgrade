

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Spotlight</title>
    <link href="{{ asset('img/spotlight.ico')}}" type="image/x-icon" rel="icon" />
    <link href="{{ asset('img/spotlight.ico')}}" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css?q=60820317') }}" />
    <link rel="stylesheet" href="{{ asset('css/style-new.css?q=60820317') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" />
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



        <div class="content-page" style="margin-left:0 !important;">
            <div class="content">
                <div class="container-fluid" style="width:60%;">
                    <div class="row support-card">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <h4 class="page-title ">Please connect ADS to create/manage campaigns</h4>
                                <div class="message"></div>
                            </div>
                        </div>
                        <!--col12-->
                        <div class="col-xl-6 col-md-6 text-center ">
                            <a class="mo-mb-2 " href="/users/">
                                <div class="card">
                                    <div class="card-body mini-stat-img">
                                        <div class="text-dark">
                                            <div class="icon_he">

                                                <img src="{{ asset('img/adminicon.png')}}" alt="google" />
                                            </div>
                                            <h5>Adminstrative</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-xl-6 col-md-6 text-center">
                            <a class="mo-mb-2" href="/users/listOfCustomers">
                                <div class="card">
                                    <div class="card-body mini-stat-img">
                                        <div class="text-dark">
                                            <div class="icon_he">

                                                <img src="{{ asset('img/customericon.png')}}" alt="google" />
                                            </div>
                                            <h5>Customers</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <script src="{{ URL::asset('js/common.js') }}"></script>
        <script src="{{ URL::asset('js/custom.js?q=60820317') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-select.min.js') }}"></script>
    </div>
</body>
</html>
