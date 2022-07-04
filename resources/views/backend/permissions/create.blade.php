@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

        <a href="{{ route('permissions.index') }}" class="btn btn-success">List Permissions</a>    
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">                                        
                    <form class="form" action="{{ route('permissions.store')}}" method="POST">
                        {{@csrf_field()}}
                        <fieldset>  
                            
                        <legend>Add Permissions</legend>

                        <div class="box-body">
                        <div class="form-group ">
                                <label class="control-label required">Name</label>
                                <div class="input text"><input type="text" name="name" class="form-control" maxlength="255" value="{{ old('name') }}" id="affinitycategories-name"/></div> 
                                @if ($errors->has('name'))

                                <small class="text text-danger" style="display: inline-block;">

                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>

                                </small>

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