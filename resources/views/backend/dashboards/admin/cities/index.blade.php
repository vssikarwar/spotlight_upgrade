@extends('backend.dashboards.admin.layouts.main')
@section('main-container')
<h4 style="text-align: center; color:green" >{{ session('success') }}</h4>
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
                    <form method='get' action='/cities/cities-filer'>
                    <div class="input select"><label for="state">State</label><select name="state_id" class="form-control" placeholder="please Select" id="state">
                        <option class="placeholder">Please Select</option>
                        @foreach($states as $state)
                            <option value={{$state->id}}>{{$state->name}}</option>
                            @endforeach
                        </select><small class="text text-danger" style="display: none;"></small></div>
                    <br>
                    <button class="btn btn-primary" type="submit">Search</button> <a href="/cities" class="btn btn-danger">Reset</a>
                    </form>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <thead>
                                <tr>
                                    <th scope="col"><a href="/cities?direction=asc&amp;sort=id">Id</a></th>
                                    <th scope="col" class="actions">Actions</th>
                                    <th scope="col"><a href="/cities?direction=asc&amp;sort=name">Name</a></th>
                                    <th scope="col"><a href="/cities?direction=asc&amp;sort=iso_alpha_2">State</a></th>
                                    <th scope="col"><a href="/cities?direction=asc&amp;sort=active">Active</a></th>
                                </tr>
                            </thead>
                        <tbody>
                            @foreach ($cities as $key => $city)
                            <tr>
                                <td>{{ $city->id }}</td>
                                <td class="actions">
                                  <a href="/cities/edit/{{$city->id}}" class="btn btn-success btn-xs"> 
                                      <i class="fa fa-edit"></i>
                                  </a> 
                                  
                                  <a href="cities/delete/{{$city->id}}" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete #{{$city->id}} ?&quot;)) { document.post_62a194d0c3998911570236.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a> 
                              </td>
                                <td>{{ $city->name }}</td>
                                <td>{{ $city->state_name }}</td>
                                <td>
                                @if ($city->active==0)
                                <span class='label label-danger' style='color: red'>Inactive</span>                                
                                @else
                                <span class='label label-success'>Active</span>                               
                                @endif
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="paginator">
                    <ul class="pagination">
                        {{-- {!! $cities->links() !!} --}}
                       {{ $cities->appends(request()->input())->links();}}
                    </ul>
                    <p>Page 1 of 32, showing 20 record(s) out of 637 total</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection
