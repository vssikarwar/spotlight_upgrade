@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 


  
    <a href="/affinity-categories" class="btn btn-success">List Affinity Categories</a>    
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">                                        
                    <form class="form" action="{{ route('AffinityCategories.addData')}}" method="POST">
                        {{@csrf_field()}}
                        <fieldset>
                        <legend>Add Affinity Category</legend>
                        <div class="box-body">
                            <div class="form-group ">
                                <label class="control-label">Parent Category</label>
                                <div class="input select"><select name="parent_id" class="form-control" id="affinitycategories-parent-id">
                                    <option value="">---SELECT---</option>
                                    <option value="3">Beauty &amp; Wellness</option>
                                    <option value="4">Beauty &amp; Wellness / Beauty Mavens</option>
                                    <option value="5">Beauty &amp; Wellness / Frequently Visits Salons</option>
                                    <option value="6">Food &amp; Dining</option>
                                    <option value="21">Food &amp; Dining / Coffee Shop Regulars</option>
                                    <option value="22">Food &amp; Dining / Cooking Enthusiasts</option>
                                    <option value="23">Food &amp; Dining / Cooking Enthusiasts / 30 Minute Chefs</option>
                                    <option value="24">Food &amp; Dining / Cooking Enthusiasts / Aspiring Chefs</option>
                                    <option value="25">Food &amp; Dining / Fast Food Cravers</option>
                                    <option value="26">Food &amp; Dining / Foodies</option>
                                    <option value="27">Food &amp; Dining / Frequently Dines Out</option>
                                    <option value="28">Food &amp; Dining / Frequently Dines Out / Diners by Meal</option>
                                    <option value="29">Food &amp; Dining / Frequently Dines Out / Diners by Meal / Frequently Eats Breakfast Out</option>
                                    <option value="30">Food &amp; Dining / Frequently Dines Out / Diners by Meal / Frequently Eats Dinner Out</option>
                                    <option value="31">Food &amp; Dining / Frequently Dines Out / Diners by Meal / Frequently Eats Lunch Out</option>
                                    <option value="7">Home &amp; Garden</option><option value="8">Lifestyles &amp; Hobbies</option>
                                    <option value="9">Media &amp; Entertainment</option>
                                    <option value="10">News &amp; Politics</option>
                                    <option value="16">News &amp; Politics / News Junkies</option>
                                    <option value="17">News &amp; Politics / News Junkies / Business &amp; Economic News Junkies</option>
                                    <option value="18">News &amp; Politics / News Junkies / Local News Junkies</option>
                                    <option value="2">News &amp; Politics / News Junkies / Local News Junkies / Avid Investors</option>
                                    <option value="19">News &amp; Politics / News Junkies / Men&#039;s Media Fans</option>
                                    <option value="11">Shoppers</option><option value="12">Sports &amp; Fitness</option>
                                    <option value="13">Technology</option><option value="14">Travel</option>
                                </select>
                            </div>                            </div>
                            <div class="form-group ">
                                <label class="control-label required">Name</label>
                                <div class="input text"><input type="text" name="name" class="form-control" maxlength="255" id="affinitycategories-name"/></div>                            
                            </div>                                                  
                            <div class="form-group ">
                                <label class="control-label required">Googleid</label>
                                 <div class="input number"><input type="number" name="googleid" class="form-control" id="affinitycategories-googleid"/></div>                            
                            </div>
                            <div class="form-group ">                                
                                <div class="input checkbox"><input type="hidden" name="status" value="0"/>
                                <label for="affinitycategories-status"><input type="checkbox" name="status" value="1" id="affinitycategories-status" checked="checked">Status</label></div>                            </div>
                        </div>

                    </fieldset>
                    <button class="btn btn-primary" id="addaffinityCategorySubmitBtn" type="submit">Submit</button>                    <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="16d1b6491e85567623d279915af46091fba6085a%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form>                </div>
            </div>
        </div>
    </div>
</section>


@endsection






