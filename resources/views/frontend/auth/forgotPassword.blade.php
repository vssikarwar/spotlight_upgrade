@extends('frontend.auth.layouts.main')

@section('main-container')

    <body class="login">
        <div class="wrapper-page">
    <div class="card m-2 full-height-login">
        <div class="card-body">
            <h3 class="text-center m-0">
                <a href="{{url('/')}}" class="logo logo-admin">
                    <img src="{{ asset('img/logo.png')}}" height="50" alt="logo"/>                </a>
            </h3>
            <div class="p-3">
                <h4 class="text-muted font-18 m-b-5 text-center">Forgot Password</h4>
                <div class="alert alert-info-box" role="alert">Enter your Email/Username to recieve link to change your password.</div>
                <div class="message">
    </div>
                <form method="post" accept-charset="utf-8" class="form-horizontal  m-t-30" id="fp-Form" data-link="forgotPassword" action="/forgotPassword"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="56d6b5cae07dfd08ecc6547dc4cfbb51483040b759d7d8774ff5bc43a75baecb3e1997ec5df7bca8ef1942944c73dde6a76eef9c215b185a9090756ec5b0745d"/></div>                    <div class="form-group">
                        <label>Email/Username</label>
                        <div class="input text"><input type="text" name="Users[email]" class="form-control" placeholder="Enter email/Username" autocomplete="off" maxlength="100" id="users-email"/></div>                    </div>
                                        <div class="form-group row m-t-20">
                        <div class="col-12 text-right">
                           <button type="submit" class="btn btn-dark-blue submit-btn" id="fp-submit">Send reset password link</button>
                        </div>
                        <div class="form-group m-t-10 mb-0">
                            <div class="col-12 m-t-20">
                                <a href="/login" title="Login" class="text-muted"><i class="mdi mdi-lock"></i>Login</a>                            </div>
                        </div>

                    </div>
                <!--</form>-->
                <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="cfaf67a73a360fd4a6bcafc94f897acc2523bd95%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form>            </div>
        </div>
    </div>
</div>
@endsection
