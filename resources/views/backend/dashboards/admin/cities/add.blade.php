@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

<a href="/cities" class="btn btn-success">List Cities</a>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <form method="post" accept-charset="utf-8" action="/cities/add-cities">
                        @csrf
                        <fieldset>
                            <legend>New City</legend>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label required">Countries</label>
                                    <div class="input select">
                                        <select name="country_id" class="form-control" id="country-id">
                                            @foreach($countries as $countrie)
                                            <option value= {{$countrie->id}} >{{$countrie->name}}</option>
                                            @endforeach
                                        </select></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label required">State</label>
                                    <div class="input select">
                                        <select name="state_id" class="form-control" id="state-id">
                                            @foreach($states as $state)
                                            <option value={{$state->id}}>{{$state->name}}</option>
                                            @endforeach
                                        </select></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label required">City Name</label>
                                    <div class="input text"><input type="text" name="name" class="form-control" maxlength="30" id="name" /></div>
                                    <span style="color: red"> @error('name')
                                        {{$message}}
                                        @enderror</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <div class="input checkbox">
                                        <input type="hidden" name="active" value="0" />
                                        <label for="active">
                                        <input type="checkbox" name="active" value="1" id="active" checked="checked">Active</label>
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
