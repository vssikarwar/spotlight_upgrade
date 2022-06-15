@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

                <div class="content-wrapper">

                        

<section class="content-header">
      <a href="/product-categories/add" class="btn btn-primary">New Product Category</a>      <a href="/product-categories/import" class="btn btn-primary">Import Product Category</a>      <a href="/product-categories/export" class="btn btn-primary">Export Product Category</a>       <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>--></section>

<div class="affinityCategories index large-9 medium-8 columns content box">
    <h3>Product Categories</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col"><a href="/product-categories?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col" class="actions">Actions</th>
                    <th scope="col"><a href="/product-categories?direction=asc&amp;sort=parent_id">Parent</a></th>
                    <th scope="col"><a href="/product-categories?direction=asc&amp;sort=googleid">Googleid</a></th>
                    <th scope="col"><a href="/product-categories?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/product-categories?direction=asc&amp;sort=alias">Alias</a></th>
                    <th scope="col"><a href="/product-categories?direction=asc&amp;sort=status">Status</a></th>
                    <th scope="col"><a href="/product-categories?direction=asc&amp;sort=created">Created</a></th>
                    <th scope="col"><a href="/product-categories?direction=asc&amp;sort=modified">Modified</a></th>
                    
                </tr>
            </thead>
            <tbody>
            <tbody>
                           

                @foreach ($productCategories as $key => $productCategory)
                           
                <tr>
                <?php $id = $productCategory->id; ?>
                    <td>{{$id}}</td>
                    <td class="actions">                                        
                            <a href="/product-categories/edit/4" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                            
                            <form name="post_62a83a1f5783d038263631" style="display:none;" method="post" action="/product-categories/delete/4">
                            <input type="hidden" name="_method" value="POST"/>
                            <input type="hidden" name="_csrfToken" autocomplete="off" value="{{ csrf_token() }}"/>
                            <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="{{ csrf_token() }}"/>
                            <input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div>
                        </form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 4?&quot;)) { document.post_62a83a1f5783d038263631.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                            
                    </td>
                    <td><a href="/product-categories/view/3">Pet Supplies</a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class='label label-success' style='color: green'>Active</span></td>
                    <td>{{$productCategory->created}}</td>
                    <td>{{$productCategory->modified}}</td>
                    
                </tr>

                @endforeach

                        </tbody>           
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            
                        <li class="active"><a href="">1</a></li>
                        <li><a href="/product-categories?page=2">2</a></li>
                        <li><a href="/product-categories?page=3">3</a></li>
                        <li><a href="/product-categories?page=4">4</a></li>
                        <li><a href="/product-categories?page=5">5</a></li>
                        <li><a href="/product-categories?page=6">6</a></li>
                        <li><a href="/product-categories?page=7">7</a></li>
                        <li><a href="/product-categories?page=8">8</a></li>
                        <li><a href="/product-categories?page=9">9</a></li>            
                        <li class="next"><a rel="next" href="/product-categories?page=2">next &gt;</a></li>            <li class="last"><a href="/product-categories?page=272">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 272, showing 20 record(s) out of 5,427 total</p>
    </div>
</div>   

@endsection