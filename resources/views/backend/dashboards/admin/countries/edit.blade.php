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
			<script>
    $(document).ready(function () {
        var formId = '#addCountryForm';
        var button = '';
            button = '#addCountrySubmitBtn';
        if (button) {
            var validate = ajaxValidation();
            $(button).click(function (e) {
                $(this).after('<span class="submit-indicator"></span>');
                $(this).attr('disabled', 'disabled');
                var self = this;
                var url = $(formId).attr('action');
                var element = $(formId);
                validate.doPost({
                    url: url,
                    buttonRef: self,
                    element: element,
                    callback: function (message) {
                        $(this).removeAttr('disabled');
                        if (message == 'error') {
                            $('.submit-indicator').remove();
                            $(self).unbind();
                        } else {
                            $(formId).submit();
                        }
                    }
                });
                return false;
            });
        }
    });
</script>            
			<form method="post" enctype="multipart/form-data" accept-charset="utf-8" id="addCountryForm" action="/countries/add"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>			 <div class="box-body">
               
				<div class="form-group">
					<label class="control-label required">Name</label>
                 	
                 	<div class="input text"><input type="text" name="Countries[name]" class="form-control" maxlength="100" id="countries-name"/></div>                </div><div class="form-group">
					<label class="control-label required">Iso Alpha 2</label>
                 	
                 	<div class="input text"><input type="text" name="Countries[iso_alpha_2]" class="form-control" maxlength="2" id="countries-iso-alpha-2"/></div>                </div><div class="form-group">
					<label class="control-label required">Iso Alpha 3</label>
                 	
                 	<div class="input text"><input type="text" name="Countries[iso_alpha_3]" class="form-control" maxlength="3" id="countries-iso-alpha-3"/></div>                </div><div class="form-group">
					<label class="control-label">Iso Numeric</label>
                 	
                 	<div class="input text"><input type="text" name="Countries[iso_numeric]" class="form-control" maxlength="5" id="countries-iso-numeric"/></div>                </div><div class="form-group">
					<label class="control-label">Dailing Code</label>
                 	
                 	<div class="input text"><input type="text" name="Countries[dailing_code]" class="form-control" maxlength="6" id="countries-dailing-code"/></div>                </div><div class="form-group">
					<label class="control-label">Currency</label>
                 	
                 	<div class="input text"><input type="text" name="Countries[currency]" class="form-control" maxlength="10" id="countries-currency"/></div>                </div>
				<div class="form-group">
                 	<div class="input checkbox"><input type="hidden" name="Countries[active]" value="0"/><label for="countries-active"><input type="checkbox" name="Countries[active]" value="1" id="countries-active">Active</label></div>                  <div class="input checkbox"><input type="hidden" name="Countries[shopping_ads]" value="0"/><label for="countries-shopping-ads"><input type="checkbox" name="Countries[shopping_ads]" value="1" id="countries-shopping-ads" checked="checked">Shopping Ads</label></div>         </div>
			</div>
			<div class="box-footer">
							  <button class="btn btn-primary" id="addCountrySubmitBtn" type="submit">Submit</button>
              </div>
          <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="3a0ba573fa83214c1db22ac72b4959f5bc6898ff%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form>          </div>
          <!-- /.box -->
		</div>
	</div>
	</section>

@endsection