
@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 


  
    <a href="/affinity-categories" class="btn btn-success">List Affinity Categories</a>    
</section>





<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">                                        
                    <script>
    $(document).ready(function () {
        var formId = '#addaffinityCategory';
        var button = '';
            button = '#addaffinityCategorySubmitBtn';
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

        <form method="post"  action="{{ route('AffinityCategories.update', $affinityCategories->id) }}">
            @csrf
                        <legend>Edit Affinity Category</legend>
                        <div class="box-body">
                            <div class="form-group ">
                                <!-- <label class="control-label">Parent Category</label>
                                <div class="input select"><select name="AffinityCategories[parent_id]" class="form-control" id="affinitycategories-parent-id" value="{{$affinityCategories->parent_id}}">
                                    <option value="">---SELECT---</option>
                                <option value="3">Beauty &amp; Wellness</option><option value="4">Beauty &amp; Wellness / Beauty Mavens</option><option value="5">Beauty &amp; Wellness / Frequently Visits Salons</option><option value="6">Food &amp; Dining</option><option value="21">Food &amp; Dining / Coffee Shop Regulars</option><option value="22">Food &amp; Dining / Cooking Enthusiasts</option><option value="23">Food &amp; Dining / Cooking Enthusiasts / 30 Minute Chefs</option><option value="24">Food &amp; Dining / Cooking Enthusiasts / Aspiring Chefs</option><option value="25">Food &amp; Dining / Fast Food Cravers</option><option value="26">Food &amp; Dining / Foodies</option><option value="27">Food &amp; Dining / Frequently Dines Out</option><option value="28">Food &amp; Dining / Frequently Dines Out / Diners by Meal</option><option value="29">Food &amp; Dining / Frequently Dines Out / Diners by Meal / Frequently Eats Breakfast Out</option><option value="30">Food &amp; Dining / Frequently Dines Out / Diners by Meal / Frequently Eats Dinner Out</option><option value="31">Food &amp; Dining / Frequently Dines Out / Diners by Meal / Frequently Eats Lunch Out</option><option value="7">Home &amp; Garden</option><option value="8">Lifestyles &amp; Hobbies</option><option value="9">Media &amp; Entertainment</option><option value="10">News &amp; Politics</option><option value="16">News &amp; Politics / News Junkies</option><option value="17">News &amp; Politics / News Junkies / Business &amp; Economic News Junkies</option><option value="18" selected="selected">News &amp; Politics / News Junkies / Local News Junkies</option><option value="2">News &amp; Politics / News Junkies / Local News Junkies / Avid Investors</option><option value="19">News &amp; Politics / News Junkies / Men&#039;s Media Fans</option><option value="11">Shoppers</option><option value="12">Sports &amp; Fitness</option><option value="13">Technology</option><option value="14">Travel</option></select></div>                            </div> -->
                            <div class="form-group ">
                                <label class="control-label required">Name</label>
                                <div class="input text"><input type="text" name="name" class="form-control" maxlength="255" id="affinitycategories-name" value="{{$affinityCategories->name}}"/>
                            
                                    @if ($errors->has('googleid'))

                                        <small class="text text-danger" style="display: inline-block;">

                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>

                                        </small>

                                    @endif

                            </div>                            </div>
                            <div class="form-group ">
                                <label class="control-label">Googleid</label>
                                 <div class="input number"><input type="number" name="googleid" class="form-control" id="affinitycategories-googleid" disabled="disabled" value="{{$affinityCategories->googleid}}"/></div>                            </div>
                            <div class="form-group ">
                                <label class="control-label">Slug</label>
                                 <div class="input text"><input type="text" name="alias" class="form-control" maxlength="255" id="affinitycategories-alias" disabled="disabled" value="{{$affinityCategories->alias}}"/></div>                            </div>

                            
                            <div class="form-group ">                                
                                <div class="input checkbox"><input type="hidden" name="status" value="0"/><label for="affinitycategories-status"><input type="checkbox" name="status" value="1" id="affinitycategories-status" checked="checked">Status</label></div>                            </div>
                        </div>

                    </fieldset>
                    <button class="btn btn-primary" id="addaffinityCategorySubmitBtn" type="submit">Submit</button>                    <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="3edabf972a0fb5457dd92e16526342d632279510%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form>                </div>
            </div>
        </div>
    </div>
</section>

                </div>
            <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.11
    </div>
    <strong>Copyright &copy; 2022 <a href="http://www.singleinterface.com">Singleinterface</a>.</strong> All rights
    reserved.
</footer>
<script>
           // saveBrowsingLogs();
            function saveBrowsingLogs(){
                var url = '/affinity-categories/edit/2';
                var queryString = "url="+url;
                  jQuery.ajax({
                                    type: "POST",
                                    url: 'https://testing.myspotlight.co/ajax/save-browsing-logs',
                                    data: queryString,     
                                          
                                    success: function(data){                
            }
        });

    }
</script>

@endsection