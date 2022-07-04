
<!DOCTYPE html>
<html>
    <head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            SpotLight        </title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="/admin_l_t_e/bootstrap/css/bootstrap.css"/>        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
        <link href="/favicon.ico" type="image/x-icon" rel="icon"/><link href="/favicon.ico" type="image/x-icon" rel="shortcut icon"/>        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <script language="javascript">
            var urlForJs = "https://testing.myspotlight.co/";
            var pageURL = "cities/add";
            var activeMenu = "";
            var activeMenu2 = "";
        </script>
        <link rel="stylesheet" href="/admin_l_t_e/css/select2.min.css"/><link rel="stylesheet" href="/admin_l_t_e/css/bootstrap-tokenfield.css"/><link rel="stylesheet" href="/usermgmt/css/umstyle.css?q=60820317"/><link rel="stylesheet" href="/plugins/chosen/chosen.min.css?q=60820317"/><link rel="stylesheet" href="/frontend/css/sweetalert.css"/><link rel="stylesheet" href="/admin_l_t_e/plugins/colorpicker/bootstrap-colorpicker.css"/><link rel="stylesheet" href="/admin_l_t_e/css/AdminLTE.min.css?q=60820317"/><link rel="stylesheet" href="/admin_l_t_e/css/skins/skin-blue.css"/>        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="/usermgmt/js/umscript.js?q=60820317"></script><script src="/usermgmt/js/ajaxValidation.js?q=60820317"></script><script src="/plugins/chosen/chosen.jquery.min.js?q=60820317"></script><script src="/admin_l_t_e/plugins/colorpicker/bootstrap-colorpicker.js"></script><script src="/frontend/js/sweetalert.js"></script>        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
        <style>
            form label.error, span.help-inline{
                color: #f00;
                font-weight: 400;
                border-width: 0px;
                font-size: 12px;
            }

        </style>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="/dashboard" class="logo">
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
                    <img src="/admin_l_t_e/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>                  </div>
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
                    <img src="/admin_l_t_e/img/user3-128x128.jpg" class="img-circle" alt="User Image"/>                  </div>
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
                    <img src="/admin_l_t_e/img/user4-128x128.jpg" class="img-circle" alt="User Image"/>                  </div>
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
                    <img src="/admin_l_t_e/img/user3-128x128.jpg" class="img-circle" alt="User Image"/>                  </div>
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
                    <img src="/admin_l_t_e/img/user4-128x128.jpg" class="img-circle" alt="User Image"/>                  </div>
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
                    <img src="/frontend/img/user-default.png" class="rounded-circle user-image" alt="User Image" height="37" width="37"/>
          <span class="hidden-xs">Admin</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            
            <img src="/frontend/img/user-default.png" class="rounded-circle user-image" alt="User Image" height="37" width="37"/>
            <p>
              Admin Spotlight              <small>Your last login time is 01-Jul-2022 11:06 AM<br/><br/>    </small>
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
            var urllink = '/cities/add';
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
        
        <img src="/frontend/img/user-default.png" class="rounded-circle" alt="User Image" height="37" width="37"/>
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
            <a href="https://testing.myspotlight.co/landing-pages/list">
                <i class="fa fa-list"></i>
                <span>Landing Pages</span>
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
                    <section class="content-header">    
    <a href="/cities" class="btn btn-success">List Cities</a>    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>--></section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">  

                    
                    <form method="post" accept-charset="utf-8" action="/cities/add"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>                    <fieldset>
                        <legend>New City</legend>
                        <div class="row">

                            <div class="form-group col-md-12">
                                <label class="control-label required">Countries</label>
                                <div class="input select"><select name="country_id" class="form-control" id="country-id"><option value="1">Afghanistan</option><option value="2">Ã…land Islands</option><option value="3">Albania</option><option value="4">Algeria</option><option value="5">American Samoa</option><option value="6">Andorra</option><option value="7">Angola</option><option value="8">Anguilla</option><option value="9">Antarctica</option><option value="10">Antigua and Barbuda</option><option value="11">Argentina</option><option value="12">Armenia</option><option value="13">Aruba</option><option value="14">Australia</option><option value="15">Austria</option><option value="16">Azerbaijan</option><option value="17">Bahamas</option><option value="18">Bahrain</option><option value="19">Bangladesh</option><option value="20">Barbados</option><option value="21">Belarus</option><option value="22">Belgium</option><option value="23">Belize</option><option value="24">Benin</option><option value="25">Bermuda</option><option value="26">Bhutan</option><option value="27">Bolivia (Plurinational State of)</option><option value="28">Bonaire, Sint Eustatius and Saba</option><option value="29">Bosnia and Herzegovina</option><option value="30">Botswana</option><option value="31">Bouvet Island</option><option value="32">Brazil</option><option value="33">British Indian Ocean Territory</option><option value="34">Brunei Darussalam</option><option value="35">Bulgaria</option><option value="36">Burkina Faso</option><option value="37">Burundi</option><option value="38">Cabo Verde</option><option value="39">Cambodia</option><option value="40">Cameroon</option><option value="41">Canada</option><option value="42">Cayman Islands</option><option value="43">Central African Republic</option><option value="44">Chad</option><option value="45">Chile</option><option value="46">China</option><option value="47">Christmas Island</option><option value="48">Cocos (Keeling) Islands</option><option value="49">Colombia</option><option value="50">Comoros</option><option value="51">Congo</option><option value="52">Congo (Democratic Republic of the)</option><option value="53">Cook Islands</option><option value="54">Costa Rica</option><option value="55">CÃ´te d&#039;Ivoire</option><option value="56">Croatia</option><option value="57">Cuba</option><option value="58">CuraÃ§ao</option><option value="59">Cyprus</option><option value="60">Czechia</option><option value="61">Denmark</option><option value="62">Djibouti</option><option value="63">Dominica</option><option value="64">Dominican Republic</option><option value="65">Ecuador</option><option value="66">Egypt</option><option value="67">El Salvador</option><option value="68">Equatorial Guinea</option><option value="69">Eritrea</option><option value="70">Estonia</option><option value="71">Eswatini</option><option value="72">Ethiopia</option><option value="73">Falkland Islands (Malvinas)</option><option value="74">Faroe Islands</option><option value="75">Fiji</option><option value="76">Finland</option><option value="77">France</option><option value="78">French Guiana</option><option value="79">French Polynesia</option><option value="80">French Southern Territories</option><option value="81">Gabon</option><option value="82">Gambia</option><option value="83">Georgia</option><option value="84">Germany</option><option value="85">Ghana</option><option value="86">Gibraltar</option><option value="87">Greece</option><option value="88">Greenland</option><option value="89">Grenada</option><option value="90">Guadeloupe</option><option value="91">Guam</option><option value="92">Guatemala</option><option value="93">Guernsey</option><option value="94">Guinea</option><option value="95">Guinea-Bissau</option><option value="96">Guyana</option><option value="97">Haiti</option><option value="98">Heard Island and McDonald Islands</option><option value="99">Holy See</option><option value="100">Honduras</option><option value="101">Hong Kong</option><option value="102">Hungary</option><option value="103">Iceland</option><option value="104">India</option><option value="105">Indonesia</option><option value="106">Iran (Islamic Republic of)</option><option value="107">Iraq</option><option value="108">Ireland</option><option value="109">Isle of Man</option><option value="110">Israel</option><option value="111">Italy</option><option value="112">Jamaica</option><option value="113">Japan</option><option value="114">Jersey</option><option value="115">Jordan</option><option value="116">Kazakhstan</option><option value="117">Kenya</option><option value="118">Kiribati</option><option value="119">Korea (Democratic People&#039;s Republic of)</option><option value="120">Korea (Republic of)</option><option value="121">Kuwait</option><option value="122">Kyrgyzstan</option><option value="123">Lao People&#039;s Democratic Republic</option><option value="124">Latvia</option><option value="125">Lebanon</option><option value="126">Lesotho</option><option value="127">Liberia</option><option value="128">Libya</option><option value="129">Liechtenstein</option><option value="130">Lithuania</option><option value="131">Luxembourg</option><option value="132">Macao</option><option value="133">Macedonia (the former Yugoslav Republic of)</option><option value="134">Madagascar</option><option value="135">Malawi</option><option value="136">Malaysia</option><option value="137">Maldives</option><option value="138">Mali</option><option value="139">Malta</option><option value="140">Marshall Islands</option><option value="141">Martinique</option><option value="142">Mauritania</option><option value="143">Mauritius</option><option value="144">Mayotte</option><option value="145">Mexico</option><option value="146">Micronesia (Federated States of)</option><option value="147">Moldova (Republic of)</option><option value="148">Monaco</option><option value="149">Mongolia</option><option value="150">Montenegro</option><option value="151">Montserrat</option><option value="152">Morocco</option><option value="153">Mozambique</option><option value="154">Myanmar</option><option value="155">Namibia</option><option value="156">Nauru</option><option value="157">Nepal</option><option value="158">Netherlands</option><option value="159">New Caledonia</option><option value="160">New Zealand</option><option value="161">Nicaragua</option><option value="162">Niger</option><option value="163">Nigeria</option><option value="164">Niue</option><option value="165">Norfolk Island</option><option value="166">Northern Mariana Islands</option><option value="167">Norway</option><option value="168">Oman</option><option value="169">Pakistan</option><option value="170">Palau</option><option value="171">Palestine, State of</option><option value="172">Panama</option><option value="173">Papua New Guinea</option><option value="174">Paraguay</option><option value="175">Peru</option><option value="176">Philippines</option><option value="177">Pitcairn</option><option value="178">Poland</option><option value="179">Portugal</option><option value="180">Puerto Rico</option><option value="181">Qatar</option><option value="182">RÃ©union</option><option value="183">Romania</option><option value="184">Russian Federation</option><option value="185">Rwanda</option><option value="186">Saint BarthÃ©lemy</option><option value="187">Saint Helena, Ascension and Tristan da Cunha</option><option value="188">Saint Kitts and Nevis</option><option value="189">Saint Lucia</option><option value="190">Saint Martin (French part)</option><option value="191">Saint Pierre and Miquelon</option><option value="192">Saint Vincent and the Grenadines</option><option value="193">Samoa</option><option value="194">San Marino</option><option value="195">Sao Tome and Principe</option><option value="196">Saudi Arabia</option><option value="197">Senegal</option><option value="198">Serbia</option><option value="199">Seychelles</option><option value="200">Sierra Leone</option></select></div>                            </div>

                           <!--  <div class="form-group col-md-6">
                                <label class="control-label required"></label>
                                                            </div> -->
 

                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                                <label class="control-label required">State</label>
                                <div class="input select"><select name="state_id" class="form-control" id="state-id"><option value="1">Delhi</option><option value="2">Uttar Pradesh</option><option value="3">Haryana</option><option value="4">Andaman &amp; Nicobar Islands</option><option value="5">Andhra Pradesh</option><option value="6">Arunachal Pradesh</option><option value="7">Assam</option><option value="8">Bihar</option><option value="9">Chandigarh</option><option value="10">Chattisgarh</option><option value="11">Dadra &amp; Nagar Haveli</option><option value="12">Daman &amp; Diu</option><option value="13">Goa</option><option value="14">Gujarat</option><option value="15">Himachal Pradesh</option><option value="16">Jammu &amp; Kashmir</option><option value="17">Jharkhand</option><option value="18">Karnataka</option><option value="19">Kerala</option><option value="20">Lakshadweep</option><option value="21">Madhya Pradesh</option><option value="22">Maharashtra</option><option value="23">Manipur</option><option value="24">Meghalaya</option><option value="25">Mizoram</option><option value="26">Nagaland</option><option value="27">Orissa</option><option value="28">Pondicherry</option><option value="29">Punjab</option><option value="30">Rajasthan</option><option value="31">Sikkim</option><option value="32">Tamil Nadu</option><option value="33">Tripura</option><option value="34">Uttarakhand</option><option value="35">West Bengal</option><option value="36">Telangana</option><option value="37">Odisha</option><option value="38">Chhattisgarh</option></select></div>                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label required">City Name</label>
                                <div class="input text"><input type="text" name="name" class="form-control" maxlength="30" id="name"/></div>                            </div>
 

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">                                
                                <div class="input checkbox"><input type="hidden" name="active" value="0"/><label for="active"><input type="checkbox" name="active" value="1" id="active" checked="checked">Active</label></div>                            </div>
                        </div>
                    </fieldset>
                     <button class="btn btn-primary" type="submit">Submit</button>
                     <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="3687f9cda8e18b854e4ea3a7a6e0866db2c88d57%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form>                </div>
            </div>
        </div>
    </div>
</section>
                </div>
            <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.11
    </div>
    <strong>Copyright &copy; 2022 <a href="http://www.singleinterface.com">Singleinterface</a>.</strong> All rights
    reserved.
</footer>
<script>
           // saveBrowsingLogs();
            function saveBrowsingLogs(){
                var url = '/cities/add';
                var queryString = "url="+url;
                  jQuery.ajax({
                                    type: "POST",
                                    url: 'https://testing.myspotlight.co/ajax/save-browsing-logs',
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

                var a = $('a[href="/cities/add"]');
                if (!a.parent().hasClass('treeview')) {
                    a.parent().addClass('active').parents('.treeview').addClass('active');
                }
            });
            $('.select2').select2();
        </script>
    </body>
</html>