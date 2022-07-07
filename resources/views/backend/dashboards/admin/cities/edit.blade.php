@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

<a href="/cities" class="btn btn-success">List Cities</a>
<div class="loader-div" style="display: none;"></div>
<div class="message">
</div>
<div class="app">
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <form method="post" action={{url('/cities/update')."/".$cities->id }}>
                            @csrf
                            <fieldset>
                                <legend>New City</legend>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label required">Countries</label>
                                        <div class="input select"><select name="country_id" class="form-control" id="country-id">
                                                <option value={{$cities->country_id}}>{{$cities->country_name}}</option>
                                                @foreach($countries as $countrie)
                                                <option value={{$countrie->id}}>{{$countrie->name}}</option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label required">State</label>
                                        <div class="input select"><select name="state_id" class="form-control" id="state-id">
                                                <option value={{$cities->state_id}}>{{$stateName->name}}</option>

                                                @foreach($states as $state)
                                                <option value={{$state->id}}>{{$state->name}}</option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label required">City Name</label>

                                        <div class="input text">
                                            <input type="text" name="name" class="form-control" maxlength="30" id="name" value='{{$cities->name}}'>
                                            <span style="color: red"> @error('name')
                                                {{$message}}
                                                @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input checkbox"><label for="active">
                                                <input type="hidden" name="active" value="0" />
                                                <input type="checkbox" name="active" id="active" value="1" {{$cities->active==1 ?" checked ":" "}}>Active</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
