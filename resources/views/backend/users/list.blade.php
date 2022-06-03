@extends('backend.layouts.main')
 
@section('main-container')

<div class="content-page" style="margin-left:0 !important;">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="page-title m-0">Customers </h4>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-20 manageTop spot-light-table">
                        <div class="card-header no-padding overflow-hidden">
                            <div class="head_tb m-b-20">
                                <ul class="nav nav-tabs nav-tabs-custom head_tb" role="tablist">
                                    <li class="nav-item"> 
                                        <a class="nav-link active" data-toggle="tab" href="#t1" role="tab">Customers</a>
                                    </li>
                                    
                                </ul>
                                <div class="col-md-12">
                                    <form method="post" accept-charset="utf-8" class="pt-20" action="/users/listOfCustomers"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="168ba3dd43aa0e27e0bcdacda6d406f79c5d47e9460c98a11d279734132657845b73c8b6abded7af410a490499aea6b5eabb8a09fa54c6eaacbdd989942503f0"/></div>                                    <div class="row align-self-center-all">
                                        <div class="col-md-1"><strong class="loc-filter">Filter By :</strong></div>
                                        <div class="col-sm-4 col-md-3">
                                                <div class="input text"><input type="text" name="name" class=" form-control " placeholder="Search by Name,Email" id="name"/></div>                                        </div>
                                         
                                       
                                        <div class="col-sm-12 col-md-3 ">
                                                <button class="btn btn-dark-blue round40 submit-btn" type="submit">Search</button>                                                <a href="/users/listOfCustomers" class="btn btn-outline-secondary round40 btn-sm">Reset</a>                                        </div>
                                    </div>
                                    <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="132c0c225fbe174a8c6ee21937112792c5f0255a%3A"/>
                                    <input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form>                                </div>
                            </div>
                            
                        </div>
                        <div class="card-body no-padding">
                                                        <div class="tab-content table-responsive">
                                <div class="tab-pane active " id="t1" role="tabpanel">
                                    
                                    <table id="customer-table" class="table" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Customer id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                                                                    
                                        
                                        @foreach($users as $user)
                                        <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>
                                                <a href="" >
                                                    <button class="sl-icn list details  customer-btn" data-id="4659" type="button" >
                                                    </a>
                                                        
                                                    </button>

                                                </td>
                                            </tr>
                                        @endforeach
                                                                                    
                                        </tbody>
                                    </table>

                                    </div>
                                 
<div class="paginator">
    <ul class="pagination">
                <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>        <li class="active"><a href="">1</a></li><li><a href="/users/listOfCustomers?page=2">2</a></li><li><a href="/users/listOfCustomers?page=3">3</a></li>        <li class="next"><a rel="next" href="/users/listOfCustomers?page=2">next &gt;</a></li>        <li class="last"><a href="/users/listOfCustomers?page=3">last &gt;&gt;</a></li>    </ul>
</div>
                                
                            </div>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection