@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

                <div class="content-wrapper">
                    
    
                 

<section class="content-header">
      <a href="/mobile-app-categories/import" class="btn btn-primary">Import Mobile App Category</a>      
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
    <h3>Mobile App Categories</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=parent_id">Parent</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=googleid">Googleid</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=alias">Alias</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=status">Status</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=created">Created</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=modified">Modified</a></th>
                    <th scope="col" class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                                <tr>
                    <td>1</td>
                    <td></td>
                    <td>69500</td>
                    <td>All Apps</td>
                    <td>all-apps</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec4532d8050671977" style="display:none;" method="post" action="/mobile-app-categories/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="49e26bb4ac3130936d5bd1cb401b99bb4f679f59%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a73ec4532d8050671977.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>2</td>
                    <td><a href="/mobile-app-categories/view/1">All Apps</a></td>
                    <td>60000</td>
                    <td>Google Play</td>
                    <td>google-play</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec454023377649256" style="display:none;" method="post" action="/mobile-app-categories/delete/2"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="b76944d915acd27be1d7805b9823a6a46c9fd10c%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 2?&quot;)) { document.post_62a73ec454023377649256.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>3</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60001</td>
                    <td>Books &amp; Reference</td>
                    <td>books-reference</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec454332077640506" style="display:none;" method="post" action="/mobile-app-categories/delete/3"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="68624b5709d56cb8c9a0b1c333cb29cf84d52f8c%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 3?&quot;)) { document.post_62a73ec454332077640506.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>4</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60002</td>
                    <td>Business</td>
                    <td>business</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec454a3f380629806" style="display:none;" method="post" action="/mobile-app-categories/delete/4"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="5336da5dcfb35b771a77329710caf820e9fb5294%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 4?&quot;)) { document.post_62a73ec454a3f380629806.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>5</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60003</td>
                    <td>Comics</td>
                    <td>comics</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec455060227800903" style="display:none;" method="post" action="/mobile-app-categories/delete/5"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="dea0a9c124aace53f1f4b2a641e424f89caa29c3%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 5?&quot;)) { document.post_62a73ec455060227800903.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>6</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60004</td>
                    <td>Communication</td>
                    <td>communication</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec455325895179691" style="display:none;" method="post" action="/mobile-app-categories/delete/6"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="e39687391e8dd2b1c1e0b3ddd350741bd913b701%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 6?&quot;)) { document.post_62a73ec455325895179691.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>7</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60005</td>
                    <td>Education</td>
                    <td>education</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec4555ef114923220" style="display:none;" method="post" action="/mobile-app-categories/delete/7"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="9d9d92bf4c862f73345786deb079126e7b159055%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 7?&quot;)) { document.post_62a73ec4555ef114923220.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>8</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60006</td>
                    <td>Entertainment</td>
                    <td>entertainment</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec4558c4547959803" style="display:none;" method="post" action="/mobile-app-categories/delete/8"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="db0fb6b76c8f6416a5894e9516e4f3d6b88d7573%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 8?&quot;)) { document.post_62a73ec4558c4547959803.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>9</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60007</td>
                    <td>Finance</td>
                    <td>finance</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec455b7a622313305" style="display:none;" method="post" action="/mobile-app-categories/delete/9"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="c052fb9fd52af19d3b8cbe0057fc57c949ac3a9b%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 9?&quot;)) { document.post_62a73ec455b7a622313305.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>10</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60008</td>
                    <td>Games</td>
                    <td>games</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec455e64051710133" style="display:none;" method="post" action="/mobile-app-categories/delete/10"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="5339637bef21e61cbc7d1d276690c715e77e3282%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 10?&quot;)) { document.post_62a73ec455e64051710133.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>11</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60010</td>
                    <td>Libraries &amp; Demo</td>
                    <td>libraries-demo</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec456130093309674" style="display:none;" method="post" action="/mobile-app-categories/delete/11"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="0619d44b6fa626e151edac1ff7432e25aece67d9%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 11?&quot;)) { document.post_62a73ec456130093309674.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>12</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60011</td>
                    <td>Lifestyle</td>
                    <td>lifestyle</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec457261301477911" style="display:none;" method="post" action="/mobile-app-categories/delete/12"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="5bcbcd6ab1c06c560562b39a55f14f0578a52672%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 12?&quot;)) { document.post_62a73ec457261301477911.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>13</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60013</td>
                    <td>Video Players &amp; Editors</td>
                    <td>video-players-editors</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec45753a909996784" style="display:none;" method="post" action="/mobile-app-categories/delete/13"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="3360cf24d6ec43c123f10908f8b2e4530e503ada%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 13?&quot;)) { document.post_62a73ec45753a909996784.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>14</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60015</td>
                    <td>Music &amp; Audio</td>
                    <td>music-audio</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec45780e148471858" style="display:none;" method="post" action="/mobile-app-categories/delete/14"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="7ce8afe5a0371f401c44f16040f836d70ef488fb%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 14?&quot;)) { document.post_62a73ec45780e148471858.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>15</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60016</td>
                    <td>News &amp; Magazines</td>
                    <td>news-magazines</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec457ac0854722132" style="display:none;" method="post" action="/mobile-app-categories/delete/15"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="7d72e4a7a3eadcaf996277afca41b751544cfbe8%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 15?&quot;)) { document.post_62a73ec457ac0854722132.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>16</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60017</td>
                    <td>Personalization</td>
                    <td>personalization</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec457da7470294880" style="display:none;" method="post" action="/mobile-app-categories/delete/16"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="38497ea2d6920da9b2b10553e1255d910db65c85%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 16?&quot;)) { document.post_62a73ec457da7470294880.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>17</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60018</td>
                    <td>Photography</td>
                    <td>photography</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec458078742397995" style="display:none;" method="post" action="/mobile-app-categories/delete/17"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="956bb2539cadacdb63ffc5f20c758af827a9ad60%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 17?&quot;)) { document.post_62a73ec458078742397995.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>18</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60019</td>
                    <td>Productivity</td>
                    <td>productivity</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec45884c950048135" style="display:none;" method="post" action="/mobile-app-categories/delete/18"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="9cbfbdf916c89bb364cd6689b5bf89e52fccc1ae%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 18?&quot;)) { document.post_62a73ec45884c950048135.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>19</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60020</td>
                    <td>Shopping</td>
                    <td>shopping</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec458bd8009470419" style="display:none;" method="post" action="/mobile-app-categories/delete/19"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="4c37546f665ace9e0b8e540acbb33b0c559c393e%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 19?&quot;)) { document.post_62a73ec458bd8009470419.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            <tr>
                    <td>20</td>
                    <td><a href="/mobile-app-categories/view/2">Google Play</a></td>
                    <td>60021</td>
                    <td>Social</td>
                    <td>social</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    <td class="actions">                    
                    <form name="post_62a73ec458efc678222834" style="display:none;" method="post" action="/mobile-app-categories/delete/20"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="732c83d16141c22ebd135c0355f2ee58e405d12153b4613ca61531fd78934262ec9cea46be7690d5eb4575944ca0d12b2d94df5ca392a02fccc90b4f851a45c1"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="2f7a982c83dbf0c88424a382aea523d1b03d2891%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 20?&quot;)) { document.post_62a73ec458efc678222834.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    </td>
                </tr>
                            
            </tbody>           
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/mobile-app-categories?page=2">2</a></li><li><a href="/mobile-app-categories?page=3">3</a></li><li><a href="/mobile-app-categories?page=4">4</a></li><li><a href="/mobile-app-categories?page=5">5</a></li><li><a href="/mobile-app-categories?page=6">6</a></li><li><a href="/mobile-app-categories?page=7">7</a></li><li><a href="/mobile-app-categories?page=8">8</a></li>            <li class="next"><a rel="next" href="/mobile-app-categories?page=2">next &gt;</a></li>            <li class="last"><a href="/mobile-app-categories?page=8">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 8, showing 20 record(s) out of 145 total</p>
    </div>
</div>                </div>
            
@endsection