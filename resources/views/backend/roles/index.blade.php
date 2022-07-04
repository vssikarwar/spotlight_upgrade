@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 

<a href="{{ route('roles.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a>     

    </section>
     
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Roles</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body"><table id="example2" class="table table-bordered table-hover">
                    <thead>
            <tr>
             <th width="1%">No</th>
             <th>Name</th>
             <th width="3%" colspan="3">Action</th>
            </tr>

            </thead>
            <tbody>

            @foreach ($roles as $key => $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info btn-xs" href="{{ route('roles.show', $role->id) }}"><i class="fa fa-eye"></i></a>
                </td>
                <td>
                    <a class="btn btn-primary btn-xs" href="{{ route('roles.edit', $role->id) }}"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
        </div>

        <div class="paginator">
            <ul class="pagination">
            {!! $roles->links() !!}
        </div>

   
    </div>
    </div>
    </div>
@endsection
