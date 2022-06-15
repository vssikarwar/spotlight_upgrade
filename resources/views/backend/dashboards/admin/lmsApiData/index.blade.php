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
    <h3 class="box-title">Lms Api Data</h3>
</div>



<section class="content-header">        
    <a href="/lms-api-data/add" class="btn btn-success">New Lms Api Data</a>        
    
</section>   


<div class="lmsApiData index large-9 medium-8 columns content">
    
    <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover wordspce">
        <thead>
            <tr>
                <th scope="col"><a href="/lms-api-data?direction=asc&amp;sort=id">Id</a></th>
                <th scope="col"><a href="/lms-api-data?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/lms-api-data?direction=asc&amp;sort=url">Url</a></th>
                <th scope="col"><a href="/lms-api-data?direction=asc&amp;sort=customer_id">Customer</a></th>
                <th scope="col"><a href="/lms-api-data?direction=asc&amp;sort=action">Action</a></th>
                <th scope="col"><a href="/lms-api-data?direction=asc&amp;sort=created">Created</a></th>
                <th scope="col"><a href="/lms-api-data?direction=asc&amp;sort=modified">Modified</a></th>
                <th scope="col" class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
                        <tr>
                <td>1</td>
                <td>Nissan</td>
                <td>https://cs75.salesforce.com/services/apexrest/LeadCreateAPI</td>
                <td>109</td>
                <td>sendToNissanLMS</td>
                <td>9/24/19, 12:00 AM</td>
                <td>2/21/20, 6:41 PM</td>
                <td class="actions">
                            <a href="/lms-api-data/edit/1" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                              

                   
                </td>
            </tr>
                        <tr>
                <td>2</td>
                <td>Ford</td>
                <td>https://api.fordind.com/SQLServer.aspx</td>
                <td>109</td>
                <td>sendToFordLMS</td>
                <td>9/24/19, 12:00 AM</td>
                <td>4/28/20, 1:47 PM</td>
                <td class="actions">
                            <a href="/lms-api-data/edit/2" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                              

                   
                </td>
            </tr>
                        <tr>
                <td>3</td>
                <td>Ford</td>
                <td>https://api.fordind.com/SQLServer.aspx</td>
                <td>135</td>
                <td>sendToFordLMS</td>
                <td>4/28/20, 1:50 PM</td>
                <td>4/28/20, 1:51 PM</td>
                <td class="actions">
                            <a href="/lms-api-data/edit/3" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                              

                   
                </td>
            </tr>
                        <tr>
                <td>4</td>
                <td>Ford</td>
                <td>https://api.fordind.com/SQLServer.aspx</td>
                <td>113</td>
                <td>sendToFordLMS</td>
                <td>4/28/20, 1:50 PM</td>
                <td>4/28/20, 1:50 PM</td>
                <td class="actions">
                            <a href="/lms-api-data/edit/4" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                              

                   
                </td>
            </tr>
                        <tr>
                <td>5</td>
                <td>Tata</td>
                <td>https://tmcrmportalqa.inservices.tatamotors.com/home/B2C/com.eibus.web.soap.Gateway.wcp?organization=o=B2C,cn=cordys,cn=cbop,o=tatamotors.com</td>
                <td>161</td>
                <td>sendToTataLMS</td>
                <td>9/17/20, 11:12 AM</td>
                <td>9/17/20, 11:12 AM</td>
                <td class="actions">
                            <a href="/lms-api-data/edit/5" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                              

                   
                </td>
            </tr>
                        <tr>
                <td>6</td>
                <td>Tata</td>
                <td>https://tmcrmportalqa.inservices.com</td>
                <td>161</td>
                <td>sendToTataLMSe</td>
                <td>9/17/20, 11:13 AM</td>
                <td>9/17/20, 11:13 AM</td>
                <td class="actions">
                            <a href="/lms-api-data/edit/6" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                              

                   
                </td>
            </tr>
                        <tr>
                <td>7</td>
                <td>Batra</td>
                <td>http://114.143.100.138:11086/Lms/Api/InsertLead</td>
                <td>151</td>
                <td>sendToBatraLMS</td>
                <td>9/24/19, 12:00 AM</td>
                <td>10/9/19, 10:05 AM</td>
                <td class="actions">
                            <a href="/lms-api-data/edit/7" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                              

                   
                </td>
            </tr>
                    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>                        <li class="next disabled"><a href="" onclick="return false;">next &gt;</a></li>                    </ul>
        <p>Page 1 of 1, showing 7 record(s) out of 7 total</p>
    </div>
</div>
</div>               

@endsection