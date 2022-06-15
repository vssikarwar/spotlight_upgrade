

@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

                <div class="content-wrapper">
                    
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>-->                    </section>
                    <section class="content-header">        
    <a href="/cms-pages/add" class="btn btn-success">New Cms Page</a>        
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
<div class="publishers index large-9 medium-8 columns content box">
    <h3>Cms Pages</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col"><a href="/cms-pages?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col" class="actions">Actions</th>
                    <th scope="col"><a href="/cms-pages?direction=asc&amp;sort=cms_category_id">Cms Category</a></th>
                    <th scope="col"><a href="/cms-pages?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/cms-pages?direction=asc&amp;sort=shortdescription">Shortdescription</a></th>
                    
                    <th scope="col"><a href="/cms-pages?direction=asc&amp;sort=alias">Alias</a></th>
                    <th scope="col"><a href="/cms-pages?direction=asc&amp;sort=status">Status</a></th>
                    <th scope="col"><a href="/cms-pages?direction=asc&amp;sort=created">Created</a></th>
                    
                    
                </tr>
            </thead> 
            <tbody>

            @foreach ($cmsPages as $key => $cmsPage)
                                    <tr>

                        <td>{{ $cmsPage->id }}</td>
                       <?php $id = $cmsPage->id ; ?>
                       <td class="actions">
                       <a href="/cms-pages/edit/{{$id}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            
                       <form name="post_62a704dc42b86298536101" style="display:none;" method="post" action="/cms-pages/delete/201">
                       <input type="hidden" name="_method" value="POST"/>
                       <input type="hidden" name="_csrfToken" autocomplete="off" value="{{ csrf_token() }}"/>
                       <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="{{ csrf_token() }}"/>
                       <input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form>
                       <a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 201?&quot;)) { document.post_62a704dc42b86298536101.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            

                       </td>
                        <td>Display Page</td>
                        <td>Test2</td>
                        <td style="width:30%">Test2 Short Description</td>
                        
                        <td>test2</td>

                        
                            @if($cmsPage->status == 1)
                            
                                <td><span class='label label-success' style='color: green'>Active</span></td>
                            
                            @else
                            
                            <td><span class='label label-success' style='color: red'>Inactive</span></td>
                            
                            @endif
                        
                        <td>{{ $cmsPage->created }}</td>
                        


                    </tr>

                    @endforeach
                                 
                            </tbody>
        </table>
    </div>

    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/cms-pages?page=2">2</a></li><li><a href="/cms-pages?page=3">3</a></li><li><a href="/cms-pages?page=4">4</a></li><li><a href="/cms-pages?page=5">5</a></li><li><a href="/cms-pages?page=6">6</a></li>            <li class="next"><a rel="next" href="/cms-pages?page=2">next &gt;</a></li>            <li class="last"><a href="/cms-pages?page=6">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 6, showing 20 record(s) out of 108 total</p>
    </div>
</div>
            
                @endsection