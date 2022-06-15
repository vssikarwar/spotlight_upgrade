@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 


                <div class="content-wrapper">

                    

<section class="content-header">
            <a href="/topics/import" class="btn btn-primary">Import Topic</a>              <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>--></section>

<div class="affinityCategories index large-9 medium-8 columns content box">
    <h3>Topics</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th scope="col"><a href="/topics?direction=asc&amp;sort=id">Id</a></th>
                <th scope="col"><a href="/topics?direction=asc&amp;sort=parent_id">Parent</a></th>
                <th scope="col"><a href="/topics?direction=asc&amp;sort=googleid">Googleid</a></th>
                <th scope="col"><a href="/topics?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/topics?direction=asc&amp;sort=alias">Alias</a></th>
                <th scope="col"><a href="/topics?direction=asc&amp;sort=status">Status</a></th>
                <th scope="col"><a href="/topics?direction=asc&amp;sort=created">Created</a></th>
                <th scope="col"><a href="/topics?direction=asc&amp;sort=modified">Modified</a></th>
                <th scope="col" class="actions">Actions</th>
            </tr>
        </thead>
            <tbody>
            <tbody>
                            <tr>
                <td>1</td>
                <td></td>
                <td>3</td>
                <td>Arts &amp; Entertainment</td>
                <td>arts-entertainment</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a33f0ef148729306" style="display:none;" method="post" action="/topics/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="65f4bb96a7bd87e0b4056d66bd58b11a824ade8c%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a895a33f0ef148729306.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>2</td>
                <td><a href="/topics/view/1">Arts &amp; Entertainment</a></td>
                <td>184</td>
                <td>Celebrities &amp; Entertainment News</td>
                <td>celebrities-entertainment-news</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a33f519998073156" style="display:none;" method="post" action="/topics/delete/2"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="5d41dac9535ffa0c9ebba4412b4a6e7c295cb295%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 2?&quot;)) { document.post_62a895a33f519998073156.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>3</td>
                <td><a href="/topics/view/1">Arts &amp; Entertainment</a></td>
                <td>316</td>
                <td>Comics &amp; Animation</td>
                <td>comics-animation</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a33f7fa487493081" style="display:none;" method="post" action="/topics/delete/3"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="97a755a4296f1868917ebd827ac07c4a3e231be3%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 3?&quot;)) { document.post_62a895a33f7fa487493081.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>4</td>
                <td><a href="/topics/view/3">Comics &amp; Animation</a></td>
                <td>317</td>
                <td>Anime &amp; Manga</td>
                <td>anime-manga</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a3409bc458431203" style="display:none;" method="post" action="/topics/delete/4"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="85aa424f2cb4bcb8f3e9755ff4dd6f657421d2a4%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 4?&quot;)) { document.post_62a895a3409bc458431203.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>5</td>
                <td><a href="/topics/view/3">Comics &amp; Animation</a></td>
                <td>319</td>
                <td>Cartoons</td>
                <td>cartoons</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a340db6228257520" style="display:none;" method="post" action="/topics/delete/5"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="32f66dff682244cdadbad568420726f8af9acd2b%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 5?&quot;)) { document.post_62a895a340db6228257520.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>6</td>
                <td><a href="/topics/view/3">Comics &amp; Animation</a></td>
                <td>318</td>
                <td>Comics</td>
                <td>comics</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a34117f313098607" style="display:none;" method="post" action="/topics/delete/6"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="3ba8a6095427e549766820efd6724382d5918df3%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 6?&quot;)) { document.post_62a895a34117f313098607.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>7</td>
                <td><a href="/topics/view/1">Arts &amp; Entertainment</a></td>
                <td>612</td>
                <td>Entertainment Industry</td>
                <td>entertainment-industry</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a3414ac208135549" style="display:none;" method="post" action="/topics/delete/7"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="6fec08ac4375c0027899e34761d8fbf190055aa8%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 7?&quot;)) { document.post_62a895a3414ac208135549.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>8</td>
                <td><a href="/topics/view/7">Entertainment Industry</a></td>
                <td>1116</td>
                <td>Film &amp; TV Industry</td>
                <td>film-tv-industry</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a341b01104039574" style="display:none;" method="post" action="/topics/delete/8"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="97f0a155b40f42e65c03ed9da22fa0451f95dd8a%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 8?&quot;)) { document.post_62a895a341b01104039574.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>9</td>
                <td><a href="/topics/view/8">Film &amp; TV Industry</a></td>
                <td>1108</td>
                <td>Film &amp; TV Awards</td>
                <td>film-tv-awards</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a341dde755431929" style="display:none;" method="post" action="/topics/delete/9"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="4f13057ee859bd1f3f6fcbd9c9bddd7264951446%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 9?&quot;)) { document.post_62a895a341dde755431929.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>10</td>
                <td><a href="/topics/view/8">Film &amp; TV Industry</a></td>
                <td>1117</td>
                <td>Film &amp; TV Production</td>
                <td>film-tv-production</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a3420a0319174030" style="display:none;" method="post" action="/topics/delete/10"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="54432fb7a7df46259d3b7afd998d1d76d2b448fe%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 10?&quot;)) { document.post_62a895a3420a0319174030.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>11</td>
                <td><a href="/topics/view/7">Entertainment Industry</a></td>
                <td>1115</td>
                <td>Recording Industry</td>
                <td>recording-industry</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a342972127761943" style="display:none;" method="post" action="/topics/delete/11"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="3e552d7168aace2cfa8480c612301ea561dd17bd%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 11?&quot;)) { document.post_62a895a342972127761943.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>12</td>
                <td><a href="/topics/view/11">Recording Industry</a></td>
                <td>1113</td>
                <td>Music Awards</td>
                <td>music-awards</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a342c5e210497622" style="display:none;" method="post" action="/topics/delete/12"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="c986f99ff32e60fe792d0c86daa7406dc8e268cd%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 12?&quot;)) { document.post_62a895a342c5e210497622.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>13</td>
                <td><a href="/topics/view/11">Recording Industry</a></td>
                <td>1114</td>
                <td>Record Labels</td>
                <td>record-labels</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a342f0b698066586" style="display:none;" method="post" action="/topics/delete/13"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="ea928c31eeaaed71abc9395fd31c78c741d46b92%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 13?&quot;)) { document.post_62a895a342f0b698066586.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>14</td>
                <td><a href="/topics/view/1">Arts &amp; Entertainment</a></td>
                <td>569</td>
                <td>Events &amp; Listings</td>
                <td>events-listings</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a343752717491417" style="display:none;" method="post" action="/topics/delete/14"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="e980312223f09451f0384dd0ee1e4821c9314ed6%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 14?&quot;)) { document.post_62a895a343752717491417.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>15</td>
                <td><a href="/topics/view/14">Events &amp; Listings</a></td>
                <td>188</td>
                <td>Bars, Clubs &amp; Nightlife</td>
                <td>bars-clubs-nightlife</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a343a1b171015102" style="display:none;" method="post" action="/topics/delete/15"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="9f7b8ecc53b4f72853bd772741f983042cb8334e%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 15?&quot;)) { document.post_62a895a343a1b171015102.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>16</td>
                <td><a href="/topics/view/14">Events &amp; Listings</a></td>
                <td>891</td>
                <td>Concerts &amp; Music Festivals</td>
                <td>concerts-music-festivals</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a343cf0625553313" style="display:none;" method="post" action="/topics/delete/16"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="7b564550d4ee1378371b8c0290246b6bcdacc4d6%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 16?&quot;)) { document.post_62a895a343cf0625553313.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>17</td>
                <td><a href="/topics/view/14">Events &amp; Listings</a></td>
                <td>614</td>
                <td>Event Ticket Sales</td>
                <td>event-ticket-sales</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a343fb6610390187" style="display:none;" method="post" action="/topics/delete/17"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="731cb8a51a7db0e85203c89bc8317cdcbf95565f%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 17?&quot;)) { document.post_62a895a343fb6610390187.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>18</td>
                <td><a href="/topics/view/14">Events &amp; Listings</a></td>
                <td>1531</td>
                <td>Expos &amp; Conventions</td>
                <td>expos-conventions</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a344b2d226350751" style="display:none;" method="post" action="/topics/delete/18"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="9709b2007a8db02ac8740dd581aa7451cf78d1eb%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 18?&quot;)) { document.post_62a895a344b2d226350751.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>19</td>
                <td><a href="/topics/view/14">Events &amp; Listings</a></td>
                <td>1086</td>
                <td>Film Festivals</td>
                <td>film-festivals</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a344df9783136590" style="display:none;" method="post" action="/topics/delete/19"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="723560ec0aed788f72c470aebc0ed4d542c40855%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 19?&quot;)) { document.post_62a895a344df9783136590.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        <tr>
                <td>20</td>
                <td><a href="/topics/view/14">Events &amp; Listings</a></td>
                <td>1530</td>
                <td>Food &amp; Beverage Events</td>
                <td>food-beverage-events</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td>10/3/18, 6:25 PM</td>
                <td>10/3/18, 6:25 PM</td>
                <td class="actions">
                                                <form name="post_62a895a34549d968774012" style="display:none;" method="post" action="/topics/delete/20"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="89480a5286d6323c75658b4acdfef99353c451df%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 20?&quot;)) { document.post_62a895a34549d968774012.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
            </tr>
                        
            </tbody>           
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/topics?page=2">2</a></li><li><a href="/topics?page=3">3</a></li><li><a href="/topics?page=4">4</a></li><li><a href="/topics?page=5">5</a></li><li><a href="/topics?page=6">6</a></li><li><a href="/topics?page=7">7</a></li><li><a href="/topics?page=8">8</a></li><li><a href="/topics?page=9">9</a></li>            <li class="next"><a rel="next" href="/topics?page=2">next &gt;</a></li>            <li class="last"><a href="/topics?page=112">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 112, showing 20 record(s) out of 2,221 total</p>
    </div>
</div>                

@endsection