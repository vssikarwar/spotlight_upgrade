@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 

                <div class="content-wrapper">


                    <section class="content-header">
      <a href="/countries/add" class="btn btn-primary">New Country</a>     <ol class="breadcrumb">
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
              <h3 class="box-title">Countries</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"><table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th scope="col"><a href="/countries?direction=asc&amp;sort=id">Id</a></th>
                 <th scope="col" class="actions">Actions</th>
                <th scope="col"><a href="/countries?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/countries?direction=asc&amp;sort=iso_alpha_2">Iso Alpha 2</a></th>
                
                <th scope="col"><a href="/countries?direction=asc&amp;sort=shopping_ads">Shopping Ads</a></th>
                <th scope="col"><a href="/countries?direction=asc&amp;sort=active">Active</a></th>
                <th scope="col"><a href="/countries?direction=asc&amp;sort=created">Created</a></th>
                <th scope="col"><a href="/countries?direction=asc&amp;sort=modified">Modified</a></th>
                
                
            </tr>
        </thead>
        <tbody>
        @foreach ($countries as $key => $country)


            <tr>
            <?php $id = $country->id; ?>

                <td>{{$id}}</td>
                <td class="actions">
				
				    <a href="/countries/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8904ca5b04194845808" style="display:none;" method="post" action="/countries/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="41fa49410be1fb413cd89b333a740d0983bfbe71%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a8904ca5b04194845808.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                    
                </td>
                <td>{{ $country->name }}</td>
                <td>{{ $country->iso_alpha_2}}</td>
                <td></td>
                <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                <td>{{ $country->created }}</td>
                <td>{{ $country->modified }}</td>
                
                
            </tr>

            @endforeach
                
        
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/countries?page=2">2</a></li><li><a href="/countries?page=3">3</a></li><li><a href="/countries?page=4">4</a></li><li><a href="/countries?page=5">5</a></li><li><a href="/countries?page=6">6</a></li><li><a href="/countries?page=7">7</a></li><li><a href="/countries?page=8">8</a></li><li><a href="/countries?page=9">9</a></li>            <li class="next"><a rel="next" href="/countries?page=2">next &gt;</a></li>            <li class="last"><a href="/countries?page=13">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 13, showing 20 record(s) out of 249 total</p>
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