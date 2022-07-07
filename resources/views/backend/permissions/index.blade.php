@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 

        <a href="{{ route('permissions.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a>     

    </section>
    
        
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Permissions</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body"><table id="example2" class="table table-bordered table-hover">
                    <thead>

            <tr>
                <th scope="col" width="15%">Name</th>
                <th scope="col">Guard</th> 
                <th scope="col" colspan="3" width="1%">Action</th> 
            </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td>
                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="paginator">
            <ul class="pagination">
            {!! $permissions->links() !!}
            <p>Page  of , showing  record(s) out of  total</p>
        </div>

    </div>
    </div>
    </div>
</div>
@endsection
