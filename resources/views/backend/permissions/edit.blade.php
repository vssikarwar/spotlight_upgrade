@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

<a href="{{ route('permissions.index') }}" class="btn btn-success">List Permissions</a>    
</section>

<section class="content"> 
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body"> 

                <form class="form" action="{{ route('permissions.update', $permission->id) }}" method="POST">
                        {{@csrf_field()}}
                        @method('patch')
                        <fieldset>  
                            
                        <legend>Add Permissions</legend>


                
                <div class="box-body">
                        <div class="form-group ">
                    <label for="name" class="control-label required">Name</label>

                    <input value="{{ $permission->name }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                </div>

                <button type="submit" class="btn btn-primary">Save permission</button>
                <a href="{{ route('permissions.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
    </div>
</div>
@endsection