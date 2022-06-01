@extends('backend.layouts.app-master')

@section('content')
    
    <h1 class="mb-3">Laravel 8 User Roles and Permissions Step by Step Tutorial - codeanddeploy.com</h1>

    <div class="bg-light p-4 rounded">
        <h2>Locations</h2>
        <div class="lead">
            Manage your locations here.
            <a href="{{ route('locations.create') }}" class="btn btn-primary btn-sm float-right">Add location</a>
        </div>
        
        <div class="mt-2">
            @include('backend.layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($locations as $key => $location)
            <tr>
                <td>{{ $location->id }}</td>
                <?php $id = $location->id; ?>
                <td>{{ $location->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{!! url('/location/$id/edit') !!}">Edit</a>
                </td>

            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $locations->links() !!}
        </div>

    </div>
@endsection
 