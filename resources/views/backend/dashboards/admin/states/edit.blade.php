@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 


  
    <a href="/states" class="btn btn-success">List States</a>    
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">                                        
                    <form class="form" action="{{ route('States.editData', $states->id)}}" method="POST">
                        {{@csrf_field()}}
                        <fieldset>
            
                            <legend>Add State</legend>
                            <div class="box-body">

                                <div class="form-group ">
                                    <label class="control-label">Country</label>
                                    <div class="input select"><select name="country_id" class="form-control" value="{{ old('parent_id') }}"  id="states-parent-id">
                                        <!-- <option value="">---SELECT---</option> -->
                                        <option value="1">India</option>
                                       
                                        </select>

                                        @if ($errors->has('country_id'))

                                            <small class="text text-danger" style="display: inline-block;">

                                                <span class="text-danger text-left">{{ $errors->first('country_id') }}</span>

                                            </small>

                                        @endif
                                    </div>             
                                </div>


                                    <input type="hidden" name="country_name" maxlength="55" value="India" id="states-name"/>

                                    
                                <div class="form-group ">
                                    <label class="control-label required">Name</label>
                                    <div class="input text">
                                        <input type="text" name="name" class="form-control" maxlength="55" value="{{$states->name}}" id="states-name"/>
                                    </div> 
                                    @if ($errors->has('name'))

                                    <small class="text text-danger" style="display: inline-block;">

                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>

                                    </small>

                                    @endif                           
                                </div>   
                                
                                
                                <div class="form-group">
                                    <label class="control-label required">State Code</label>
                                    
                                    <div class="input text">
                                        <input type="text" name="state_code" class="form-control" maxlength="2" value="{{$states->state_code}}" id="countries-iso-alpha-2" />
                                    </div>   
                                    
                                    @if ($errors->has('state_code'))

                                        <small class="text text-danger" style="display: inline-block;">

                                            <span class="text-danger text-left">{{ $errors->first('state_code') }}</span>

                                        </small>

                                    @endif
                                </div>

                                <div class="form-group ">                                
                                    <div class="input checkbox"><input type="hidden" name="status" value="0"/>
                                    <label for="states-status"><input type="checkbox" name="status" value="1" id="states-status" checked="checked">Active</label>
                                </div>                            
                                </div>
                            </div>

                        </fieldset>
                    
                        <button class="btn btn-primary" id="addstateSubmitBtn" type="submit">Submit</button> 
                        <div style="display:none;">
                            <input type="hidden" name="_Token[fields]" autocomplete="off" value="{{ csrf_token() }}"/>
                            <input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/>
                        </div>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</section>


@endsection






