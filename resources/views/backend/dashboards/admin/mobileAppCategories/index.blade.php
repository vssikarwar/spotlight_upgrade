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

<br>

<div class="affinityCategories index large-9 medium-8 columns content box">
    <h3>Mobile App Categories</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
            <thead>

                <tr>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col" class="actions">Actions</th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=parent_id">Parent</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=googleid">Googleid</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=alias">Alias</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=status">Status</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=created">Created</a></th>
                    <th scope="col"><a href="/mobile-app-categories?direction=asc&amp;sort=modified">Modified</a></th>
                    
                </tr>



            </thead>
            <tbody>
            <tbody>

            @foreach ($mobileAppCategories as $key => $mobileAppCategory)

                                <tr>
                    <td>1</td>

                    <td class="actions">                    
                        <form name="post_62a73ec4532d8050671977" style="display:none;" method="post" action="/mobile-app-categories/delete/1">
                        <input type="hidden" name="_method" value="POST"/>
                        <input type="hidden" name="_csrfToken" autocomplete="off" value="{{ csrf_token() }}"/>
                        <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="{{ csrf_token() }}%3A"/>
                        <input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form>
                        <a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a73ec4532d8050671977.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>  
                    </td>

                    <td>Google Play</td>
                    <td>69500</td>
                    <td>All Apps</td>
                    <td>all-apps</td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>10/4/18, 10:53 AM</td>
                    <td>10/4/18, 10:53 AM</td>
                    
                </tr>

                @endforeach

                            
            </tbody>           
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/mobile-app-categories?page=2">2</a></li><li><a href="/mobile-app-categories?page=3">3</a></li><li><a href="/mobile-app-categories?page=4">4</a></li><li><a href="/mobile-app-categories?page=5">5</a></li><li><a href="/mobile-app-categories?page=6">6</a></li><li><a href="/mobile-app-categories?page=7">7</a></li><li><a href="/mobile-app-categories?page=8">8</a></li>            <li class="next"><a rel="next" href="/mobile-app-categories?page=2">next &gt;</a></li>            <li class="last"><a href="/mobile-app-categories?page=8">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 8, showing 20 record(s) out of 145 total</p>
    </div>
</div>                
            
@endsection