@extends('backend.dashboards.admin.layouts.main')

@section('main-container') 



<div class="content-wrapper">

                    

<section class="content-header">        
    <a href="/landingpage-themes/add" class="btn btn-success">New Themes</a>    
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>--></section>    
<div class="publishers index large-9 medium-8 columns content box">
    <h3>Themes</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                <th scope="col"><a href="/landingpage-themes?direction=asc&amp;sort=id">Id</a></th>
                <th scope="col"><a href="/landingpage-themes?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/landingpage-themes?direction=asc&amp;sort=folder_name">Folder Name</a></th>
                <th scope="col"><a href="/landingpage-themes?direction=asc&amp;sort=created">Created</a></th>
                <th scope="col" class="actions">Actions</th>
            </tr>
            </thead>
            <tbody>
                            <tr>
                <td>4</td>
                <td>AutomobileMaster</td>
                <td>AutomobileMaster</td>
                <td>6/20/19, 10:53 AM</td>
                <td class="actions">
                    <a href="/landingpage-themes/edit/4" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                                            </td>
            </tr>
                        <tr>
                <td>5</td>
                <td>BankMaster</td>
                <td>BankMaster</td>
                <td>6/20/19, 10:54 AM</td>
                <td class="actions">
                    <a href="/landingpage-themes/edit/5" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                                            </td>
            </tr>
                        <tr>
                <td>9</td>
                <td>Ford</td>
                <td>Ford</td>
                <td>6/20/19, 10:55 AM</td>
                <td class="actions">
                    <a href="/landingpage-themes/edit/9" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                                            </td>
            </tr>
                        <tr>
                <td>12</td>
                <td>Ceat</td>
                <td>Ceat</td>
                <td>6/20/19, 10:55 AM</td>
                <td class="actions">
                    <a href="/landingpage-themes/edit/12" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                                            </td>
            </tr>
                        <tr>
                <td>13</td>
                <td>KFC</td>
                <td>Kfc</td>
                <td>6/20/19, 10:55 AM</td>
                <td class="actions">
                    <a href="/landingpage-themes/edit/13" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                                            </td>
            </tr>
                        <tr>
                <td>14</td>
                <td>IIFL</td>
                <td>IIFL</td>
                <td>6/20/19, 10:55 AM</td>
                <td class="actions">
                    <a href="/landingpage-themes/edit/14" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                                            </td>
            </tr>
                        <tr>
                <td>15</td>
                <td>PizzaHut</td>
                <td>PizzaHut</td>
                <td>6/20/19, 10:55 AM</td>
                <td class="actions">
                    <a href="/landingpage-themes/edit/15" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                                            </td>
            </tr>
                        <tr>
                <td>16</td>
                <td>Tata</td>
                <td>Tata</td>
                <td>1/14/21, 12:00 AM</td>
                <td class="actions">
                    <a href="/landingpage-themes/edit/16" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>                                            </td>
            </tr>
            
                
            </tbody>
        </table>
    </div>

    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>                        <li class="next disabled"><a href="" onclick="return false;">next &gt;</a></li>                    </ul>
        <p>Page 1 of 1, showing 8 record(s) out of 8 total</p>
    </div>
</div>
           

@endsection