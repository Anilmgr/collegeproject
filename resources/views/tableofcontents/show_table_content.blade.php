@extends('Admin.adminLayout.admin_design')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Content / Table Contents</li>
			</ol>
		</div><!--/.row-->

		@if(Session::has('flash_msg_err'))
			<div class="alert alert-danger alert-block">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>{{ Session('flash_msg_err') }}</strong>								
			</div>					
		@endif

		 @if(session('success'))
            <div class="alert bg-success" role="alert">
				<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg>{{ Session('success') }}
			</div>        
		@endif
		
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="page-header"> Content List</h1>
			</div>
		</div><!--/.row-->				
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"> Table Content</div>
					<div class="panel-body">
						<table data-toggle="table">
						    <thead>
						    <tr>
						        <th data-field="id" >ID</th>

						        <th data-field="title" >Title</th>

						        <th data-field="category" >Menu</th>

						        <th data-field="subcategory" >Sub-Menu</th>

						        <th data-field="description">description</th>

						        <th data-field="created_at" >Created at</th>

						        <th data-field="updated_at" >Updated at</th>						        
                                <th data-field="status" >Status</th>						         
                                <th data-field="action"  colspan="2">Actions</th>
						    </tr>
						    </thead>
						    @foreach($tablecontents as $tablecontent)
							    <tr >
							    	<td>{{ $tablecontent->id }}</td>

							    	<td >{{ $tablecontent->title }}</td>

							    	@if($tablecontent->menu != null)
							    		<td>{{ $tablecontent->menu->title }}</td>
							    	@else
							    		<td>--</td>
							    	@endif
							    	
							    	

							    	@if($tablecontent->submenu != null)
							    		<td>{{ $tablecontent->submenu->title }}</td>
							    	@else
							    		<td>--</td>
							    	@endif


					    			<td >{{ Str::words(strip_tags($tablecontent->description),10) }}</td>

							    	<td >{{ $tablecontent->created_at }}</td>
                                    
                                    <td >{{ $tablecontent->updated_at }}</td>                                    							    	
							    	@if($tablecontent->status == 0)
							    		  <td > <a href="/content/toogle/{{ $tablecontent->id }}">  
							    		  	<button type="button" class = 'btn btn-danger'>inactive</button> 
							    		  </a>
							    		  </td>							    		  
							    	@else 
							    		<td ><a href="/content/toogle/{{ $tablecontent->id }}"> <button class = 'btn btn-success'>active</button> </td></a>  
                                    @endif
                                    
                                    <td>
                                        {{-- <a href="/menu/update_menu/{{ $menu->id }}"> --}}
                                        <a href="/tablecontent/{{ $tablecontent->id }}/edit">
								    		<button type="button" class = 'btn btn-primary'>Update
								    		</button>								    		
							    		</a>
							    	</td>
							    	<td>
							    		<a href="/tablecontent/delete/{{ $tablecontent->id }}">
							    			<button type="button" class = 'btn btn-danger'>Delete</button>
							    		</a>
							    	</td>
							    		
							    </tr>
						    @endforeach
						    
						</table>
					</div>
				</div>
			</div>			
		</div><!--/.row-->			
		
	</div><!--/.main-->

@endsection
