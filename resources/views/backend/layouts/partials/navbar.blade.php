
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-5 d-flex align-self-center-all position-static">
                <div class="log-div">
                    <a href="/dashboard" class="logo">
                    <img src="{{ asset('img/logo.png')}}" alt=""/>                   </a>

                </div>
                                                </div>
            <div class="col-10 col-md-7 text-right">
                <ul class="account-control text-right">
       
    <li class="profile-pic top-menu">
        <a href="#" id="profile-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  title="">
            <img src="{{ asset('img/user-default.png')}}" class="rounded-circle" alt="User Image" height="37" width="37"/>        </a>
        <div class="dropdown-menu profile-link border bdrr-14 overflow-hidden" aria-labelledby="profile-control" >
            <div class="dropdown-item bgf8f9fb">
                <div class="name">{{auth()->user()->name}}</div>
                <div class="ema">{{auth()->user()->email}}</div>
            </div>
            <div class="dropdown-divider"></div>
            <a href="users/{{auth()->user()->id}}/show" class="dropdown-item">My Profile</a>
            <a href="/changePassword" class="dropdown-item">Change Password</a>            <div class="dropdown-divider"></div>
            <a href="/logout" class="dropdown-item error bgf8f9fb"><i class="sl-icn logout no-round red"></i><span>Logout</span></a>        </div>
    </li>
</ul>            </div>
        </div>
    </div>
    <div class="bar-loader" style="display:none;"><span class="bar-loader-bar"></span></div>
</header> 