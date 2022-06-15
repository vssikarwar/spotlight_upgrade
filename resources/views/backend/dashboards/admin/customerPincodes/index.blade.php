@extends('backend.dashboards.admin.layouts.main')

@section('main-container')

                <div class="content-wrapper">
                    <section class="content-header">
                        <h1></h1>
                        <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>-->                    </section>
                    <div class="box">

<div class="box-header">
    <h3 class="box-title">Customer Pincodes</h3>
</div>



<section class="content-header">        
    <a href="/customer-pincodes/add" class="btn btn-success">New Customer Pincodes</a>        
    
</section>   


<div class="lmsApiData index large-9 medium-8 columns content">
    
    <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover wordspce">
        <thead>
            <tr>
                <th scope="col"><a href="/customer-pincodes?direction=asc&amp;sort=id">Id</a></th>
                <th scope="col" class="actions">Actions</th>
                <th scope="col"><a href="/customer-pincodes?direction=asc&amp;sort=customer_id">Customer</a></th>
                <th scope="col"><a href="/customer-pincodes?direction=asc&amp;sort=city">City</a></th>
                <th scope="col"><a href="/customer-pincodes?direction=asc&amp;sort=pincodes">Pincodes</a></th>
                <th scope="col"><a href="/customer-pincodes?direction=asc&amp;sort=created">Created</a></th>
                <th scope="col"><a href="/customer-pincodes?direction=asc&amp;sort=modified">Modified</a></th>
                
            </tr>
        </thead>
        <tbody>

        @foreach ($customerPincodes as $key => $customerPincodes)
                        <tr>

                        <?php $id = $customerPincodes->id; ?>
                <td>{{ $id }}</td>

                <td class="actions">
                    

                    <form name="post_62a82fcd6f5b1840506732" style="display:none;" method="post" action="/customer-pincodes/delete/{{$id}}">
                    <input type="hidden" name="_method" value="POST"/>
                    <input type="hidden" name="_csrfToken" autocomplete="off" value="{{ csrf_token() }}"/>
                    <div style="display:none;">
                    <input type="hidden" name="_Token[fields]" autocomplete="off" value="{{ csrf_token() }}%3A"/>
                    <input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form>
                    <a href="#" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_62a82fcd6f5b1840506732.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a>
                </td>
                
                <td><a href="/customers/view/151">myra goel</a></td>
                <td>{{$customerPincodes->city}}</td>
                <td>{{$customerPincodes->pincodes}}</td>
                <td>{{$customerPincodes->created}}</td>
                <td>{{$customerPincodes->modified}}</td>

            </tr>
            @endforeach
                 
                    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>                        <li class="next disabled"><a href="" onclick="return false;">next &gt;</a></li>                    </ul>
        <p>Page 1 of 1, showing 10 record(s) out of 10 total</p>
    </div>
</div>
</div>    

@endsection