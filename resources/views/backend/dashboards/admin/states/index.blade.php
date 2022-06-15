@extends('backend.dashboards.admin.layouts.main')

@section('main-container')


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
                    
<div class="states index large-9 medium-8 columns content box">
    <h3>States</h3>
   <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><a href="/states?direction=asc&amp;sort=id">Id</a></th>
               <!--  <th scope="col"><a href="/states?direction=asc&amp;sort=country_id">Country</a></th> -->
                <th scope="col"><a href="/states?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/states?direction=asc&amp;sort=alias">Alias</a></th>
                <th scope="col"><a href="/states?direction=asc&amp;sort=state_code">State Code</a></th>
                <th scope="col"><a href="/states?direction=asc&amp;sort=active">Active</a></th>
                <th scope="col" class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
                        <tr>
                <td>1</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Delhi</td>
                <td></td>
                <td>DL</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8935917dd6928627614" style="display:none;" method="post" action="/states/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="7d8d4f306d73c6f1d2d5749e8a4af3132673e893%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a8935917dd6928627614.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>2</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Uttar Pradesh</td>
                <td></td>
                <td>UP</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/2" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89359181b3790056754" style="display:none;" method="post" action="/states/delete/2"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="419387d083ec003a148aafb8c872fa7ec1374962%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 2?&quot;)) { document.post_62a89359181b3790056754.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>3</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Haryana</td>
                <td></td>
                <td>HR</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/3" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8935918478703467228" style="display:none;" method="post" action="/states/delete/3"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="b354c5248fa4ad92f6c2e7d30a2c95c55cca6fa4%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 3?&quot;)) { document.post_62a8935918478703467228.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>4</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Andaman &amp; Nicobar Islands</td>
                <td></td>
                <td>AN</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/4" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8935918715982809641" style="display:none;" method="post" action="/states/delete/4"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="96a081b683be8c7b7204c73fb37e268168b4bb68%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 4?&quot;)) { document.post_62a8935918715982809641.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>5</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Andhra Pradesh</td>
                <td></td>
                <td>AP</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/5" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89359189d7377968325" style="display:none;" method="post" action="/states/delete/5"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="d0e1d45fe913c3ffb8a487bf3d0e3da26c737e26%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 5?&quot;)) { document.post_62a89359189d7377968325.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>6</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Arunachal Pradesh</td>
                <td></td>
                <td>AR</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/6" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8935918c86411462866" style="display:none;" method="post" action="/states/delete/6"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="91e3d0ca4da26025392d403cc7a87eb24086374d%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 6?&quot;)) { document.post_62a8935918c86411462866.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>7</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Assam</td>
                <td></td>
                <td>AS</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/7" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8935919913480729696" style="display:none;" method="post" action="/states/delete/7"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="b61179b2ee77cf5de3487bd3c668769044a4af0a%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 7?&quot;)) { document.post_62a8935919913480729696.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>8</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Bihar</td>
                <td></td>
                <td>BR</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/8" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8935919f53327697327" style="display:none;" method="post" action="/states/delete/8"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="b7c8290e252df3b7de5202784f77322ed04f8fb2%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 8?&quot;)) { document.post_62a8935919f53327697327.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>9</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Chandigarh</td>
                <td></td>
                <td>CH</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/9" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893591a24f022342019" style="display:none;" method="post" action="/states/delete/9"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="9631e7207323b40c0fcd68c060d9a268a2913e73%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 9?&quot;)) { document.post_62a893591a24f022342019.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>10</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Chattisgarh</td>
                <td></td>
                <td>CT</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/10" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893591b376584564366" style="display:none;" method="post" action="/states/delete/10"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="6e2218abca72f63c14b84d954ec98e00ea754635%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 10?&quot;)) { document.post_62a893591b376584564366.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>11</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Dadra &amp; Nagar Haveli</td>
                <td></td>
                <td>DN</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/11" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893591b69d674373328" style="display:none;" method="post" action="/states/delete/11"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="d8831eb536db42d12be6312272837ff5cd5ddb50%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 11?&quot;)) { document.post_62a893591b69d674373328.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>12</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Daman &amp; Diu</td>
                <td></td>
                <td>DD</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/12" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893591b9ac953399788" style="display:none;" method="post" action="/states/delete/12"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="8224cf2b09e2fdd7657b9598c6a1964a3f1ac758%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 12?&quot;)) { document.post_62a893591b9ac953399788.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>13</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Goa</td>
                <td></td>
                <td>GA</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/13" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893591d16c874241801" style="display:none;" method="post" action="/states/delete/13"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="75f603c8910fb98881681479d1332a9ba2fccb70%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 13?&quot;)) { document.post_62a893591d16c874241801.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>14</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Gujarat</td>
                <td></td>
                <td>GJ</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/14" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893591e128912774511" style="display:none;" method="post" action="/states/delete/14"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="78945585ffcc15525202d60419690318b74bb044%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 14?&quot;)) { document.post_62a893591e128912774511.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>15</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Himachal Pradesh</td>
                <td></td>
                <td>HP</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/15" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893591f04b537624303" style="display:none;" method="post" action="/states/delete/15"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="136d34a23fae734c415524d87247ab71f2253ac5%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 15?&quot;)) { document.post_62a893591f04b537624303.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>16</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Jammu &amp; Kashmir</td>
                <td></td>
                <td>JK</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/16" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893591f446093485441" style="display:none;" method="post" action="/states/delete/16"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="f20d0d4bcbe1133f071b61322dcb8672edf03671%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 16?&quot;)) { document.post_62a893591f446093485441.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>17</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Jharkhand</td>
                <td></td>
                <td>JH</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/17" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8935920386744120503" style="display:none;" method="post" action="/states/delete/17"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="7d3851f3e731ed56d97d523078bc2915ea6c5a4c%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 17?&quot;)) { document.post_62a8935920386744120503.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>18</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Karnataka</td>
                <td></td>
                <td>KA</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/18" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8935920692567257527" style="display:none;" method="post" action="/states/delete/18"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="60589c30f6cc4cd741fa76c462d64345e401faab%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 18?&quot;)) { document.post_62a8935920692567257527.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>19</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Kerala</td>
                <td></td>
                <td>KL</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/19" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8935920eba935660774" style="display:none;" method="post" action="/states/delete/19"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="d0b4ff039535732709dd50c68ff519fe264ace81%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 19?&quot;)) { document.post_62a8935920eba935660774.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                        <tr>
                <td>20</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Lakshadweep</td>
                <td></td>
                <td>LD</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/20" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89359212a5922901251" style="display:none;" method="post" action="/states/delete/20"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="9adafb2fa9b28ba0e80a95f24dbabf760f20d404%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 20?&quot;)) { document.post_62a89359212a5922901251.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                    </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/states?page=2">2</a></li>            <li class="next"><a rel="next" href="/states?page=2">next &gt;</a></li>            <li class="last"><a href="/states?page=2">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 2, showing 20 record(s) out of 38 total</p>
    </div>
</div>
                

@endsection