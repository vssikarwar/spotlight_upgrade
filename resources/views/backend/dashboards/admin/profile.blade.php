@extends('backend.dashboards.admin.layouts2.main')

@section('main-container') 



                <div class="content-wrapper">
                    <section class="content-header">
                        <h1></h1>
                        <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<br><br>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>-->                    </section>
                    <div class="panel panel-primary">
	<div class="panel-heading">
		<span class="panel-title">
			My Profile		</span>
		<span class="panel-title-right">
			<a href="/editProfile" class="btn btn-default">Edit</a>		</span>
	</div>
	<div class="panel-body">
		<div style="display:inline-block;">
			<table class="table-condensed" style="width:auto">
				<tbody>
					<tr>
						<td>
							<div class="profile">
								<img alt="Admin Spotlight" src="">
							</div>
						</td>
						<td><h1>Admin Spotlight</h1></td>
					</tr>
					<tr>
						<td style="text-align:right"><strong>Group(s):</strong></td>
						<td>Admin</td>
					</tr>
					<tr>
						<td style="text-align:right"><strong>Username:</strong></td>
						<td>admin</td>
					</tr>
					<tr>
						<td style="text-align:right"><strong>Email:</strong></td>
						<td>shivam.awasthi@singleinterface.com</td>
					</tr>
					<tr>
						<td style="text-align:right"><strong>Gender:</strong></td>
						<td>Male</td>
					</tr>
					<tr>
						<td style="text-align:right"><strong>Birthday:</strong></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align:right"><strong>Cellphone:</strong></td>
						<td>9711738425</td>
					</tr>
					<tr>
						<td style="text-align:right"><strong>Location:</strong></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align:right"><strong>Status:</strong></td>
						<td>Active</td>
					</tr>
					<tr>
						<td style="text-align:right"><strong>Joined</strong></td>
						<td>27-Feb-2018</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>                

@endsection