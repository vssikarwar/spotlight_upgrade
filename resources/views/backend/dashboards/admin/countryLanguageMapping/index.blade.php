@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

                <div class="content-wrapper">

                    
<section class="content-header">
      <a href="/country-language-mapping/add" class="btn btn-primary">New Country Language Mapping</a>     <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>-->    </section>
	 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Country Language Mapping</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="box-body">
                <form method="get" accept-charset="utf-8" action="/country-language-mapping">                    <div class="col-md-2">            
                    <div class="input select"><label for="country">Country</label><select name="country" class="form-control" placeholder="please Select" id="country"><option value="">please Select</option><option value="11">Argentina</option><option value="14">Australia</option><option value="15">Austria</option><option value="22">Belgium</option><option value="32">Brazil</option><option value="41">Canada</option><option value="45">Chile</option><option value="49">Colombia</option><option value="60">Czechia</option><option value="61">Denmark</option><option value="77">France</option><option value="84">Germany</option><option value="101">Hong Kong</option><option value="104">India</option><option value="105">Indonesia</option><option value="108">Ireland</option><option value="110">Israel</option><option value="111">Italy</option><option value="113">Japan</option><option value="136">Malaysia</option><option value="145">Mexico</option><option value="158">Netherlands</option><option value="160">New Zealand</option><option value="167">Norway</option><option value="176">Philippines</option><option value="178">Poland</option><option value="179">Portugal</option><option value="184">Russian Federation</option><option value="201">Singapore</option><option value="207">South Africa</option><option value="210">Spain</option><option value="215">Sweden</option><option value="216">Switzerland</option><option value="218">Taiwan, Province of China</option><option value="221">Thailand</option><option value="228">Turkey</option><option value="233">Ukraine</option><option value="234">United Arab Emirates</option><option value="235">United Kingdom</option><option value="236">United States of America</option><option value="242">Viet Nam</option></select></div>                    </div>        
                    <div class="col-md-2">                
                    <div class="input select"><label for="language">Language</label><select name="language" class="form-control" placeholder="please Select" id="language"><option value="">please Select</option><option value="1">Arabic</option><option value="2">Bengali</option><option value="3">Bulgarian</option><option value="4">Catalan</option><option value="5">Chinese (simplified)</option><option value="6">Chinese (traditional)</option><option value="7">Croatian</option><option value="8">Czech</option><option value="9">Danish</option><option value="10">Dutch</option><option value="11">English</option><option value="12">Estonian</option><option value="13">Filipino</option><option value="14">Finnish</option><option value="15">French</option><option value="16">German</option><option value="17">Greek</option><option value="18">Hebrew</option><option value="19">Hindi</option><option value="20">Hungarian</option><option value="21">Icelandic</option><option value="22">Indonesian</option><option value="23">Italian</option><option value="24">Japanese</option><option value="25">Korean</option><option value="26">Latvian</option><option value="27">Lithuanian</option><option value="28">Malay</option><option value="29">Norwegian</option><option value="30">Persian</option><option value="31">Polish</option><option value="32">Portuguese</option><option value="33">Romanian</option><option value="34">Russian</option><option value="35">Serbian</option><option value="36">Slovak</option><option value="37">Slovenian</option><option value="38">Spanish</option><option value="39">Swedish</option><option value="40">Tamil</option><option value="41">Telugu</option><option value="42">Thai</option><option value="43">Turkish</option><option value="44">Ukrainian</option><option value="45">Urdu</option><option value="46">Vietnamese</option><option value="47">All Languages</option></select></div>                    </div>                         
                    <div class="col-md-2 marginTop25">
                        <br>                      
                <button class="btn btn-primary" type="submit">Search</button>                <a href="/country-language-mapping" class="btn btn-danger">Reset</a>                    </div>
                </form>                </div>
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th scope="col"><a href="/country-language-mapping?direction=asc&amp;sort=id">Id</a></th>
                <th scope="col"><a href="/country-language-mapping?direction=asc&amp;sort=country_id">Country</a></th>
                <th scope="col"><a href="/country-language-mapping?direction=asc&amp;sort=language_id">Language</a></th>
                <th scope="col"><a href="/country-language-mapping?direction=asc&amp;sort=created">Created</a></th>
                <th scope="col" class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
                          <tr>
                <td>1</td>
                <td><a href="/countries/view/11">Argentina</a></td>
                <td><a href="/languages/view/38">Spanish</a></td>
                <td>9/3/18, 3:40 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8948142016861746424" style="display:none;" method="post" action="/country-language-mapping/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="6706146b464ee73e1cd50eb8073bb8b84f06ba14%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a8948142016861746424.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>2</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td><a href="/languages/view/11">English</a></td>
                <td>9/3/18, 3:40 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/2" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8948142593203318028" style="display:none;" method="post" action="/country-language-mapping/delete/2"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="8d2d39dd155c81c3f1e3b1de6655973a2f9c4911%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 2?&quot;)) { document.post_62a8948142593203318028.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>3</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td><a href="/languages/view/5">Chinese (simplified)</a></td>
                <td>9/3/18, 3:41 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/3" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89481428f3873163292" style="display:none;" method="post" action="/country-language-mapping/delete/3"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="1d34f9d7646b392f8bbddc451c8bdc74d653647c%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 3?&quot;)) { document.post_62a89481428f3873163292.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>4</td>
                <td><a href="/countries/view/14">Australia</a></td>
                <td><a href="/languages/view/16">German</a></td>
                <td>9/3/18, 3:41 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/4" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8948142c27505214976" style="display:none;" method="post" action="/country-language-mapping/delete/4"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="594dc624123d0224f4d0b32fbda557a1921ff6e4%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 4?&quot;)) { document.post_62a8948142c27505214976.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>5</td>
                <td><a href="/countries/view/15">Austria</a></td>
                <td><a href="/languages/view/11">English</a></td>
                <td>9/3/18, 3:41 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/5" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8948142f73233037904" style="display:none;" method="post" action="/country-language-mapping/delete/5"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="782b88d08d99ff7bd20f6420504a173068e36d26%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 5?&quot;)) { document.post_62a8948142f73233037904.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>6</td>
                <td><a href="/countries/view/22">Belgium</a></td>
                <td><a href="/languages/view/15">French</a></td>
                <td>9/3/18, 3:44 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/6" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8948143287147066640" style="display:none;" method="post" action="/country-language-mapping/delete/6"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="8f75b287ddaf823801d791695ab67a4a4ba357c2%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 6?&quot;)) { document.post_62a8948143287147066640.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>7</td>
                <td><a href="/countries/view/22">Belgium</a></td>
                <td><a href="/languages/view/10">Dutch</a></td>
                <td>9/3/18, 3:44 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/7" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89481435b9049310002" style="display:none;" method="post" action="/country-language-mapping/delete/7"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="e7dec8e057527eeb786f822dcde3ba11343e3dd9%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 7?&quot;)) { document.post_62a89481435b9049310002.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>8</td>
                <td><a href="/countries/view/22">Belgium</a></td>
                <td><a href="/languages/view/11">English</a></td>
                <td>9/3/18, 3:44 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/8" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89481438c3172545806" style="display:none;" method="post" action="/country-language-mapping/delete/8"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="1256698db1f0cada62ff513755da216b96219b76%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 8?&quot;)) { document.post_62a89481438c3172545806.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>9</td>
                <td><a href="/countries/view/32">Brazil</a></td>
                <td><a href="/languages/view/32">Portuguese</a></td>
                <td>9/3/18, 3:44 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/9" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89481440a9860525865" style="display:none;" method="post" action="/country-language-mapping/delete/9"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="70498dc633a25c57f95127ab352e6eb8cfb670c0%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 9?&quot;)) { document.post_62a89481440a9860525865.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>10</td>
                <td><a href="/countries/view/41">Canada</a></td>
                <td><a href="/languages/view/11">English</a></td>
                <td>9/3/18, 3:45 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/10" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89481443c4840536542" style="display:none;" method="post" action="/country-language-mapping/delete/10"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="446c0a3885ce78fb87ed8944a20c730a936a8c54%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 10?&quot;)) { document.post_62a89481443c4840536542.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>11</td>
                <td><a href="/countries/view/41">Canada</a></td>
                <td><a href="/languages/view/15">French</a></td>
                <td>9/3/18, 3:45 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/11" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89481446ec332145831" style="display:none;" method="post" action="/country-language-mapping/delete/11"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="7b463c47c26255d1cc900183fc52dd6ae808b9b7%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 11?&quot;)) { document.post_62a89481446ec332145831.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>12</td>
                <td><a href="/countries/view/41">Canada</a></td>
                <td><a href="/languages/view/5">Chinese (simplified)</a></td>
                <td>9/3/18, 3:45 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/12" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8948144abe342994208" style="display:none;" method="post" action="/country-language-mapping/delete/12"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="1ce46fe89e84a479d8830929f34bc8c975829daf%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 12?&quot;)) { document.post_62a8948144abe342994208.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>13</td>
                <td><a href="/countries/view/45">Chile</a></td>
                <td><a href="/languages/view/38">Spanish</a></td>
                <td>9/3/18, 3:45 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/13" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89481451ac378345075" style="display:none;" method="post" action="/country-language-mapping/delete/13"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="08ac7a7075eda59799514910cb50dd6b8fc90796%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 13?&quot;)) { document.post_62a89481451ac378345075.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>14</td>
                <td><a href="/countries/view/49">Colombia</a></td>
                <td><a href="/languages/view/38">Spanish</a></td>
                <td>9/3/18, 3:46 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/14" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89481454c1249304892" style="display:none;" method="post" action="/country-language-mapping/delete/14"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="6acf6e87e90fcff233560f5a3899211c0debc5cc%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 14?&quot;)) { document.post_62a89481454c1249304892.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>15</td>
                <td><a href="/countries/view/60">Czechia</a></td>
                <td><a href="/languages/view/8">Czech</a></td>
                <td>9/3/18, 3:46 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/15" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a89481457cb672760048" style="display:none;" method="post" action="/country-language-mapping/delete/15"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="266249463ced9c4438cf994ffe77eb0d75b99659%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 15?&quot;)) { document.post_62a89481457cb672760048.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>16</td>
                <td><a href="/countries/view/60">Czechia</a></td>
                <td><a href="/languages/view/11">English</a></td>
                <td>9/3/18, 3:46 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/16" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8948145b5e921320048" style="display:none;" method="post" action="/country-language-mapping/delete/16"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="9124ce6cd03ac626b8aeb78fa6517f2a808a19b8%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 16?&quot;)) { document.post_62a8948145b5e921320048.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>17</td>
                <td><a href="/countries/view/61">Denmark</a></td>
                <td><a href="/languages/view/9">Danish</a></td>
                <td>9/3/18, 3:47 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/17" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a894814617c742388712" style="display:none;" method="post" action="/country-language-mapping/delete/17"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="2732233d6d92cdce75b77add9eea1dac14831c72%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 17?&quot;)) { document.post_62a894814617c742388712.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>18</td>
                <td><a href="/countries/view/61">Denmark</a></td>
                <td><a href="/languages/view/11">English</a></td>
                <td>9/3/18, 3:47 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/18" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8948146534696584842" style="display:none;" method="post" action="/country-language-mapping/delete/18"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="fcccb19f97e77258d210e83099d19287b91763bf%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 18?&quot;)) { document.post_62a8948146534696584842.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>19</td>
                <td><a href="/countries/view/77">France</a></td>
                <td><a href="/languages/view/15">French</a></td>
                <td>9/3/18, 3:47 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/19" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a894814694f421640798" style="display:none;" method="post" action="/country-language-mapping/delete/19"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="f189c1838932f39528fcb1181504e6569de2acdb%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 19?&quot;)) { document.post_62a894814694f421640798.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>20</td>
                <td><a href="/countries/view/84">Germany</a></td>
                <td><a href="/languages/view/16">German</a></td>
                <td>9/3/18, 3:47 PM</td>
                <td class="actions">
                   <a href="/country-language-mapping/edit/20" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8948146c77790817080" style="display:none;" method="post" action="/country-language-mapping/delete/20"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="7dd68db76f1ed0ddd59a2c3226eee6692c829b09%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 20?&quot;)) { document.post_62a8948146c77790817080.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/country-language-mapping?page=2">2</a></li><li><a href="/country-language-mapping?page=3">3</a></li><li><a href="/country-language-mapping?page=4">4</a></li>            <li class="next"><a rel="next" href="/country-language-mapping?page=2">next &gt;</a></li>            <li class="last"><a href="/country-language-mapping?page=4">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 4, showing 20 record(s) out of 69 total</p>
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