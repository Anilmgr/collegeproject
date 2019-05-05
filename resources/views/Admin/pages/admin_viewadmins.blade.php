@extends('Admin.adminLayout.admin_design')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Users / Admins List</li>
			</ol>
		</div><!--/.row-->

		@if(Session::has('flash_msg_err'))
			<div class="alert alert-danger alert-block">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>{{ Session('flash_msg_err') }}</strong>								
			</div>					
		@endif
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Admin List</h1>
			</div>
		</div><!--/.row-->				
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Admin Table</div>
					<div class="panel-body">
						<table data-toggle="table">
						    <thead>
						    <tr>
						        <th data-field="id" >SN</th>
						        <th data-field="name" >Name</th>
						        <th data-field="username" >Username</th>
						        <th data-field="email" >Email-id</th>						       
						        <th data-field="gender" >Gender</th>
						        <th data-field="status" >Status</th>						        
						    </tr>
						    </thead>
						    <?php $i = 1 ?>  {{-- for serial number of items --}}
						    @foreach($users as $user)
							    <tr>
							    	<td >{{ $i++ }}</td>
							    	<td >{{ $user->first_name.' '.$user->last_name }}</td>
					    			<td >{{ $user->username }}</td>
							    	<td >{{ $user->email }}</td>							    	
							    	@if($user->gender == 0)
							    		<td >Female</td>
							    	@else <td > Male </td>
							    	@endif

							    	@if($user->active == 0)
							    		  <td > <a href="/admin/toogle/{{ $user->id }}">  
							    		  	<button type="button" class = 'btn btn-danger'>inactive</button> 
							    		  </a>
							    		  </td>							    		  
							    	@else 
							    	<td ><a href="/admin/toogle/{{ $user->id }}"> <button class = 'btn btn-success'>active</button> </td></a>  
							    	@endif
							    		
							    </tr>
						    @endforeach
						    
						</table>
					</div>
				</div>
			</div>			
		</div><!--/.row-->			
		
	</div><!--/.main-->

@endsection
