@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 


      <a href="/countries/add" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a>     
 </section>
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

                <thead>

                  <tr>

                    <th scope="col"><a href="/countries?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col" class="actions">Actions</th>
                    <th scope="col"><a href="/countries?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/countries?direction=asc&amp;sort=iso_alpha_2">Iso Alpha 2</a></th>
                    
                    <th scope="col"><a href="/countries?direction=asc&amp;sort=shopping_ads">Shopping Ads</a></th>
                    <th scope="col"><a href="/countries?direction=asc&amp;sort=active">Active</a></th>
                  
                  </tr>
                </thead>

        <tbody>

                @foreach ($cities as $key => $city)


                <tr>
                        <td>{{ $city->id }}</td>
                        <!-- <td><a href="/countries/view/104">India</a></td> -->
                        <td>Central Delhi</td>
                        <td>{{ $city->name }}</td>
                        
                        
                        <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                        <td class="actions">
                        <a href="/cities/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0decca776034106" style="display:none;" method="post" action="/cities/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="693940990a9240a21c8ed5c2852b5ff0f6800209%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a893c0decca776034106.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
                </tr>

                @endforeach
         
                    </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/cities?page=2">2</a></li><li><a href="/cities?page=3">3</a></li><li><a href="/cities?page=4">4</a></li><li><a href="/cities?page=5">5</a></li><li><a href="/cities?page=6">6</a></li><li><a href="/cities?page=7">7</a></li><li><a href="/cities?page=8">8</a></li><li><a href="/cities?page=9">9</a></li>            <li class="next"><a rel="next" href="/cities?page=2">next &gt;</a></li>            <li class="last"><a href="/cities?page=32">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 32, showing 20 record(s) out of 637 total</p>
    </div>
</div>
</div>
</div>
</div>

@endsection