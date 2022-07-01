@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

<a href="/states/add" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a>     
 </section>
                    
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">States</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"><table id="example2" class="table table-bordered table-hover">
                <thead>
            <tr>
                <th scope="col"><a href="/states?direction=asc&amp;sort=id">Id</a></th>
               <!--  <th scope="col"><a href="/states?direction=asc&amp;sort=country_id">Country</a></th> -->
                <th scope="col"><a href="/states?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/states?direction=asc&amp;sort=alias">Alias</a></th>
                <th scope="col"><a href="/states?direction=asc&amp;sort=state_code">State Code</a></th>
                <th scope="col"><a href="/states?direction=asc&amp;sort=active">Active</a></th>
                <th scope="col" class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>Delhi</td>
                <td></td>
                <td>DL</td>
                <td><span class='label label-success' style='color: green'>Active</span></td>
                <td class="actions">
                    <a href="/states/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a8935917dd6928627614" style="display:none;" method="post" action="/states/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="7d8d4f306d73c6f1d2d5749e8a4af3132673e893%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a8935917dd6928627614.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                
                    </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/states?page=2">2</a></li>            <li class="next"><a rel="next" href="/states?page=2">next &gt;</a></li>            <li class="last"><a href="/states?page=2">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 2, showing 20 record(s) out of 38 total</p>
    </div>
</div>
</div>
</div>
                

@endsection