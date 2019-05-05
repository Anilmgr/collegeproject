@extends('Admin.adminLayout.admin_design')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home Page / Counter</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="page-header"> Counter</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add value of Counter</div>
					<div class="panel-body">
						<div class="col-md-12">							
							
 							<form role="form" method="post" \>


							<div class="row">
								<div class="form-group col-md-3">
									<label><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg></label>
									<input class="form-control" name = 'first_name' >
								</div>			

								<div class="form-group col-md-6">
									<label>Title</label>
									<input class="form-control" name = 'last_name' >
								</div>
							</div>	
							<div class="row">	
								<div class="form-group col-md-6">									
									<label>Description</label>
									<textarea class="form-control" name = 'username'></textarea>
								</div>

								<div class="form-group col-md-6">									
									<label>Description</label>
									<textarea class="form-control" name = 'email' ></textarea>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>Password</label>
									<input type="password" name = 'password' class="form-control">
								</div>	
																							
								<div class="form-group col-md-6">
									<label>Confirm Password</label>
									<input type="password" name = 'password_confirmation' class="form-control">
								</div>
							</div>

							<div class="row">	
									<div  class="form-horizontal col-md-6" role="form"">
									<label>Gender</label> <br/>
									<div class="radio-inline">
										<label>
											<input type="radio" name="gender" id="optionsRadios1" value="1" checked>Male
										</label>
									</div>
									<div class="radio-inline">
										<label>
											<input type="radio" name="gender" id="optionsRadios2" value="0">Female
										</label>
									</div>									
								</div>		
																
								<div class="form-group col-md-6">
									<label>Roles</label>
									<select class="form-control" name = 'roles'>
									    <option value="0">Admin</option>							
										<option value="2">Student</option>
										<option value="1">Teacher</option>											
									</select>									
								</div>
							</div>

							@foreach ($counters as $counter )
								{{ $counter->name }}
							@endforeach

								{{-- <div class="form-group">
									<label>Choose your profile picture</label>*
									<input type="file">
									 <p class="help-block">Do not add any picture , it doesn't works</p>
								</div> --}}
								<br/>
								<button type="submit" style="width:15%;" class="btn btn-primary btn-lg">Submit</button> 																				
							</div>
						
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
				

	</div><!--/.main-->

@endsection