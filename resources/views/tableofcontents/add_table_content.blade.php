
@extends('Admin.adminLayout.admin_design')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Content / Add Table Content</li>
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
					<div class="panel-heading">Add table-content</div>
					<div class="panel-body">
					<div class="col-md-12">
						<form action="{{route('tablecontents.store')}}" method="post" enctype="multipart/form-data">
							{{-- {{ method_field('patch') }}  --}}
							{{ csrf_field() }}
						
							<div class="form-group">
								<label>Title</label>
								<input class="form-control" name="title" placeholder="Title">
							</div>	

							<div class="form-group">
								<label>Description</label>
								<textarea id="article-ckeditor1" class="form-control" name="description"  rows="10" columns="10" ></textarea>
							</div>	

							
							<div class="form-group">
								<label>Choose category</label>
								<select class="form-control" name = 'parent_menu_id'>
								    @foreach($menus as $menu)
								    	<option value="{{ $menu->id }}">
								    		{{ $menu->title }}
								    	</option>
								    @endforeach	
								    	<option value="0">None</option>									
								</select>									
							</div>	
							
							<div class="form-group">
								<label>Choose sub-category</label>
								<select class="form-control" name = 'p_submenu_id'>

								    @foreach($submenus as $submenu)
								    	<option value="{{ $submenu->id }}">
								    		{{ $submenu->title }}
								    	</option>
								    @endforeach	
								    <option value="0">None</option>								
								</select>									
							</div>	

								
																						
							<div class="form-group">
								<label>Status</label>
								<div class="radio">
									<label>
										<input type="radio" name="status" id="optionsRadios1" value="1" checked>Active
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="status" id="optionsRadios2" value="0">Inactive
									</label>
								</div>									
							</div>

							<div class="form-group">
								<label>Featured Image</label>
								<input type="file" name="featured_image">
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