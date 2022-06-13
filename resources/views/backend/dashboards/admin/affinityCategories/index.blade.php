@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 

  
                <div class="content-wrapper">
                    
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>-->                   
                    

<section class="content-header">
    <a href="/affinity-categories/add" class="btn btn-primary">New Affinity Category</a>    <a href="/affinity-categories/import" class="btn btn-primary">Import Affinity Category</a>    <a href="/affinity-categories/export" class="btn btn-primary">Export Affinity Category</a>    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>


<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>--></section>

<div class="affinityCategories index large-9 medium-8 columns content box">
    <h3>Affinity Categories</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=id">Id</a></th>
                <th scope="col" class="actions">Actions</th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=parent_id">Parent</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=googleid">Googleid</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=alias">Alias</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=status">Status</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=created">Created</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=modified">Modified</a></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($affinityCategories as $key => $affinityCategory)
                        <tr>
                <td>{{ $affinityCategory->id }}</td>
                <?php $id = $affinityCategory->id; ?>
                
                <td class="actions">
                <a href="/affinity-categories/edit/{{$id}}" class="btn btn-success btn-xs">
                  <i class="fa fa-edit"></i></a>                            
                  <form name="post_62a194d0c3998911570236" style="display:none;" method="post" action="/affinity-categories/delete/{{$id}}">
                  <input type="hidden" name="_method" value="POST">
                  <input type="hidden" name="_csrfToken" autocomplete="off" value="684e7e0318b45dc8aa29affd2cdf8a00c59ac84235681eed02bd3d880a293561fa4e82356a043c979ac40187abb5f16190ea7cd920c2d38946e8fabc1b99d95d">
                  <div style="display:none;">
                  <input type="hidden" name="_Token[fields]" autocomplete="off" value="bbfc1435449e24024708e5e20759ad55050f4da2%3A">
                  <input type="hidden" name="_Token[unlocked]" autocomplete="off" value="">
                </div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 2?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                        </td>

                <?php $id = $affinityCategory->id; 
                      $pid = $affinityCategory->parent_id;
                      
                      $parr[$id] = $affinityCategory->name ;

                if($pid == 0)
                {
                $parent = "";
                }
                else
                {
                $parent = $parr[$pid];
                }

                ?>



                <td><a href="/affinity-categories/view/18">{{ $parent }}</a></td>
                <td>{{ $affinityCategory->googleid }}</td>
                <td>{{ $affinityCategory->name }}</td>
                <td>{{ $affinityCategory->alias }}</td>

                <?php
                if($affinityCategory->status == 1)
                {
                $status = 'Active';
                }
                else
                { 
                $status = 'Inactive';
                }
                ?>
                

                <td><span class='label label-success' style='color: green'>{{ $status }}</span></td>
                <td>{{ $affinityCategory->created }}</td>
                <td>{{ $affinityCategory->modified }}</td>
               
            </tr>
            @endforeach
                    </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/affinity-categories?page=2">2</a></li>            <li class="next"><a rel="next" href="/affinity-categories?page=2">next &gt;</a></li>            <li class="last"><a href="/affinity-categories?page=2">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 2, showing 20 record(s) out of 30 total</p>
    </div>
</div>
                
            

@endsection