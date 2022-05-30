@extends('frontend.auth.layouts.main')

@section('main-container')

    <body class="login">
        <div class="wrapper-page-1">
    <div class="card full-height-login m-2">
        <div class="card-body ">
            <h3 class="text-center m-0">
                <a class="logo logo-admin" href="{{url('/')}}"><img src="{{ asset('img/logo.png')}}" height="50" alt="logo"/></a>
            </h3>
            <div class="p-3">
                <h4 class="text-muted font-18 m-0 text-center">Sign In</h4>
                <p class="text-muted text-center">with your social account</p>
                    <div class="form-group">
        <ul class="social social-login">
                                 <button id="login-google" class="google flaticon-googleplus button" style="width:100%;background-color: transparent;border: none;" onclick ="javascript:isLogin('gmail');return false;" >
                        <!-- <i class=" flaticon-google-plus-symbol"></i><span>Sign in with Google</span> -->
                        <img src="{{ asset('img/btn_google_signin.png')}}" height="50" alt="logo"/>                    </button>
                </li>
                                </ul>
    </div>


            <form method="post" action="{{ route('login.perform') }}" accept-charset="utf-8" id="login-form" class="form-horizontal m-t-30" data-link="login">


            <div style="display:none;">
                <!-- <input type="hidden" name="_method" value="POST"/> -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </div> 
            <div class="form-group text-center">OR</div>
                <div class="message">
                    @include('backend.layouts.partials.messages')
                 </div>

        <div class="form-group">
            <label for="users-email">Email/Username</label>
            <div class="input text">   <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Enter Email/Username" autocomplete="off" maxlength="100" id="users-email">
           
            @if ($errors->has('username'))

            <small class="text text-danger" style="display: inline-block;">

                <span class="text-danger text-left">{{ $errors->first('username') }}</span>

            </small>

            @endif
        </div>      </div>
        
        <div class="form-group">
            <label for="users-password">Password</label>
            <div class="input password">  <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Enter Password" autocomplete="off" id="users-password">
                       

            @if ($errors->has('password'))
            <small class="text text-danger" style="display: inline-block;">
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            </small>
            @endif

        </div>   </div>

        <!-- <div class="form-group mb-3">
            <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" value="1">
        </div> -->

        <div class="row">
        <div class="col-6">
            <div class="custom-control custom-checkbox">
                <div class="input checkbox">
                    <input type="hidden" name="remember" value="0"/>
                    <input type="checkbox" name="remember" value="1" class="custom-control-input" id="customControlInline">
                </div>                      
            </div>
        </div>

        <div class="col-6 text-right">
            <button class="btn btn-dark-blue w-md" type="submit" id="login-submit" >Login</button>
        </div>
        </div>
        </div>


        <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20">
                        <a href="{{url('/forgotPassword')}}" title="Forgot Password" class="text-muted"><i class="mdi mdi-lock"></i>Forgot your password?</a>                    </div>
                </div>
                <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="{{ csrf_token() }}"/>
                <input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div>
            
        
       
    </form>


                 </div>
        </div>
    </div>
</div>


@endsection