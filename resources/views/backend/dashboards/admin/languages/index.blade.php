@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

                <div class="content-wrapper">
         
                    
<section class="content-header">
      <a href="/languages/add" class="btn btn-primary">New languages</a>     <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>--></section>


<div class="budgets index large-9 medium-8 columns content box">
    <h3>Languages</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
        <thead>
           <tr>
                <th scope="col"><a href="/languages?direction=asc&amp;sort=id">Id</a></th>
                <th scope="col"><a href="/languages?direction=asc&amp;sort=googleid">Googleid</a></th>
                <th scope="col"><a href="/languages?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/languages?direction=asc&amp;sort=status">Status</a></th>
                <th scope="col"><a href="/languages?direction=asc&amp;sort=created">Created</a></th>
                <th scope="col"><a href="/languages?direction=asc&amp;sort=modified">Modified</a></th>
                <th scope="col" class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
                        <tr>
                <td>1</td>
               <td>1019</td>
                <td>Arabic</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/13, 12:00 AM</td>
                <td>8/18/13, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423ef169539574615" style="display:none;" method="post" action="/languages/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="8404532ab36247cad4ec3384a89e74b4e1596c88%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a89423ef169539574615.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>2</td>
               <td>1056</td>
                <td>Bengali</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/14, 12:00 AM</td>
                <td>8/18/14, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/2" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423ef536165987857" style="display:none;" method="post" action="/languages/delete/2"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="bef24416b4bef3490843039bd17f0e0053df6511%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 2?&quot;)) { document.post_62a89423ef536165987857.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>3</td>
               <td>1020</td>
                <td>Bulgarian</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/15, 12:00 AM</td>
                <td>8/18/15, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/3" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423ef7fa071944883" style="display:none;" method="post" action="/languages/delete/3"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="9c34b6e7f8f1b5ec27f9c85d90a7932a9f1b6aa2%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 3?&quot;)) { document.post_62a89423ef7fa071944883.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>4</td>
               <td>1038</td>
                <td>Catalan</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/16, 12:00 AM</td>
                <td>8/18/16, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/4" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423efab8825320002" style="display:none;" method="post" action="/languages/delete/4"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="726104f1aebfc36e16cfce955e05fcc6bd27423c%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 4?&quot;)) { document.post_62a89423efab8825320002.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>5</td>
               <td>1017</td>
                <td>Chinese (simplified)</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/17, 12:00 AM</td>
                <td>8/18/17, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/5" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f10b0903504772" style="display:none;" method="post" action="/languages/delete/5"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="634e095ad4e6dfebfad9582aeda2362018ef6087%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 5?&quot;)) { document.post_62a89423f10b0903504772.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>6</td>
               <td>1018</td>
                <td>Chinese (traditional)</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/18, 12:00 AM</td>
                <td>8/18/18, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/6" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f1375354852827" style="display:none;" method="post" action="/languages/delete/6"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="3c05746c49350d27fafb12944fc6ba0a3680434a%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 6?&quot;)) { document.post_62a89423f1375354852827.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>7</td>
               <td>1039</td>
                <td>Croatian</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/19, 12:00 AM</td>
                <td>8/18/19, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/7" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f1aa6832369733" style="display:none;" method="post" action="/languages/delete/7"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="592019b066372c420ed6c18c9c2b7dcc23d3c627%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 7?&quot;)) { document.post_62a89423f1aa6832369733.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>8</td>
               <td>1021</td>
                <td>Czech</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/20, 12:00 AM</td>
                <td>8/18/20, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/8" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f1d66202205686" style="display:none;" method="post" action="/languages/delete/8"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="4b7b644769aead4cb2581853187a1394ecb03ac3%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 8?&quot;)) { document.post_62a89423f1d66202205686.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>9</td>
               <td>1009</td>
                <td>Danish</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/21, 12:00 AM</td>
                <td>8/18/21, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/9" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f2016705559207" style="display:none;" method="post" action="/languages/delete/9"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="21b0ff6ea978a671a5ee5a4e8e4106320b684c75%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 9?&quot;)) { document.post_62a89423f2016705559207.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>10</td>
               <td>1010</td>
                <td>Dutch</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/22, 12:00 AM</td>
                <td>8/18/22, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/10" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f22b6780655155" style="display:none;" method="post" action="/languages/delete/10"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="272021a5fb044b849500726887e9f8f836996fef%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 10?&quot;)) { document.post_62a89423f22b6780655155.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>11</td>
               <td>1000</td>
                <td>English</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/23, 12:00 AM</td>
                <td>8/18/23, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/11" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f2577712087408" style="display:none;" method="post" action="/languages/delete/11"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="ed44daf62852bf7e18ac16f3add4a11fbb44685b%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 11?&quot;)) { document.post_62a89423f2577712087408.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>12</td>
               <td>1043</td>
                <td>Estonian</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/24, 12:00 AM</td>
                <td>8/18/24, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/12" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f2826616324465" style="display:none;" method="post" action="/languages/delete/12"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="0e0489e1abac254a4aabd7f95e09cdbcf43f82a5%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 12?&quot;)) { document.post_62a89423f2826616324465.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>13</td>
               <td>1042</td>
                <td>Filipino</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/25, 12:00 AM</td>
                <td>8/18/25, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/13" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f2ac2922454079" style="display:none;" method="post" action="/languages/delete/13"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="191379f0ab1d7ac3181c2d6791841437c58fc826%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 13?&quot;)) { document.post_62a89423f2ac2922454079.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>14</td>
               <td>1011</td>
                <td>Finnish</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/26, 12:00 AM</td>
                <td>8/18/26, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/14" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f2d6d312741582" style="display:none;" method="post" action="/languages/delete/14"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="a3c03b171e64233e9bca2a1240edc5d5946f4f72%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 14?&quot;)) { document.post_62a89423f2d6d312741582.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>15</td>
               <td>1002</td>
                <td>French</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/27, 12:00 AM</td>
                <td>8/18/27, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/15" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f301b478758900" style="display:none;" method="post" action="/languages/delete/15"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="fd98841ce4b7e1b2824767923e2c2201f6b0e182%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 15?&quot;)) { document.post_62a89423f301b478758900.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>16</td>
               <td>1001</td>
                <td>German</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/28, 12:00 AM</td>
                <td>8/18/28, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/16" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89423f32b8630805670" style="display:none;" method="post" action="/languages/delete/16"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="bf0020a9786e4f296bd0c9c540499c85c02dce5d%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 16?&quot;)) { document.post_62a89423f32b8630805670.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>17</td>
               <td>1022</td>
                <td>Greek</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/29, 12:00 AM</td>
                <td>8/18/29, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/17" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a894240066c478803372" style="display:none;" method="post" action="/languages/delete/17"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="50f7064d026285bc92c382d96f4b1bc4aba2652d%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 17?&quot;)) { document.post_62a894240066c478803372.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>18</td>
               <td>1027</td>
                <td>Hebrew</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/30, 12:00 AM</td>
                <td>8/18/30, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/18" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a894240094c505398136" style="display:none;" method="post" action="/languages/delete/18"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="d9e5803725f261399f8273ac29d45f6bc8e49057%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 18?&quot;)) { document.post_62a894240094c505398136.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>19</td>
               <td>1023</td>
                <td>Hindi</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>8/18/31, 12:00 AM</td>
                <td>8/18/31, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/19" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8942400d2f586345784" style="display:none;" method="post" action="/languages/delete/19"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="66a55a8e4d0b437401bc6615defae84158a728bd%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 19?&quot;)) { document.post_62a8942400d2f586345784.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>20</td>
               <td>1024</td>
                <td>Hungarian</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>9/18/01, 12:00 AM</td>
                <td>9/18/01, 12:00 AM</td>
                <td class="actions">                    
                    <a href="/languages/edit/20" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8942402856936669313" style="display:none;" method="post" action="/languages/delete/20"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="fefc5fb06602776c06b6681652153bac61a3ef9c%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 20?&quot;)) { document.post_62a8942402856936669313.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                            
        </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/languages?page=2">2</a></li><li><a href="/languages?page=3">3</a></li>            <li class="next"><a rel="next" href="/languages?page=2">next &gt;</a></li>            <li class="last"><a href="/languages?page=3">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 3, showing 20 record(s) out of 47 total</p>
    </div>
</div>                

@endsection