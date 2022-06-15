@extends('backend.dashboards.admin.layouts.main')

@section('main-container')


                <div class="content-wrapper">
                   

<section class="content-header">
    <a href="/time-zones/add" class="btn btn-primary">New Time Zone</a>      
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>--></section>

<div class="affinityCategories index large-9 medium-8 columns content box">
    <h3>TimeZones</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=country_id">Country</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=value">Value</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=status">Status</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=isdefault">Isdefault</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=created">Created</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=modified">Modified</a></th>
                    <th scope="col" class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                        <tr>
                <td>1</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Antarctica/Macquarie</td>
                <td>UTC +11:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 1:48 PM</td>
                <td>9/7/18, 3:07 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3bc26b054212069" style="display:none;" method="post" action="/time-zones/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="c6d37fa0300ad05ceb21ef4619175edae26995bb%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a894d3bc26b054212069.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>2</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Adelaide</td>
                <td>UTC +09:30</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>1</td>
                <td>9/7/18, 1:49 PM</td>
                <td>9/7/18, 3:04 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/2" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3bc8ac796654580" style="display:none;" method="post" action="/time-zones/delete/2"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="4a265b1c357485c65412dbb6c59a3f4cb8bd212c%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 2?&quot;)) { document.post_62a894d3bc8ac796654580.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>3</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Brisbane</td>
                <td>UTC +10:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:45 PM</td>
                <td>9/7/18, 2:45 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/3" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3bd01a896850838" style="display:none;" method="post" action="/time-zones/delete/3"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="721ca739931dff20766c862e8def7c027cc19c43%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 3?&quot;)) { document.post_62a894d3bd01a896850838.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>4</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Broken_Hill</td>
                <td>UTC +09:30</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:46 PM</td>
                <td>9/7/18, 2:46 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/4" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3bd32a007727612" style="display:none;" method="post" action="/time-zones/delete/4"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="5a1efc1b8915392dcfa65e2bb486d3917f347798%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 4?&quot;)) { document.post_62a894d3bd32a007727612.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>5</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Currie</td>
                <td>UTC +10:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:46 PM</td>
                <td>9/7/18, 2:46 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/5" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3be941767225145" style="display:none;" method="post" action="/time-zones/delete/5"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="ec44d6dde683b70400150b7873886c5c7c752b37%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 5?&quot;)) { document.post_62a894d3be941767225145.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>6</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Darwin</td>
                <td>UTC +09:30</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:46 PM</td>
                <td>9/7/18, 2:46 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/6" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3bf2cb011239357" style="display:none;" method="post" action="/time-zones/delete/6"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="f1ff1665b13b4c3dfb929c56f9043c61bb9abc63%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 6?&quot;)) { document.post_62a894d3bf2cb011239357.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>7</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Eucla</td>
                <td>UTC +08:45</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:47 PM</td>
                <td>9/7/18, 2:47 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/7" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3bf670813360179" style="display:none;" method="post" action="/time-zones/delete/7"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="f0c7482cc8295f78ca0309307bcc2fffc7ad1234%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 7?&quot;)) { document.post_62a894d3bf670813360179.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>8</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Hobart</td>
                <td>UTC +10:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:47 PM</td>
                <td>9/7/18, 2:47 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/8" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3bf979758272213" style="display:none;" method="post" action="/time-zones/delete/8"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="6c00b5f24bcefbb2e309e92019bf8eec718ce693%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 8?&quot;)) { document.post_62a894d3bf979758272213.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>9</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Lindeman</td>
                <td>UTC +10:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:47 PM</td>
                <td>9/7/18, 2:47 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/9" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c0fc4817591481" style="display:none;" method="post" action="/time-zones/delete/9"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="59f3aa68ec1bdf8e64245dced4a08b89fc2d47ab%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 9?&quot;)) { document.post_62a894d3c0fc4817591481.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>10</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Lord_Howe</td>
                <td>UTC +10:30</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:48 PM</td>
                <td>9/7/18, 2:48 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/10" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c1343455256669" style="display:none;" method="post" action="/time-zones/delete/10"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="9db18b5daabd21e57356b0562dada9b080a412c3%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 10?&quot;)) { document.post_62a894d3c1343455256669.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>11</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Melbourne</td>
                <td>UTC +10:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:48 PM</td>
                <td>9/7/18, 2:48 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/11" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c1d8a271801036" style="display:none;" method="post" action="/time-zones/delete/11"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="b892565006067d2426cdaf9050f84785250ba0a9%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 11?&quot;)) { document.post_62a894d3c1d8a271801036.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>12</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Perth</td>
                <td>UTC +08:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:48 PM</td>
                <td>9/7/18, 2:48 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/12" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c21a2388610253" style="display:none;" method="post" action="/time-zones/delete/12"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="d5325cc9613b0e7b383aa98ada12842f46501ac5%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 12?&quot;)) { document.post_62a894d3c21a2388610253.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>13</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td>Australia/Sydney</td>
                <td>UTC +10:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 2:49 PM</td>
                <td>9/7/18, 2:49 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/13" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c2508104835407" style="display:none;" method="post" action="/time-zones/delete/13"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="72d5e971c5205d85f3b3847a19f1b4ea68d5e026%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 13?&quot;)) { document.post_62a894d3c2508104835407.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>14</td>
                <td><a href="/countries/view/32">Brazil</a></td>
                <td>America/Araguaina</td>
                <td>UTC -03:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 3:13 PM</td>
                <td>9/7/18, 3:13 PM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/14" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c2801537662253" style="display:none;" method="post" action="/time-zones/delete/14"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="dc3f198b6f0d404a8b8bb6db0ec10a499788529b%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 14?&quot;)) { document.post_62a894d3c2801537662253.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>15</td>
                <td><a href="/countries/view/32">Brazil</a></td>
                <td>America/Bahia</td>
                <td>UTC -03:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 12:00 AM</td>
                <td>9/7/18, 12:00 AM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/15" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c3070785934613" style="display:none;" method="post" action="/time-zones/delete/15"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="497d05e2327fa4f4d2d1842bd3487441f3e9d0b1%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 15?&quot;)) { document.post_62a894d3c3070785934613.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>16</td>
                <td><a href="/countries/view/32">Brazil</a></td>
                <td>America/Belem</td>
                <td>UTC -03:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 12:00 AM</td>
                <td>9/7/18, 12:00 AM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/16" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c378c688419659" style="display:none;" method="post" action="/time-zones/delete/16"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="9cbeb1dc0652947a28dce539e2848bdfc2a75e7f%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 16?&quot;)) { document.post_62a894d3c378c688419659.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>17</td>
                <td><a href="/countries/view/32">Brazil</a></td>
                <td>America/Boa_Vista</td>
                <td>UTC -04:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 12:00 AM</td>
                <td>9/7/18, 12:00 AM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/17" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c3ff8811334120" style="display:none;" method="post" action="/time-zones/delete/17"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="0af9f36735f812f2d55bb8572e3febd4d12abf89%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 17?&quot;)) { document.post_62a894d3c3ff8811334120.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>18</td>
                <td><a href="/countries/view/32">Brazil</a></td>
                <td>America/Campo_Grande</td>
                <td>UTC -04:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 12:00 AM</td>
                <td>9/7/18, 12:00 AM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/18" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c42fb247532796" style="display:none;" method="post" action="/time-zones/delete/18"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="ca9e0b9d4ad726bfb64f955c0270bc578e2e021d%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 18?&quot;)) { document.post_62a894d3c42fb247532796.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>19</td>
                <td><a href="/countries/view/32">Brazil</a></td>
                <td>America/Cuiaba</td>
                <td>UTC -04:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 12:00 AM</td>
                <td>9/7/18, 12:00 AM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/19" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c54f2969786031" style="display:none;" method="post" action="/time-zones/delete/19"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="88185a5f1837a5db0d7c505b2d81c42f805cf029%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 19?&quot;)) { document.post_62a894d3c54f2969786031.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        <tr>
                <td>20</td>
                <td><a href="/countries/view/32">Brazil</a></td>
                <td>America/Eirunepe</td>
                <td>UTC -05:00</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td></td>
                <td>9/7/18, 12:00 AM</td>
                <td>9/7/18, 12:00 AM</td>                
                <td class="actions">                                        
                            <a href="/time-zones/edit/20" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a894d3c5878602187869" style="display:none;" method="post" action="/time-zones/delete/20"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="2f29ed5cd032cee80aed077d0ed02ad3c71b1245%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 20?&quot;)) { document.post_62a894d3c5878602187869.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
            </tr>
                        </tbody>           
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/time-zones?page=2">2</a></li><li><a href="/time-zones?page=3">3</a></li>            <li class="next"><a rel="next" href="/time-zones?page=2">next &gt;</a></li>            <li class="last"><a href="/time-zones?page=3">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 3, showing 20 record(s) out of 48 total</p>
    </div>
</div>
              
@endsection