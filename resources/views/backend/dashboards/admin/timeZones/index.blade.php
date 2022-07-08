@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

<a href="/time-zones/add" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a>     
 </section>

 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Time Zones</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"><table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col" class="actions">Actions</th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=country_id">Country</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=value">Value</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=status">Status</a></th>
                    <th scope="col"><a href="/time-zones?direction=asc&amp;sort=isdefault">Isdefault</a></th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                 @foreach ($timeZones as $key => $timeZone)
                <tr>
                   <?php $id = $timeZone->id; ?>
                        <td>{{$id}}</td>

                        <td class="actions">
                        <a href="/time-zones/edit/{{$id}}" class="btn btn-success btn-xs"> 
                                <i class="fa fa-edit"></i>
                        </a> 
                        
                        <a href="time-zones/delete/{{$id}}" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete #{{$id}} ?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 
                        </td>

                        <td>Australia</td>
                        <td>{{$timeZone->name}}</td>
                        <td>{{$timeZone->value}}</td>

                        <td>
                                
                        <?php
                                if($timeZone->status == 1)
                                {
                                ?>
                                        <a href="/time-zones/status-update/{{$id}}" class="label label-success" onclick="if (confirm(&quot;Are you sure you want to update status of #{{$id}} ?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;" >Active</a>
                        <?php
                                }
                                else
                                { 
                        ?>
                                        <a href="/time-zones/status-update/{{$id}}" class="label label-danger" onclick="if (confirm(&quot;Are you sure you want to update status of #{{$id}} ?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;" >Inactive</a>
                                
                        <?php
                                }
                        ?>
                        
                        </td>

                        <td>
                                <?php
                                        if($timeZone->isdefault == 1)
                                        {
                                                echo "Yes";
                                        }
                                        else
                                        {
                                                echo "No";
                                        }
                                ?>
                        </td>                
                        
                </tr>
                 @endforeach
                        
                        </tbody>           
            </tbody>
        </table>
    
        <div class="paginator">
        <ul class="pagination">
        {!! $timeZones->links() !!}
                <p>Page  of , showing  record(s) out of  total</p>
    </div>
    </div>
</div>
</div>
</div>
              
@endsection