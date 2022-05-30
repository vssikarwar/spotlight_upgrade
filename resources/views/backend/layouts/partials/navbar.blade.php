<!-- <header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Home</a></li>
        @auth
          @role('Admin')
          <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Users</a></li>
          <li><a href="{{ route('roles.index') }}" class="nav-link px-2 text-white">Roles</a></li>
          @endrole
          <li><a href="{{ route('posts.index') }}" class="nav-link px-2 text-white">Posts</a></li>
        @endauth
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>

      @auth
        {{auth()->user()->name}}&nbsp;
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header> -->



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