@extends('backend.dashboards.support.layouts.main')
@section('main-content')
<div class="loader-div" style="display: none;"></div>
<div class="message">
</div>
@csrf
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
                                    <form method="post" accept-charset="utf-8" class="pt-20" action="/users/listOfCustomers">
                                        <div style="display:none;"><input type="hidden" name="_method" value="POST" /><input type="hidden" name="_csrfToken" autocomplete="off" value="2bfbea6b36cc33fbaf73a56381b63ba4a044a5b6dd19f681df5a34ef74068d1b0d365a4435f9418044ae65721a8d8b703b98790ae3150c6ef9c8aabcd1369aa1" /></div>
                                        <div class="row align-self-center-all">
                                            <div class="col-md-1"><strong class="loc-filter">Filter By :</strong></div>
                                            <div class="col-sm-4 col-md-3">
                                                <div class="input text"><input type="text" name="name" class=" form-control " placeholder="Search by Name,Email" id="name" /></div>
                                            </div>


                                            <div class="col-sm-12 col-md-3 ">
                                                <button class="btn btn-dark-blue round40 submit-btn" type="submit">Search</button> <a href="/users/listOfCustomers" class="btn btn-outline-secondary round40 btn-sm">Reset</a> </div>
                                        </div>
                                        <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="132c0c225fbe174a8c6ee21937112792c5f0255a%3A" /><input type="hidden" name="_Token[unlocked]" autocomplete="off" value="" /></div>
                                    </form>
                                </div>
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
                                                <th>Brand</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($customers as $customer)
                                            <tr>
                                                <td>{{$customer->id}}</td>
                                                <td>{{$customer->name}}</td>
                                                <td>{{$customer->email}}</td>
                                                <td>{{$customer->brand}}</td>
                                                <td>
                                                <form method="post" action="/users/linked-accounts">
                                                    @csrf
                                                    <input type="hidden" value= '{{$customer->user_id}}' name="id"/>
                                                    <button type='sumbit' class="sl-icn list details customer-btn" data-id='{{$customer->user_id}}' type="button">
                                                    </button>
                                                </form>
                                                
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <div class="paginator">
                                        <ul class="pagination">
                                            {{ $customers->appends(request()->input())->links();}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    $('.customer-btn').click(function(e) {
        var token = "{{ csrf_token() }}";
        var id = $(this).data('id');
        $.ajax({
            type: 'POST', 
            url: '{{ url('/users/linked-accounts') }}', 
            data: { _token:token,
                id:id}, 
            success: function(e){
                alert(e);
            }
        });

    });

</script> --}}
<script src="/js/common.js"></script>
<script src="/js/custom.js?q=60820317"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
</div>

@endsection
