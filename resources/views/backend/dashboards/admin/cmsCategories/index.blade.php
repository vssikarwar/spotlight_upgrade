@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 

                <div class="content-wrapper">
                    

                    <section class="content-header">        
    <a href="/cms-categories/add" class="btn btn-success">New Cms Category</a>    
  
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
    <h3>Cms Categories</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col"><a href="/cms-categories?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col"><a href="/cms-categories?direction=asc&amp;sort=publisher_id">Publisher</a></th>
                    <th scope="col"><a href="/cms-categories?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/cms-categories?direction=asc&amp;sort=status">Status</a></th>
                    <th scope="col"><a href="/cms-categories?direction=asc&amp;sort=created">Created</a></th>
                    <th scope="col"><a href="/cms-categories?direction=asc&amp;sort=modified">Modified</a></th>
                    <th scope="col" class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($cmsCategories as $key => $cmsCategory)

                        <tr>
                             <?php $id = $cmsCategory->id ?>
                            <td>{{$id}}</td>
                            <td><a href="/publishers/view/1">Google Ads</a></td>
                            <td>{{ $cmsCategory->name }}</td>

                            @if( $cmsCategory->status  == 1)

                            <td><span class='label label-success' style='color: green'>Active</span></td>

                            @else

                            <td><span class='label label-success' style='color: red'>Inactive</span></td>

                            @endif



                            <td>{{ $cmsCategory->created }}</td>
                            <td>{{ $cmsCategory->modified }}</td>
                            <td class="actions">                            
                            
                            <a href="/cms-categories/edit/{{ $id }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            <form name="post_62a6e121f30f4161073819" style="display:none;" method="post" action="/cms-categories/delete/{{ $id }}"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="{{ csrf_token() }}"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="{{ csrf_token() }}"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a6e121f30f4161073819.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                        </td>
                    
                        </tr>

                        @endforeach
                                                    </tbody>
        </table>
    </div>

    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>                        <li class="next disabled"><a href="" onclick="return false;">next &gt;</a></li>                    </ul>
        <p>Page  of , showing  record(s) out of  total</p>
    </div>
</div>
                </div>

@endsection
            