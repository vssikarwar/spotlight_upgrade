@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 
<a href="/affinity-categories/add" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a>     
<a href="/affinity-categories/import" class="btn btn-primary">Import</a>     
<a href="/affinity-categories/export" class="btn btn-primary">Export</span></a> 

</section>
        <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Affinity Categories</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body"><table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                    <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col" class="actions">Actions</th>
                    <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=parent_id">Parent</a></th>
                    <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=googleid">Googleid</a></th>
                    <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=alias">Alias</a></th>
                    <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=status">Status</a></th>

                    
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
         </div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 2?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 
        </td>

        <?php $id = $affinityCategory->id;?>


        <td><a>{{$affinityCategory->parent}}</a></td>
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
        </tr>
        @endforeach
                        
                
            </tbody>
        </table>

        <div class="paginator">
            <ul class="pagination">
            {!! $affinityCategories->links() !!}
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






