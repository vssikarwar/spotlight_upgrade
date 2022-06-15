@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 


                <div class="content-wrapper">
  
                    <section class="content-header">
      <a href="/currencies/add" class="btn btn-primary">New Currency</a>     <ol class="breadcrumb">
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
                <div class="box-header">
                    <h3 class="box-title">Currencies</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body"><table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><a href="/currencies?direction=asc&amp;sort=id">Id</a></th>
                                <th scope="col"><a href="/currencies?direction=asc&amp;sort=name">Name</a></th>
                                <th scope="col"><a href="/currencies?direction=asc&amp;sort=code">Code</a></th>
                                <th scope="col"><a href="/currencies?direction=asc&amp;sort=status">Status</a></th>
                                <th scope="col"><a href="/currencies?direction=asc&amp;sort=created">Created</a></th>
                                <th scope="col"><a href="/currencies?direction=asc&amp;sort=modified">Modified</a></th>
                                <th scope="col" class="actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                        <tr>
                                <td>1</td>
                                <td>United Arab Emirates Dirham</td>
                                <td>AED</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a89559573a6854890313" style="display:none;" method="post" action="/currencies/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="67d4a644f7502a5fb9f673cae27ad54cd3a4b961%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a89559573a6854890313.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>2</td>
                                <td>Argentine Peso</td>
                                <td>ARS</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/2" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a8955957cb4920073001" style="display:none;" method="post" action="/currencies/delete/2"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="ac9b4fc25574223854d0441f5b1f5694a27f4670%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 2?&quot;)) { document.post_62a8955957cb4920073001.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>3</td>
                                <td>Australian Dollars</td>
                                <td>AUD</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/3" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a89559584c1618718447" style="display:none;" method="post" action="/currencies/delete/3"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="2e5df8325b7d57afac8a163609a682f548294eaa%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 3?&quot;)) { document.post_62a89559584c1618718447.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>4</td>
                                <td>Bulgarian Lev</td>
                                <td>BGN</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/4" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a89559588ae141807858" style="display:none;" method="post" action="/currencies/delete/4"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="e1c01f6a4c679a248b8a2730cbb02269284cb77e%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 4?&quot;)) { document.post_62a89559588ae141807858.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>5</td>
                                <td>Brunei Dollar</td>
                                <td>BND</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/5" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a8955958e7b179583471" style="display:none;" method="post" action="/currencies/delete/5"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="5b8720de3a0bd17bd98e0d27a64506c270b153a3%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 5?&quot;)) { document.post_62a8955958e7b179583471.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>6</td>
                                <td>Bolivian Boliviano</td>
                                <td>BOB</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/6" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a8955959743028714486" style="display:none;" method="post" action="/currencies/delete/6"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="0645bb23746b370a723742e28125f5c0d8fd1520%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 6?&quot;)) { document.post_62a8955959743028714486.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>7</td>
                                <td>Brazilian Real</td>
                                <td>BRL</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/7" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a8955959eee644199006" style="display:none;" method="post" action="/currencies/delete/7"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="db2025f2f514c033ba1ea53c6a1b34db393838e9%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 7?&quot;)) { document.post_62a8955959eee644199006.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>8</td>
                                <td>Canadian Dollars</td>
                                <td>CAD</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/8" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595a754444016318" style="display:none;" method="post" action="/currencies/delete/8"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="c2b0f2ac6b1a7d9dee2d1fade2e7fb2a35b38947%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 8?&quot;)) { document.post_62a895595a754444016318.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>9</td>
                                <td>Swiss Francs</td>
                                <td>CHF</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/9" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595af43161047755" style="display:none;" method="post" action="/currencies/delete/9"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="55b4ddbe411b85496ab8f419f79412396ec8e574%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 9?&quot;)) { document.post_62a895595af43161047755.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>10</td>
                                <td>Chilean Peso</td>
                                <td>CLP</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/10" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595b878892193144" style="display:none;" method="post" action="/currencies/delete/10"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="2f4dccdacccc0fb9d3d9502ff436388f93d53839%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 10?&quot;)) { document.post_62a895595b878892193144.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>11</td>
                                <td>Yuan Renminbi</td>
                                <td>CNY</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/11" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595bf05131351222" style="display:none;" method="post" action="/currencies/delete/11"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="10ccbcb38f6b7e9756dc452c08c333215ace7829%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 11?&quot;)) { document.post_62a895595bf05131351222.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>12</td>
                                <td>Colombian Peso</td>
                                <td>COP</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/12" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595c345892219723" style="display:none;" method="post" action="/currencies/delete/12"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="1c5803d3691d2ba17d9a4378ee7da4b1c552a3f7%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 12?&quot;)) { document.post_62a895595c345892219723.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>13</td>
                                <td>Old Serbian Dinar</td>
                                <td>CSD</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/13" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595cb2d500491499" style="display:none;" method="post" action="/currencies/delete/13"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="7c0b29cae852c31897439777e01e74a180bd2976%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 13?&quot;)) { document.post_62a895595cb2d500491499.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>14</td>
                                <td>Czech Koruna</td>
                                <td>CZK</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/14" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595d008021039948" style="display:none;" method="post" action="/currencies/delete/14"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="ac1981c8894d7a75745cf968aa3cb097f33ad585%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 14?&quot;)) { document.post_62a895595d008021039948.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>15</td>
                                <td>Deutsche Marks</td>
                                <td>DEM</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/15" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595d64a082065447" style="display:none;" method="post" action="/currencies/delete/15"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="4b5f5e1ef46a7a923f2725a50c0ce2d94206207e%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 15?&quot;)) { document.post_62a895595d64a082065447.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>16</td>
                                <td>Denmark Kroner</td>
                                <td>DKK</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/16" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595e034181819010" style="display:none;" method="post" action="/currencies/delete/16"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="b1ab6d30c4b893b619856bd60c30108d28190fcc%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 16?&quot;)) { document.post_62a895595e034181819010.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>17</td>
                                <td>Estonian Kroon</td>
                                <td>EEK</td>
                                <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/17" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595e624108483265" style="display:none;" method="post" action="/currencies/delete/17"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="329f62bfa63df84fea4960398ad7a3ba710fe822%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 17?&quot;)) { document.post_62a895595e624108483265.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>18</td>
                                <td>Egyptian Pound</td>
                                <td>EGP</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/18" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595f12d409874310" style="display:none;" method="post" action="/currencies/delete/18"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="4617d6a91779784a5f1888f5f6e4683a20033e23%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 18?&quot;)) { document.post_62a895595f12d409874310.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>19</td>
                                <td>Euros</td>
                                <td>EUR</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/19" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595f86d470629592" style="display:none;" method="post" action="/currencies/delete/19"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="a6e9464507fa2efae01f86c9e57784286c6d8db6%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 19?&quot;)) { document.post_62a895595f86d470629592.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                        <tr>
                                <td>20</td>
                                <td>Fiji Dollar</td>
                                <td>FJD</td>
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                                <td>9/12/18, 12:00 AM</td>
                                <td>9/12/18, 12:00 AM</td>
                                <td class="actions">
                                    <a href="/currencies/edit/20" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a895595fc8e872727705" style="display:none;" method="post" action="/currencies/delete/20"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="d57bcdea69c92026618f2eda2a8dab0f09a22c35%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 20?&quot;)) { document.post_62a895595fc8e872727705.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 


                   
                                </td>
                            </tr>
                                    </tbody>
                    </table>
                    <div class="paginator">
                        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/currencies?page=2">2</a></li><li><a href="/currencies?page=3">3</a></li><li><a href="/currencies?page=4">4</a></li>            <li class="next"><a rel="next" href="/currencies?page=2">next &gt;</a></li>            <li class="last"><a href="/currencies?page=4">last &gt;&gt;</a></li>                        </ul>
                        <p>Page 1 of 4, showing 20 record(s) out of 66 total</p>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->


               

@endsection