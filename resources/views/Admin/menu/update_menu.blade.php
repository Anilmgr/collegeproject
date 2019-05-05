@extends('Admin.adminLayout.admin_design')
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Add Menu</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="page-header">Menu</h1>
			</div>
		</div><!--/.row-->

	    @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
								
		<div class="row col-lg-12">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-heading">Add menu</div>
					<div class="panel-body">
					<div class="col-md-12">
						
						<form role="form" method="post" action = 
							"{{ route('menu.update',['id' => $menu ]) }}" >

							{{ method_field('patch') }} 

							{{ csrf_field() }}				

							<div class="form-group">
								<label>Title</label>
								<input class="form-control" name="title" value="{{ $menu->title }}" placeholder="Title">
							</div>	

							<div class="form-group">
								<label>Slug</label>
								<input class="form-control" name="slug" value="{{ $menu->slug }}" placeholder="Slug">
							</div>		
																						
							<div class="form-group">
								<label>Status</label>
								<div class="radio">
									<label>
										<input type="radio" name="status" id="optionsRadios1" value="1" 
										@if($menu->status == 1) checked 
										@endif>
										Active
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="status" id="optionsRadios2" value="0"
										@if($menu->status == 0) checked 
										@endif
										> Inactive
									</label>
								</div>									
							</div>

							<button type="submit" class="btn btn-primary">Update</button>																
						</form>
					</div>	
					</div>
				</div>	
			</div>	
		
		</div><!-- /.row -->

	</div><!--/.main-->
@endsection