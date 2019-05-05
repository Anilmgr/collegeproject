@extends('Admin.adminLayout.admin_design')
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Update Users</li>
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
				<h1 class="page-header">User Form</h1>
			</div>
	    </div><!--/.row-->
				
		@if(count($errors) > 0)
		  @foreach($errors->all() as $error)
		  	<div class="alert alert-danger"> {{ $error }}</div>
		  @endforeach
		@endif

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Update User</div>
					<div class="panel-body">
						<div class="col-md-12">							
							
 							<form role="form" method="post" action = 
							"{{ route('admin.update',['id' => $users ]) }}" >

							{{ method_field('patch') }} 
							{{-- to update we use patch method --}}

							{{ csrf_field() }}
							
							<div class="row">
								<div class="form-group col-md-6">
									<label>First Name</label>
									<input class="form-control" value="{{ $users->first_name }}" name = 'first_name' placeholder="Enter your first name">
								</div>			

								<div class="form-group col-md-6">
									<label>Last Name</label>
									<input class="form-control" value="{{ $users->last_name }}" name = 'last_name' placeholder="Enter your last name">
								</div>
							</div>

							<div class="row">

								<div class="form-group col-md-6">									
									<label>Username</label>
									<input class="form-control" value="{{ $users->username }}" name = 'username' placeholder="Enter your Username">
								</div>

								<div class="form-group col-md-6">									
									<label>E-mail</label>
									<input class="form-control" value="{{ $users->email}}"
									name = 'email'placeholder="Enter your Email">
								</div>

							</div>

							<div class="row">

								
								<div class="form-group col-md-6">
									<label>Password</label>
									<input type="password" name = 'password' class="form-control">
								</div>
																
								<div class="form-group col-md-6">
									<label>Roles</label>
									<select class="form-control" name = 'roles'>									
									   	<option value="0" 
									   	@if($users->identity == '0') selected @endif
									   	>Admin</option>							

										<option value="2"
											@if($users->identity == '2') selected @endif>
										Student</option>

										<option value="1"
											@if($users->identity == '1') selected @endif
											>Teacher</option>											
									</select>
								</div>		

							</div>														

							<div class="row">
																																				
								<div class="form-horizontal col-md-6" role = "form">
									<label>Gender</label> <br/>
									<div class="radio-inline">
										<label>
											@if($users->gender == 1)
												<input type="radio" name="gender" id="optionsRadios1" value="1" checked>Male
											@else
												<input type="radio" name="gender" id="optionsRadios1" value="1">
												Male
											@endif
										</label>
									</div>
									<div class="radio-inline">
										<label>
											@if($users->gender == 0)
												<input type="radio" name="gender" id="optionsRadios2" value="0" checked>Female
											@else
												<input type="radio" name="gender" id="optionsRadios2" value="0">Female
											@endif												
										</label>
									</div>									
								</div>

								<div class="form-horizontal col-md-6" role= "form">
									<label>Active</label><br/>
									<div class="radio-inline">
										<label>
											@if($users->active == 0)
												<input type="radio" name="active" id="optionsRadios1" value="0" checked>Inactive
											@else
												<input type="radio" name="active" id="optionsRadios1" value="0">Inactive
											@endif

										</label>
									</div>
									<div class="radio-inline">
										<label>
											@if($users->active == 1)
												<input type="radio" name="active" id="optionsRadios2" value="1" checked>Active
											@else
												<input type="radio" name="active" id="optionsRadios1" value="1">active
											@endif
										</label>
									</div>									
								</div>

							</div>
							
								<br>
								<center><button type="submit" class="btn btn-primary">Submit</button></center>																				
							</div>
						
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->

	</div><!--/.main-->
@endsection