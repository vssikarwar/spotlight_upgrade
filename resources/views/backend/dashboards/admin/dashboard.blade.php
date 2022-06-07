@extends('backend.dashboards.admin.layouts2.main')

@section('main-content') 

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="/publishers/publisher-dashboard/1" class="logo">
                    <span class="logo-mini"><b>S</b>PT</span>
                    <span class="logo-lg"><b>Spot</b>Light</span>
                </a>
                <nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

      


      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown messages-menu">
        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-envelope-o"></i>
          <span class="label label-success">4</span>
        </a> -->
        <ul class="dropdown-menu">
          <li class="header">You have 4 messages</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li><!-- start message -->
                <a href="#">
                  <div class="pull-left">
                    <img src="{{ asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image"/>                  </div>
                  <h4>
                    Support Team
                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                  </h4>
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
              <!-- end message -->
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="{{ asset('img/user3-128x128.jpg')}}" class="img-circle" alt="User Image"/>                  </div>
                  <h4>
                    AdminLTE Design Team
                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                  </h4>
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="{{ asset('img/user4-128x128.jpg')}}" class="img-circle" alt="User Image"/>                  </div>
                  <h4>
                    Developers
                    <small><i class="fa fa-clock-o"></i> Today</small>
                  </h4>
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="{{ asset('img/user3-128x128.jpg')}}" class="img-circle" alt="User Image"/>                  </div>
                  <h4>
                    Sales Department
                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                  </h4>
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="{{ asset('img/user4-128x128.jpg')}}" class="img-circle" alt="User Image"/>                  </div>
                  <h4>
                    Reviewers
                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                  </h4>
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="footer"><a href="#">See All Messages</a></li>
        </ul>
      </li>
      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">10</span>
        </a> -->
        <ul class="dropdown-menu">
          <li class="header">You have 10 notifications</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li>
                <a href="#">
                  <i class="fa fa-users text-aqua"></i> 5 new members joined today
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                  page and may cause design problems
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-users text-red"></i> 5 new members joined
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-user text-red"></i> You changed your username
                </a>
              </li>
            </ul>
          </li>
          <li class="footer"><a href="#">View all</a></li>
        </ul>
      </li>
      <!-- Tasks: style can be found in dropdown.less -->
      <li class="dropdown tasks-menu">
        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-flag-o"></i>
          <span class="label label-danger">9</span>
        </a> -->
        <ul class="dropdown-menu">
          <li class="header">You have 9 tasks</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Design some buttons
                    <small class="pull-right">20%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Create a nice theme
                    <small class="pull-right">40%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Some task I need to do
                    <small class="pull-right">60%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Make beautiful transitions
                    <small class="pull-right">80%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
            </ul>
          </li>
          <li class="footer">
            <a href="#">View all tasks</a>
          </li>
        </ul>
      </li>
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('img/user-default.png')}}" class="rounded-circle user-image" alt="User Image" height="37" width="37"/>
          <span class="hidden-xs">Admin</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            
            <img src="{{ asset('img/user-default.png')}}" class="rounded-circle user-image" alt="User Image" height="37" width="37"/>
            <p>
              Admin Spotlight              <small>Your last login time is 03-Jun-2022 01:13 PM<br/><br/>    </small>
            </p>
          </li>
          <!-- Menu Body -->
<!--          <li class="user-body">
            <div class="row">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>
             /.row 
          </li>-->
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              

              <a href="/myprofile" class="btn btn-default btn-flat">Profile</a>                 <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->

            </div>
            <div class="pull-right">
              <a href="/logout" class="btn btn-default btn-flat">Sign Out</a>                <!--<a href="" class="btn btn-default btn-flat">Sign out</a>-->
            </div>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <!-- <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li> -->
    </ul>
  </div>
</nav>

<script type="text/javascript" language="javascript">
function getClient(id)
    {
        if (id != '') {
            var urllink = '/publishers/publisher-dashboard/1';
			alert(urllink);
            urllink = urllink + '?'+'a_id=' + id;
            if (confirm("Are you sure! you want to clientID?")) {
                window.location=urllink;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }
</script>
            </header>
                <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
    <div class="pull-left image">
        
        <img src="{{ asset('img/user-default.png')}}" class="rounded-circle" alt="User Image" height="37" width="37"/>
    </div>
    <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
        </span>
    </div>
</form>
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
        <li class="treeview">
            <a href="#">
                <i class="fa fa-book"></i>
                <span>CMS</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/cms-categories" class="">Cms Categories</a></li>                <li><a href="/cms-pages" class="">Cms Pages</a></li>                <li><a href="/affinity-categories" class="">Affinity categories</a></li><li><a href="/product-categories" class="">Product categories</a></li><li><a href="/countries" class="">Countries</a></li><li><a href="/states" class="">States</a></li><li><a href="/cities" class="">Cities</a></li><li><a href="/languages" class="">Languages</a></li><li><a href="/country-language-mapping" class="">Languages Country Mapping</a></li><li><a href="/time-zones" class="">Timezones</a></li><li><a href="/currencies" class="">Currencies</a></li><li><a href="/mobile-app-categories" class="">Mobile App Categories</a></li><li><a href="/topics" class="">Topics</a></li><li><a href="/landingpage-themes" class="">Themes</a></li><li><a href="/call-to-action-logs" class="">Call To Action Logs</a></li><li><a href="/lms-api-data" class="">LMS API Data</a></li><li><a href="/customer-pincodes" class="">Customer Pincodes</a></li>            </ul>
        </li>
        <li class="treeview">
            <a href="https://testing.myspotlight.co/lead-attributes">
                <i class="fa fa-sitemap"></i>
                <span>Lead Attributes</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-exclamation"></i>
                <span>Alerts</span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/exponential-types" class="">Types</a></li>
                <li><a href="/exponential-tiers" class="">Tiers</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-sitemap"></i>
                <span>Ads</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/campaign-types" class="">Campaign Types</a></li><li><a href="/search-networks" class="">Search Networks</a></li><li><a href="/delivery-methods" class="">Delivery Method</a></li><li><a href="/bidding-strategies" class="">Bidding Strategy</a></li><li><a href="/ad-group-types" class="">Ad Group Types</a></li><li><a href="/meta-datas" class="">Metadata Types</a></li><li><a href="/promotion-occasions" class="">Promotion Occasions</a></li>            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-gear"></i>
                <span>Admin Settings</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/user_settings" class="">All Settings</a></li><li><a href="/user_settings/cakelog" class="">Cake Logs</a></li><li><a href="/deleteCache" class="">Delete Cache</a></li>            </ul>
        </li>
        <li class="treeview">
            <a href="https://testing.myspotlight.co/service-providers">
                <i class="fa fa-gear"></i>
                <span>Service Provider</span>
            </a>
        </li>
                <li class="treeview">
            <a href="https://testing.myspotlight.co/models">
                <i class="fa fa-gear"></i>
                <span>Models</span>
            </a>
        </li>
                <li class="treeview">
            <a href="#">
                <i class="fa fa-user"></i>
                <span>Users</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/users" class="">All Users</a></li><li><a href="/users?user_group_id=1" class="">Admin</a></li><li><a href="/users?user_group_id=6" class="">Api User</a></li><li><a href="/users?user_group_id=2" class="">Brand User</a></li><li><a href="/users?user_group_id=5" class="">Dealer User</a></li><li><a href="/users?user_group_id=3" class="">Dealers</a></li><li><a href="/users?user_group_id=9" class="">Report User</a></li><li><a href="/users?user_group_id=8" class="">Reports</a></li><li><a href="/users?user_group_id=4" class="">Support</a></li>            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-group"></i>
                <span>Group Permissions</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/permissionGroupMatrix" class="">Group Permissions</a></li><li><a href="/user_group_permissions/permissionSubGroupMatrix" class="">Subgroup Permissions</a></li>            </ul>
        </li>
        <li class="treeview"> 
            <a href="https://testing.myspotlight.co/email-templates">
                <i class="fa fa-laptop"></i>
                <span>Email Templates</span>
            </a> 
        </li>
    </ul>

    </section>
    <!-- /.sidebar -->
</aside>
                <div class="content-wrapper">
                    <section class="content-header">
                        <h1></h1>
                        <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>-->                    </section>
                    <div class="panel panel-primary">
	<div class="panel-heading">
		<span class="panel-title">
			Publisher Dashboard		</span>
	</div>
	<div class="panel-body dashboard-section">
Hello Admin Spotlight<br/><br/>Your last login time is 03-Jun-2022 01:13 PM<br/><br/>	</div>
    
    
</div>
                </div>
            <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> {{ App::VERSION() }}
    </div>
    <strong>Copyright &copy; 2022 <a href="{{url('/')}}">Singleinterface</a>.</strong> All rights
    reserved.
</footer>
<script>
           // saveBrowsingLogs();
            function saveBrowsingLogs(){
                var url = '/publishers/publisher-dashboard/1';
                var queryString = "url="+url;
                  jQuery.ajax({
                                    type: "POST",
                                    url: '{{url('/ajax/save-browsing-logs')}}',
                                    data: queryString,     
                                          
                                    success: function(data){                
            }
        });

    }
</script><aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-user bg-yellow"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                            <p>nora@example.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">50%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Other sets of options are available
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>
                <!-- /.form-group -->

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane --> 
    </div>
</aside>
            <div class="control-sidebar-bg"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script><script src="/admin_l_t_e/bootstrap/js/bootstrap.js"></script><script src="/admin_l_t_e/js/star-rating.js"></script><script src="/admin_l_t_e/plugins/slimScroll/jquery.slimscroll.min.js"></script><script src="/admin_l_t_e/plugins/fastclick/fastclick.js"></script><script src="/admin_l_t_e/js/AdminLTE.min.js"></script><script src="/admin_l_t_e/js/select2.min.js"></script><script src="/usermgmt/js/chosen/chosen.ajaxaddition.jquery.js?q=60820317"></script><script src="/admin_l_t_e/plugins/chartjs/Chart.min.js"></script><script src="/admin_l_t_e/js/jquery-ui-1.10.4.custom.min.js"></script><script src="/frontend/js/common.js"></script><script src="/frontend/js/form.submit.js"></script>        <script type="text/javascript">
            $(document).ready(function () {
                $(".navbar .menu").slimscroll({
                    height: "200px",
                    alwaysVisible: false,
                    size: "3px"
                }).css("width", "100%");

                var a = $('a[href="/publishers/publisher-dashboard/1"]');
                if (!a.parent().hasClass('treeview')) {
                    a.parent().addClass('active').parents('.treeview').addClass('active');
                }
            });
            $('.select2').select2();
        </script>
    </body>
</html>