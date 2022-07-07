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
                  <tr>

                    <th scope="col"><a href="/countries?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col" class="actions">Actions</th>
                    <th scope="col"><a href="/countries?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/countries?direction=asc&amp;sort=iso_alpha_2">Iso Alpha 2</a></th>
                    
                    <th scope="col"><a href="/countries?direction=asc&amp;sort=shopping_ads">Shopping Ads</a></th>
                    <th scope="col"><a href="/countries?direction=asc&amp;sort=active">Status</a></th>
                  
                  </tr>
                </thead>
        <tbody>
        @foreach ($countries as $key => $country)


            <tr>
            <?php $id = $country->id; ?>

                <td>{{$id}}</td>

                <td class="actions">
                    <a href="/countries/edit/{{$id}}" class="btn btn-success btn-xs"> 
                        <i class="fa fa-edit"></i>
                    </a> 
                    
                    <a href="countries/delete/{{$id}}" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete #{{$id}} ?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 
                </td>

                <td>{{ $country->name }}</td>
                <td>{{ $country->iso_alpha_2}}</td>

                <td>{{ $country->shopping_ads }}</td>
                
                <td>

                  <?php
                      if($country->active == 1)
                      {
                  ?>
                  <a href="/countries/status-update/{{$id}}" class="label label-success" onclick="if (confirm(&quot;Are you sure you want to update status of #{{$id}} ?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;" >Active</a>
                  <?php
                      }
                      else
                      { 
                  ?>
                  <a href="/countries/status-update/{{$id}}" class="label label-danger" onclick="if (confirm(&quot;Are you sure you want to update status of #{{$id}} ?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;" >Inactive</a>
                  
                  <?php
                    }
                  ?>

                </td>
                
                
            </tr>

            @endforeach
                
        
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
        {!! $countries->links() !!}
                <p>Page  of , showing  record(s) out of  total</p>
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