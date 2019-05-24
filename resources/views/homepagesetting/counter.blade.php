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
					<div class="panel-heading">Edit Counter</div>
					<div class="panel-body">
						<div class="col-md-12">							
							
 							<form role="form" method="post" \>
								<div class="form-group">
									<div class="row">
										
										<div class="col-sm-6 col-lg-3 fact">
											<div class="fact-icon ">
												<i class="ti-crown"></i>
											</div>
											<div class="fact-text">
												<h2><input type="number" class="form-control" name="count1" value="{{$ccount[0]}}"></h2>
												<p><input type="text" class="form-control" name="counter1" value="{{$ctitle[0]}}"></p>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 fact">
											<div class="fact-icon ">
												<i class="ti-briefcase"></i>
											</div>
											<div class="fact-text">
												<h2><input type="number" class="form-control" name="count2" value="{{$ccount[1]}}"></h2>
												<p><input type="text" class="form-control" name="counter2" value="{{$ctitle[1]}}"></p>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 fact">
											<div class="fact-icon ">
												<i class="ti-user"></i>
											</div>
											<div class="fact-text">
												<h2><input type="number" class="form-control" name="count3" value="{{$ccount[2]}}"></h2>
												<p><input type="text" class="form-control" name="counter3" value="{{$ctitle[2]}}"></p>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 fact">
											<div class="fact-icon ">
												<i class="ti-pencil-alt"></i>
											</div>
											<div class="fact-text">
												<h2><input type="number" class="form-control" name="count4" value="{{$ccount[3]}}"></h2>
												<p><input type="text"  class="form-control" name="counter4" value="{{$ctitle[3]}}"></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3 pull-right "><button class="btn btn-primary btn-block "> Update </button> </div>		
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
				

	</div><!--/.main-->

@endsection