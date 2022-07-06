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
                <th scope="col" class="actions">Actions</th>
               <!--  <th scope="col"><a href="/states?direction=asc&amp;sort=country_id">Country</a></th> -->
                <th scope="col"><a href="/states?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/states?direction=asc&amp;sort=alias">Alias</a></th>
                <th scope="col"><a href="/states?direction=asc&amp;sort=state_code">State Code</a></th>
                <th scope="col"><a href="/states?direction=asc&amp;sort=active">Active</a></th>
                
            </tr>
        </thead>
        <tbody>

            @foreach ($states as $key => $state)
            <tr>
            <?php $id = $state->id; ?>
                <td>{{$id}}</td> 


                <td class="actions">
                    <a href="/states/edit/{{$id}}" class="btn btn-success btn-xs"> 
                        <i class="fa fa-edit"></i>
                    </a> 
                    
                    <a href="states/delete/{{$id}}" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete #{{$id}} ?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 
                </td>

                <!-- <td><a href="/countries/view/1">Afghanistan</a></td> -->
                <td>{{$state->name}}</td>
                <td>{{$state->alias}}</td>
                <td>{{$state->state_code}}</td>

                <td>
                    
                    <?php
                        if($state->active == 1)
                        {
                    ?>
                        <a href="/states/status-update/{{$id}}" class="label label-success" onclick="if (confirm(&quot;Are you sure you want to update status of #{{$id}} ?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;" >Active</a>
                    <?php
                        }
                        else
                        { 
                    ?>
                        <a href="/states/status-update/{{$id}}" class="label label-danger" onclick="if (confirm(&quot;Are you sure you want to update status of #{{$id}} ?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;" >Inactive</a>
                    
                    <?php
                        }
                    ?>

                </td>
                
            </tr>
            @endforeach
                
                    </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
        {!! $states->links() !!}
                <p>Page  of , showing  record(s) out of  total</p>
    </div>
</div>
</div>
</div>
                

@endsection