@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 


<div class="content-wrapper">

<section class="content-header">
<h1>Call To Action Logs</h1>
<!--    <ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">Tables</a></li>
<li class="active">Data tables</li>
</ol>-->
</section>
<section class="content">
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-header">
<form method="get" id="filter-form">
    <div class="row">
                                    <div class="col-md-2">
            <div class="input select"><select name="customer_id" class="form-control" id="customer-id"><option value="" selected="selected">Customer</option><option value="1">Ford - priyanka@singleinterface.com</option><option value="9">91mobiles - guptamani90@gmail.com</option><option value="11">Cut and Style - aijaz@singleinterface.com</option><option value="12">umesh_brand - umeshnadu165@gmail.com</option><option value="13">spotlight - ravityadav22@gmail.com</option><option value="14">spotlight - uur38759@qisoa.com</option><option value="15">Ford - gsgyandeepsharma@gmail.com</option><option value="16">jarvish - bhaskarrock18@gmail.com</option><option value="17">TEST - madhurarora.arora2@gmail.com</option><option value="18">Aromad - madhurarora1997@gmail.com</option><option value="20">iiiu - madhur.arora@singleinterface.com</option><option value="21">spotlight - ads@myspotlight.co</option><option value="22">Ford - pinkeshs494@gmail.com</option><option value="23">Pizzahut - pinkesh.singh85@gmail.com</option><option value="24">spotlight - ravit.kumar@singleinterface.com</option><option value="25">asdasd - manisha.gupta@singleinterface.com</option><option value="27">Cauvery Ford - fordindia.gm@gmail.com</option><option value="29">qwerty - gyandeep.sharma@singleinterface.com</option><option value="30">ABCD  - hardikjamnal@gmail.com</option><option value="32">time - deepika.sheoran@singleinterface.com</option><option value="33">Singleinterface - pankajyadav553@gmail.com</option><option value="34">naturrr - dd578817@gmail.com</option><option value="35">Madhur RO Purifiers - spotlighttesting01@gmail.com</option><option value="36">Digital Marketing Delhi - wellsia065@gmail.com</option><option value="37">Callfixie - callfixietradesman@gmail.com</option><option value="38">Singleinterface - jaarwisgroup@gmail.com</option><option value="39">aSsa - sanjay.kumar@singleinterface.com</option><option value="40">Singleinterface1 - pankaj.seoppc@gmail.com</option><option value="41">Brand Name Umesh - umesh.gupta@singleinterface.com</option><option value="43">Madhurfineart - spotlighttesting02@gmail.com</option><option value="44">Ford India - sapna.sharma562w@gmail.com</option><option value="46">ads - pinkesh.aec@gmail.com</option><option value="47">Pizza Hut - hardikjamnal96@gmail.com</option><option value="48">HP World - hpppsindia@gmail.com</option><option value="49">HP - angel.pri2010@gmail.com</option><option value="50">Punjabi dhaba - spotlightoffice1@gmail.com</option><option value="51">Brand11 - riddhi.garg@singleinterface.com</option><option value="54">Your food - officespotlight1@gmail.com</option><option value="55">SRK - spotlightesting02@gmail.com</option><option value="57">ayushi - spotlighttesting03@gmail.com</option><option value="61">test1 - vikas.upadhyay@singleinterface.com</option><option value="62">dsfsdfsdfsdfsdfdsfddsadsadsadasdqweqweqwdr23423eqw - vikas.upadhyay82@gmail.com</option><option value="63">Motor Craft - singleinterface2019@gmail.com</option><option value="64">Thomas Cook - thomascookindiaofficial@gmail.com</option><option value="65">KFC  - kfc.india.locations@gmail.com</option><option value="66">Yes Bank - yesbank5489@gmail.com</option><option value="67">Sharekhan - sharekhansocial@gmail.com</option><option value="68">Axis bank - axisbanklocallisting@gmail.com</option><option value="69">srarify - pawan.kumar@singleinterface.com</option><option value="70">Max Lab - hardikspotbrand@gmail.com</option><option value="71">SS Web Services - gupta.sandeep24.6@gmail.com</option><option value="72">akshay - spotlighttesting04@gmail.com</option><option value="73">xyzabc - mccspotlight13@gmail.com</option><option value="74">Test BName - vikas.122019@gmail.com</option><option value="75">Madhur - spotlighttesting05@gmail.com</option><option value="76">single - singleinterfacespotlight@gmail.com</option><option value="77">Eclairs - vikas222019@gmail.com</option><option value="78">YesBank - himanshu.gupta@singleinterface.com</option><option value="79">dyadva restau - dharmendra.kumar@singleinterface.com</option><option value="80">CEAT - ceatspotlight@gmail.com</option><option value="82">Vmart - kritika.agarwal@singleinterface.com</option><option value="83">ceat - ceat.locations@gmail.com</option><option value="84">pizzahut - pizzarestaurantindia@gmail.com</option><option value="85">Madhur - spotlighttesting06@gmail.com</option><option value="86">brand name it is - sukhbir.coolboy.singh2@gmail.com</option><option value="89">Water Supplier - vikaskumarupadhyay82@gmail.com</option><option value="90">Ro waley - spotlighttesting07@gmail.com</option><option value="91">Sharekhan - sharekhannewad@gmail.com</option><option value="93">mg motor - mgmotorindia@gmail.com</option><option value="99">Spot Light - sukhbir.deswal@singleinterface.com</option><option value="100">Spotlight - raza.iqbal@singleinterface.com</option><option value="101">Aroman - spotlighttesting08@gmail.com</option><option value="102">Vikas Agriculture Farms - vikasnewspotlight@gmail.com</option><option value="103">Organic Potatos - vikasnewspotlight1@gmail.com</option><option value="104">Fresh Potatos - vikasnewspotlight2@gmail.com</option><option value="105">Yummy Pizza - vikasnewspotlight3@gmail.com</option><option value="106">Pizaa - newspotlight4@gmail.com</option><option value="107">Spotlight New - spotlighttesting09@gmail.com</option><option value="108">Spotlight New - spotlighttesting10@gmail.com</option><option value="109">Tiger Chai - vikasnewspotlight5@gmail.com</option><option value="110">Uber - vikasnewspotlight6@gmail.com</option><option value="111">Singleinterface - poojatahkur456@gmail.com</option><option value="112">Aromad - spotlighttesting11@gmail.com</option><option value="113">spotlight - spotlighttesting12@gmail.com</option><option value="115">Ford - dhrub.btp@gmail.com</option><option value="116">Bakery Corner - deepti.saini49@gmail.com</option><option value="117">nancey - nancey.srivastava@singleinterface.com</option><option value="118">chayos - vikasnewspotlight7@gmail.com</option><option value="120">Spotlight - spotlightsanitytest@gmail.com</option><option value="121">Test - deeptispotlight@gmail.com</option><option value="122">Starify - vikasnewspotlight9@gmail.com</option><option value="123">brand name - spotlightsingleinterface11@gmail.com</option><option value="124">Brand Marketing - deeptinewspotlight@gmail.com</option><option value="125">Spotlight - spotlighttesting13@gmail.com</option><option value="126">Himalaya - vikasnewspotlight10@gmail.com</option><option value="127">Spot - newfloww1@gmail.com</option><option value="128">Spotlight - spotlighttesting14@gmail.com</option><option value="129">Brand Name - newfloww2@gmail.com</option><option value="130">Digital  - spot001test@gmail.com</option><option value="131">Ads Brand - testspotlight01@gmail.com</option><option value="132">Vasundhara Foods - vikasnewspotlight11@gmail.com</option><option value="133">Book Store - vikasnewspotlight12@gmail.com</option><option value="134">floww - newfloww3@gmail.com</option><option value="135">Dell - vikasnewspotlight13@gmail.com</option><option value="136">Pink City - newfloww4@gmail.com</option><option value="137">Rail Neer - vikasnewspotlight14@gmail.com</option><option value="138">SBI - vikasnewspotlight15@gmail.com</option><option value="139">Automobile  - spotlight.test004@gmail.com</option><option value="140">brand name it is - newfloww5@gmail.com</option><option value="141">Spotlight - spotlightesting16@gmail.com</option><option value="142">Spotlight - spotlighttesting17@gmail.com</option><option value="143">Digital Guru - newspotlight.05@gmail.com</option><option value="144">Tata - vikasnewspotlight16@gmail.com</option><option value="145">Digital Solution - spotlight.test08@gmail.com</option><option value="146">Yezdi - vikasnewspotlight17@gmail.com</option><option value="147">Go Digital - spotlight.07test@gmail.com</option><option value="148">ford - kri980ti@gmail.com</option><option value="150">brand - testsanity00@gmail.com</option><option value="151">bn - myragoel02@gmail.com</option><option value="152">efc - spotlighttesting1001@gmail.com</option><option value="153">madhur - spotlighttesting18@gmail.com</option><option value="156">SI - priyankachadda9@gmail.com</option><option value="157">Nissan - singleinterfacetest12345@gmail.com</option><option value="159">brand - username11111996@gmail.com</option><option value="160">madhur - spotlighttesting20@gmail.com</option><option value="161">ViDhee - gyandeepqwerty@gmail.com</option><option value="162">madhur - spotlighttesing21@gmail.com</option><option value="163">BN - myragoel25@gmail.com</option><option value="164">madhur - spotlighttesing22@gmail.com</option><option value="165">SI - poojatahkur456@gmail.com</option><option value="166">SI - prichadda91@gmail.com</option><option value="167">SI - </option><option value="168">Canon - msmamta921@gmail.com</option><option value="171">Ford - vishvendra.singh@singleinterface.com</option><option value="174">gebrtyh - spotlight1950@gmail.com</option><option value="176">brand name - testspotlight101@gmail.com</option><option value="177">Ford - spotlight1940@gmail.com</option><option value="178">brand - spotlighttesting102@gmail.com</option><option value="179">my brand - spotlight1941@gmail.com</option><option value="180">brand - testspotlight102@gmail.com</option><option value="181">brand - testspotlight103@gmail.com</option><option value="182">brand - testspotlight104@gmail.com</option><option value="183">my brand - aroundspotlight@gmail.com</option><option value="184">nothing - oasiscray@gmail.com</option></select></div>                            </div>


        <div class="col-md-2">
            <div class="input text"><input type="text" name="store_code" class="form-control" placeholder="Store Code" id="store-code"/></div>                            </div>
        <div class="col-md-2">
            <div class="input select"><select name="cta" class="form-control" id="cta"><option value="" selected="selected">All</option><option value="onload">onload</option><option value="submit">submit</option><option value="call">call</option><option value="call-landingpage">call-landingpage</option><option value="call-thankyou">call-thankyou</option><option value="get_direction">get_direction</option><option value="get_direction-landingpage">get_direction-landingpage</option><option value="get_direction-thankyou">get_direction-thankyou</option></select></div>                            </div>
        <div class="col-md-2">
            <div class="input text"><input type="text" name="from_date" class="form-control datepicker" placeholder="From" id="from-date" value=""/></div>                            </div>
        <div class="col-md-2">
            <div class="input text"><input type="text" name="to_date" class="form-control datepicker" placeholder="To" id="to-date" value=""/></div>                            </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-info" title="Apply Filters">
                <i class="fa fa-search"></i>
            </button>
            <a href="/call-to-action-logs" class="btn btn-danger" title="Reset Filters">
                <i class="fa fa-undo"></i>
            </a>
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-success btn block" id="download-report">
                <i class="fa fa-search"></i> Download Report
            </button>
        </div>
    </div>
</form>
</div>
<!-- /.box-header -->
<div class="box-body">
<table id="cta-table" class="table table-bordered table-striped nowrap">
    <thead>
        <tr>
            
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=id">Id</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=call_to_action">Call To Action</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=storeCode">StoreCode</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=location_id">Location</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=utm_source">Utm Source</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=utm_medium">Utm Medium</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=utm_campaign">Utm Campaign</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=utm_adgroup">Utm Adgroup</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=utm_keyword">Utm Keyword</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=utm_content">Utm Content</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=device_type">Device Type</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=match_type">Match Type</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=creative">Creative</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=user_ip">User Ip</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=created">Created</a></th>
            <th scope="col"><a href="/call-to-action-logs?direction=asc&amp;sort=modified">Modified</a></th>
        </tr>
    </thead>
    <tbody>
                                        <tr>
                
                <td>8687</td>
                <td>onload</td>
                <td>123411</td>
                <td><a href="/locations/view/33445">rsa loc 1</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>35.154.179.140</td>
                <td>4/6/22, 11:38 AM</td>
                <td>4/6/22, 11:38 AM</td>
            </tr>
                                        <tr>
                
                <td>8686</td>
                <td>onload</td>
                <td>123411</td>
                <td><a href="/locations/view/33445">rsa loc 1</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>35.154.179.140</td>
                <td>4/6/22, 11:38 AM</td>
                <td>4/6/22, 11:38 AM</td>
            </tr>
                                        <tr>
                
                <td>8685</td>
                <td>onload</td>
                <td>123411</td>
                <td><a href="/locations/view/33445">rsa loc 1</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>35.154.179.140</td>
                <td>4/6/22, 11:38 AM</td>
                <td>4/6/22, 11:38 AM</td>
            </tr>
                                        <tr>
                
                <td>8684</td>
                <td>onload</td>
                <td>123411</td>
                <td><a href="/locations/view/33445">rsa loc 1</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>35.154.179.140</td>
                <td>4/6/22, 11:38 AM</td>
                <td>4/6/22, 11:38 AM</td>
            </tr>
                                        <tr>
                
                <td>8683</td>
                <td>onload</td>
                <td>123411</td>
                <td><a href="/locations/view/33445">rsa loc 1</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>35.154.179.140</td>
                <td>4/6/22, 11:37 AM</td>
                <td>4/6/22, 11:37 AM</td>
            </tr>
                                        <tr>
                
                <td>8682</td>
                <td>onload</td>
                <td>123411</td>
                <td><a href="/locations/view/33445">rsa loc 1</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>180.188.243.39</td>
                <td>4/6/22, 11:36 AM</td>
                <td>4/6/22, 11:36 AM</td>
            </tr>
                                        <tr>
                
                <td>8681</td>
                <td>onload</td>
                <td>123411</td>
                <td><a href="/locations/view/33445">rsa loc 1</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>180.188.243.39</td>
                <td>4/6/22, 11:36 AM</td>
                <td>4/6/22, 11:36 AM</td>
            </tr>
                                        <tr>
                
                <td>8680</td>
                <td>onload</td>
                <td>123411</td>
                <td><a href="/locations/view/33445">rsa loc 1</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>180.188.243.39</td>
                <td>4/6/22, 11:33 AM</td>
                <td>4/6/22, 11:33 AM</td>
            </tr>
                                        <tr>
                
                <td>8679</td>
                <td>onload</td>
                <td>123411</td>
                <td><a href="/locations/view/33445">rsa loc 1</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>180.188.243.39</td>
                <td>4/6/22, 11:32 AM</td>
                <td>4/6/22, 11:32 AM</td>
            </tr>
                                        <tr>
                
                <td>8678</td>
                <td>onload</td>
                <td>123411</td>
                <td><a href="/locations/view/33445">rsa loc 1</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>180.188.243.39</td>
                <td>4/6/22, 11:29 AM</td>
                <td>4/6/22, 11:29 AM</td>
            </tr>
                                </tbody>
</table>
<div class="paginator">
    <div class="row">
        <div class="col-md-5">
            Page 1 of 558, showing 10 record(s) out of 5,576 total                            </div>
        <div class="col-md-7">
            <ul class="pagination pull-right">
                                                    <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>                                    <li class="active"><a href="">1</a></li><li><a href="/call-to-action-logs?page=2">2</a></li><li><a href="/call-to-action-logs?page=3">3</a></li><li><a href="/call-to-action-logs?page=4">4</a></li><li><a href="/call-to-action-logs?page=5">5</a></li><li><a href="/call-to-action-logs?page=6">6</a></li><li><a href="/call-to-action-logs?page=7">7</a></li><li><a href="/call-to-action-logs?page=8">8</a></li><li><a href="/call-to-action-logs?page=9">9</a></li>                                    <li class="next"><a rel="next" href="/call-to-action-logs?page=2">next &gt;</a></li>                                    <li class="last"><a href="/call-to-action-logs?page=558">last &gt;&gt;</a></li>                                </ul>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>  

@endsection