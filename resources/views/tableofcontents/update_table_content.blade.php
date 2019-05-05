@extends('Admin.adminLayout.admin_design')
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Update Table Content</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="page-header">Table Content</h1>
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
					<div class="panel-heading">Update Table Content</div>
					<div class="panel-body">
					<div class="col-md-12">
						
						<form role="form" method="post" action = 
							"{{ route('tablecontents.update', [ 'id' => $tablecontent ] ) }}" enctype="multipart/form-data" >

							{{ method_field('patch') }}

							{{ csrf_field() }}
						
							<div class="form-group">
								<label>Title</label>
								<input class="form-control" name="title" value="{{ $tablecontent->title }}" placeholder="Title">
							</div>	

							<div class="form-group">
								<label>Description</label>
								{{-- <textarea class="form-control" name="description" value="{{$content->description }}"  rows="3"></textarea> --}}
								<textarea class="form-control" 	name="description" cols="66" rows="10" id="article-ckeditor1"> {{ $tablecontent->description }} </textarea>
							</div>	
							

							<div class="form-group">
								<label>Choose category</label>
								<select class="form-control" name = 'parent_menu_id'>

								    @foreach($menus as $menu)
								    	<option value="{{ $menu->id }}" 
								    		@if($tablecontent->menu_id == $menu->id) selected 
								    		@endif
								    		>
								    		{{ $menu->title }}
								    	</option>
								    @endforeach										
								</select>									
							</div>	

							<div class="form-group">
								<label>Choose sub-category</label>
								<select class="form-control" name = 'p_submenu_id'>

								    @foreach($submenus as $submenu)
								    	<option value="{{ $menu->id }}" 
								    		@if($tablecontent->submenu_id == $submenu->id) selected @endif
								    		>
								    		{{ $submenu->title }}
								    	</option>
								    @endforeach										
								</select>									
							</div>		
																						
							<div class="form-group">
								<label>Status</label>
								<div class="radio">
									<label>
										<input type="radio" name="status" id="optionsRadios1" value="1" 

										@if( $tablecontent->status == 1) checked @endif 

										checked>Active
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="status" id="optionsRadios2" value="0"
										@if( $tablecontent->status == 0) checked @endif
										>Inactive
									</label>
								</div>									
							</div>

							<div class="form-group">
								<label>Featured Image</label>
								<input type="file" name="update_featured_image">
								<p class="help-block">Upload file size maximum 2 mb.</p>
							</div>
						
							<button type="submit" class="btn btn-primary">Submit</button>																				
						</form>
					</div>					
					</div>
				</div>	
			</div>
		</div>

@endsection
