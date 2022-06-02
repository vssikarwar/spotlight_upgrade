@extends('backend.layouts.app-master')

@section('content')
    <br><br><br>

    <div class="bg-light p-4 rounded">
        <h2>Locations</h2>
        <div class="lead">
            Manage your locations here.
            <a href="{{ route('locations.create') }}" class="btn btn-primary btn-sm float-right">Add location</a>
        </div>
        <br>
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
                    <a class="btn btn-primary btn-sm" href="{{ route('locations.edit', $location->id) }}">Edit</a>
                </td>

            </tr>
            @endforeach
        </table>
        <br>

        <div class="d-flex">
            {!! $locations->links() !!}
        </div>

    </div>
@endsection
 