@extends('backend.dashboards.admin.layouts.main')

@section('main-container')
                <div class="content-wrapper">

                    <section class="content-header">        
    <a href="/cities/add" class="btn btn-success">New Cities</a>    
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>--></section>  
<br>

<div class="cities index large-9 medium-8 columns content box">
    <h3>Cities</h3>
    <div class="box-body">
                <form method="get" accept-charset="utf-8" action="/cities">                    <div class="col-md-2">            
                    <div class="input select"><label for="state">State</label><select name="state" class="form-control" placeholder="please Select" id="state"><option value="">please Select</option><option value="1">Delhi</option><option value="2">Uttar Pradesh</option><option value="3">Haryana</option><option value="4">Andaman &amp; Nicobar Islands</option><option value="5">Andhra Pradesh</option><option value="6">Arunachal Pradesh</option><option value="7">Assam</option><option value="8">Bihar</option><option value="9">Chandigarh</option><option value="10">Chattisgarh</option><option value="11">Dadra &amp; Nagar Haveli</option><option value="12">Daman &amp; Diu</option><option value="13">Goa</option><option value="14">Gujarat</option><option value="15">Himachal Pradesh</option><option value="16">Jammu &amp; Kashmir</option><option value="17">Jharkhand</option><option value="18">Karnataka</option><option value="19">Kerala</option><option value="20">Lakshadweep</option><option value="21">Madhya Pradesh</option><option value="22">Maharashtra</option><option value="23">Manipur</option><option value="24">Meghalaya</option><option value="25">Mizoram</option><option value="26">Nagaland</option><option value="27">Orissa</option><option value="28">Pondicherry</option><option value="29">Punjab</option><option value="30">Rajasthan</option><option value="31">Sikkim</option><option value="32">Tamil Nadu</option><option value="33">Tripura</option><option value="34">Uttarakhand</option><option value="35">West Bengal</option><option value="36">Telangana</option><option value="37">Odisha</option><option value="38">Chhattisgarh</option></select></div>                    </div>        
                                            
                    <div class="col-md-2 marginTop25">
                        <br>                      
                <button class="btn btn-primary" type="submit">Search</button>                <a href="/cities" class="btn btn-danger">Reset</a>                    </div>
                </form>                </div>
   <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><a href="/cities?direction=asc&amp;sort=id">Id</a></th>
                <!-- <th scope="col"><a href="/cities?direction=asc&amp;sort=country_id">Country</a></th> -->
                <th scope="col"><a href="/cities?direction=asc&amp;sort=state_id">State</a></th>
                <th scope="col"><a href="/cities?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/cities?direction=asc&amp;sort=active">Active</a></th>
                <th scope="col" class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
                        <tr>
                <td>1</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Delhi</td>
                <td>Central Delhi</td>
                
                <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                <td class="actions">
                    <a href="/cities/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0decca776034106" style="display:none;" method="post" action="/cities/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="693940990a9240a21c8ed5c2852b5ff0f6800209%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a893c0decca776034106.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>2</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Delhi</td>
                <td>East Delhi</td>
                
                <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                <td class="actions">
                    <a href="/cities/edit/2" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e0615821930104" style="display:none;" method="post" action="/cities/delete/2"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="fc34cf5ce7b218be66f1f98de7e91761bade1364%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 2?&quot;)) { document.post_62a893c0e0615821930104.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>3</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Delhi</td>
                <td>New Delhi</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/3" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e0a84976033491" style="display:none;" method="post" action="/cities/delete/3"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="722e75afa847329777a7a56e25484a02bc90a9e7%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 3?&quot;)) { document.post_62a893c0e0a84976033491.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>4</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Delhi</td>
                <td>North Delhi</td>
                
                <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                <td class="actions">
                    <a href="/cities/edit/4" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e0d9a601502977" style="display:none;" method="post" action="/cities/delete/4"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="a8f9a2f5b8f2b958106575a7ecf641094ee0d12e%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 4?&quot;)) { document.post_62a893c0e0d9a601502977.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>5</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Delhi</td>
                <td>North West Delhi</td>
                
                <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                <td class="actions">
                    <a href="/cities/edit/5" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e1065228161339" style="display:none;" method="post" action="/cities/delete/5"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="a264211b399786ef79307b026dd33467fd6d64ba%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 5?&quot;)) { document.post_62a893c0e1065228161339.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>6</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Delhi</td>
                <td>South Delhi</td>
                
                <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                <td class="actions">
                    <a href="/cities/edit/6" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e2050171364877" style="display:none;" method="post" action="/cities/delete/6"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="eb1211855459f3e9d04b8153ce19b520b3c251f4%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 6?&quot;)) { document.post_62a893c0e2050171364877.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>7</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Delhi</td>
                <td>South West Delhi</td>
                
                <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                <td class="actions">
                    <a href="/cities/edit/7" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e2952188649328" style="display:none;" method="post" action="/cities/delete/7"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="4bf6bb17fbb495aef992aa9d678758f8b099463b%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 7?&quot;)) { document.post_62a893c0e2952188649328.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>8</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Delhi</td>
                <td>West Delhi</td>
                
                <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                <td class="actions">
                    <a href="/cities/edit/8" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e34e5272552163" style="display:none;" method="post" action="/cities/delete/8"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="782eff8fd0db9cb1166347fc605cd0bd05a4d9ff%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 8?&quot;)) { document.post_62a893c0e34e5272552163.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>623</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Delhi</td>
                <td>ddd bb</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/623" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e3f55051342526" style="display:none;" method="post" action="/cities/delete/623"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="7b297f1063aaf4ff26e1ef2f2974dd137d22643f%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 623?&quot;)) { document.post_62a893c0e3f55051342526.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>9</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Agra</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/9" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e4b35105463381" style="display:none;" method="post" action="/cities/delete/9"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="93bdc7b905cf575447d39d09ce9ec252ea06c76b%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 9?&quot;)) { document.post_62a893c0e4b35105463381.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>10</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Aligarh</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/10" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e55e4820490624" style="display:none;" method="post" action="/cities/delete/10"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="434f7b982c029c99fb200ed1ce1180fe6960d123%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 10?&quot;)) { document.post_62a893c0e55e4820490624.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>11</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Allahabad</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/11" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e5b59449598130" style="display:none;" method="post" action="/cities/delete/11"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="b9a720a680cd1b29a9d14e2a0639d4fdbb2e39d6%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 11?&quot;)) { document.post_62a893c0e5b59449598130.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>12</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Ambedkar Nagar</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/12" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e670e936251381" style="display:none;" method="post" action="/cities/delete/12"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="46c2b2e30b617ef27f33b9854a456338ec88f690%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 12?&quot;)) { document.post_62a893c0e670e936251381.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>13</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Auraiya</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/13" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e6ed1097602357" style="display:none;" method="post" action="/cities/delete/13"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="f649f70802263aea99bb64dd9263f17151851b79%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 13?&quot;)) { document.post_62a893c0e6ed1097602357.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>14</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Azamgarh</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/14" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e790a038041539" style="display:none;" method="post" action="/cities/delete/14"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="23141fc2e1a2625a2b3c3c5507d3a0f9119bcc8c%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 14?&quot;)) { document.post_62a893c0e790a038041539.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>15</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Bagpat</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/15" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e7c4b566735115" style="display:none;" method="post" action="/cities/delete/15"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="eaf8d83f230d3a1b27d2b2bf781116390c6f4a26%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 15?&quot;)) { document.post_62a893c0e7c4b566735115.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>16</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Bahraich</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/16" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e8420598946707" style="display:none;" method="post" action="/cities/delete/16"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="8b4439102bcfd602e0cd1a9d56ef7da46edda659%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 16?&quot;)) { document.post_62a893c0e8420598946707.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>17</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Ballia</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/17" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e93a3189916015" style="display:none;" method="post" action="/cities/delete/17"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="fc042fdddcc97ff33f778761650c02299b726b93%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 17?&quot;)) { document.post_62a893c0e93a3189916015.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>18</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Balrampur</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/18" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e973c742624634" style="display:none;" method="post" action="/cities/delete/18"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="11506504ebe88e0f1502f2e80d62e32cd8e4611f%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 18?&quot;)) { document.post_62a893c0e973c742624634.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>19</td>
                <!-- <td><a href="/countries/view/104">India</a></td> -->
                <td>Uttar Pradesh</td>
                <td>Banda</td>
                
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/cities/edit/19" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0e9a40786404373" style="display:none;" method="post" action="/cities/delete/19"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="cfb9b13990e4dcd63c843768d32360741e95522d%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 19?&quot;)) { document.post_62a893c0e9a40786404373.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                    </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/cities?page=2">2</a></li><li><a href="/cities?page=3">3</a></li><li><a href="/cities?page=4">4</a></li><li><a href="/cities?page=5">5</a></li><li><a href="/cities?page=6">6</a></li><li><a href="/cities?page=7">7</a></li><li><a href="/cities?page=8">8</a></li><li><a href="/cities?page=9">9</a></li>            <li class="next"><a rel="next" href="/cities?page=2">next &gt;</a></li>            <li class="last"><a href="/cities?page=32">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 32, showing 20 record(s) out of 637 total</p>
    </div>
</div>
               
@endsection