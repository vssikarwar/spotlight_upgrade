@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 


      <a href="/cities/add" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a>     
 </section>
	 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Cities</h3>
            </div>

            
            <div class="col-md-2 marginTop25 active">
            <div class="input select"><label for="state">State</label><select name="state" class="form-control" placeholder="please Select" id="state"><option value="">please Select</option><option value="1">Delhi</option><option value="2">Uttar Pradesh</option><option value="3">Haryana</option><option value="4">Andaman &amp; Nicobar Islands</option><option value="5">Andhra Pradesh</option><option value="6">Arunachal Pradesh</option><option value="7">Assam</option><option value="8">Bihar</option><option value="9">Chandigarh</option><option value="10">Chattisgarh</option><option value="11">Dadra &amp; Nagar Haveli</option><option value="12">Daman &amp; Diu</option><option value="13">Goa</option><option value="14">Gujarat</option><option value="15">Himachal Pradesh</option><option value="16">Jammu &amp; Kashmir</option><option value="17">Jharkhand</option><option value="18">Karnataka</option><option value="19">Kerala</option><option value="20">Lakshadweep</option><option value="21">Madhya Pradesh</option><option value="22">Maharashtra</option><option value="23">Manipur</option><option value="24">Meghalaya</option><option value="25">Mizoram</option><option value="26">Nagaland</option><option value="27">Orissa</option><option value="28">Pondicherry</option><option value="29">Punjab</option><option value="30">Rajasthan</option><option value="31">Sikkim</option><option value="32">Tamil Nadu</option><option value="33">Tripura</option><option value="34">Uttarakhand</option><option value="35">West Bengal</option><option value="36">Telangana</option><option value="37">Odisha</option><option value="38">Chhattisgarh</option></select><small class="text text-danger" style="display: none;"></small></div>
                        <br>                      
                <button class="btn btn-primary" type="submit">Search</button>                <a href="/cities" class="btn btn-danger">Reset</a>                    </div>
                <!-- /.box-header -->
            <div class="box-body"><table id="example2" class="table table-bordered table-hover">
                <thead>

                <thead>

                  <tr>

                    <th scope="col"><a href="/cities?direction=asc&amp;sort=id">Id</a></th>
                    <th scope="col" class="actions">Actions</th>
                    <th scope="col"><a href="/cities?direction=asc&amp;sort=name">Name</a></th>
                    <th scope="col"><a href="/cities?direction=asc&amp;sort=iso_alpha_2">Iso Alpha 2</a></th>
                    
                    <th scope="col"><a href="/cities?direction=asc&amp;sort=shopping_ads">Shopping Ads</a></th>
                    <th scope="col"><a href="/cities?direction=asc&amp;sort=active">Active</a></th>
                  
                  </tr>
                </thead>

        <tbody>

                @foreach ($cities as $key => $city)


                <tr>
                        <td>{{ $city->id }}</td>
                        <!-- <td><a href="/cities/view/104">India</a></td> -->
                        <td>Central Delhi</td>
                        <td>{{ $city->name }}</td>
                        
                        
                        <td><span class='label label-danger' style='color: red'>Inactive</span></td>
                        <td class="actions">
                        <a href="/cities/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                    <form name="post_62a893c0decca776034106" style="display:none;" method="post" action="/cities/delete/1"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="97f3a760e55be43ddc3886e7f50501dba1bc5c04e2025d43bbafa6df3c159dae28472278b34a5573e20f6b7953fcbaabacbc07c68892993e8a57640f932e4349"/><div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="693940990a9240a21c8ed5c2852b5ff0f6800209%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form><a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a893c0decca776034106.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>                </td>
                </tr>

                @endforeach
         
                    </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/cities?page=2">2</a></li><li><a href="/cities?page=3">3</a></li><li><a href="/cities?page=4">4</a></li><li><a href="/cities?page=5">5</a></li><li><a href="/cities?page=6">6</a></li><li><a href="/cities?page=7">7</a></li><li><a href="/cities?page=8">8</a></li><li><a href="/cities?page=9">9</a></li>            <li class="next"><a rel="next" href="/cities?page=2">next &gt;</a></li>            <li class="last"><a href="/cities?page=32">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 32, showing 20 record(s) out of 637 total</p>
    </div>
</div>
</div>
</div>
</div>

@endsection