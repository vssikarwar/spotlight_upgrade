@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 
    
<a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"><span class="glyphicon glyphicon-plus"></span></a>

</section>
        
        <div class="mt-2">
            @include('backend.layouts.partials.messages')
        </div>

        <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Users</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body"><table id="example2" class="table table-bordered table-hover">
                    <thead>
            <tr>
                <th scope="col" width="1%">Id</th>
                <th scope="col" width="1%" colspan="3">Action</th> 
                <th scope="col" width="15%">Name</th>
                <th scope="col">Email</th>
                <th scope="col" width="10%">Username</th>
                <th scope="col" width="10%">Roles</th>
   
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>

                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a></td>
                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>

                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="btn btn-info btn-xs">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="paginator">
            <ul class="pagination">
             {!! $users->links() !!}
            <p>Page  of , showing  record(s) out of  total</p>
        </div>
        <div class="d-flex">
            
        </div>

    </div>
    </div>
    </div>
    </div>

@endsection
