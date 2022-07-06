@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 

<a href="/countries" class="btn btn-success">List Countries</a>    


</section>
                    
	
    <!-- Main content --> 
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-9">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add country</h3>
            </div>
			          
			<form method="post" id="addCountryForm" action="{{ route('Countries.editData', $countries->id) }}">
               
            @csrf

            <div class="box-body">
               
				<div class="form-group">
					<label class="control-label required">Name</label>
                 	
                 	<div class="input text">
                        <input type="text" name="name" class="form-control" maxlength="100" id="countries-name" value="{{$countries->name}}"/>
                    </div>                
                </div>
                
                <div class="form-group">
					<label class="control-label required">Iso Alpha 2</label>
                 	
                 	<div class="input text">
                        <input type="text" name="iso_alpha_2" class="form-control" maxlength="2" id="countries-iso-alpha-2" value="{{$countries->iso_alpha_2}}"/>
                    </div>                
                </div>
                
                <div class="form-group">
					<label class="control-label required">Iso Alpha 3</label>
                 	
                 	<div class="input text">
                        <input type="text" name="iso_alpha_3" class="form-control" maxlength="3" id="countries-iso-alpha-3" value="{{$countries->iso_alpha_3}}"/>
                    </div>                
                </div>
                
                <div class="form-group">
					<label class="control-label">Iso Numeric</label>
                 	
                 	<div class="input text">
                        <input type="text" name="iso_numeric" class="form-control" maxlength="5" id="countries-iso-numeric" value="{{$countries->iso_numeric}}"/>
                    </div>                
                </div>
                
                <div class="form-group">
					<label class="control-label">Dailing Code</label>
                 	
                 	<div class="input text">
                        <input type="text" name="dailing_code" class="form-control" maxlength="6" id="countries-dailing-code" value="{{$countries->dailing_code}}"/>
                    </div>                
                </div>
                
                <div class="form-group">
					<label class="control-label">Currency</label>
                 	
                 	<div class="input text">
                        <input type="text" name="currency" class="form-control" maxlength="10" id="countries-currency" value="{{$countries->currency}}"/>
                    </div>                
                </div>

				<div class="form-group">
                 	<div class="input checkbox">
                        <input type="hidden" name="active" value="0"/>
                        <label for="countries-active"><input type="checkbox" name="active" value="1" id="countries-active">Active</label>
                    </div>                  
                    
                    <div class="input checkbox"><input type="hidden" name="shopping_ads" value="0"/>
                        <label for="countries-shopping-ads">
                            <input type="checkbox" name="shopping_ads" value="1" id="countries-shopping-ads" checked="checked">Shopping Ads</label>
                    </div>         
                </div>
			</div>

                    <div class="box-footer">
                        <button class="btn btn-primary" id="addCountrySubmitBtn" type="submit">Submit</button>
                    </div>

                <div style="display:none;">
                    <input type="hidden" name="_Token[fields]" autocomplete="off" value="{{ csrf_token() }}"/>
                    <input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/>
                </div>
            </form>          
        </div>
          <!-- /.box -->
    </div>
</div>
</section>

@endsection