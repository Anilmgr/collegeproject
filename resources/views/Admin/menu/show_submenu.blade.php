@extends('Admin.adminLayout.admin_design')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Menus / Sub Menus List</li>
			</ol>
		</div><!--/.row-->

		@if(Session::has('flash_msg_err'))
			<div class="alert alert-danger alert-block">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>{{ Session('flash_msg_err') }}</strong>								
			</div>					
		@endif

		 @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
		
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="page-header">Sub Menu List</h1>
			</div>
		</div><!--/.row-->				
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Sub Menu Table</div>
					<div class="panel-body">
						<table data-toggle="table">
						    <thead>
						    <tr>
						        <th data-field="id" >SN</th>
						        <th data-field="title" >Title</th>
						        <th data-field="main_menu" >Main Menu</th>
						        <th data-field="created_at" >Created at</th>
						        <th data-field="updated_at" >Updated at</th>						        
                                <th data-field="status" >Status</th>						         
                                <th data-field="action"  colspan="2">Actions</th>
						    </tr>
						    </thead>

						    <?php $i = 1 ?>  {{-- for serial number of items --}}
						    @foreach($submenus as $submenu)						    	
							    <tr>
							    	<td >{{ $i++ }}</td>
							    	<td >{{ $submenu->title }}</td>					    		
					    			<td >{{ $submenu->menu->title }}</td>					    		
					    			<td >{{ $submenu->created_at }}</td>
                                    <td >{{ $submenu->updated_at }}</td>                                    							    	
							    	@if($submenu->status == 0)
							    		  <td > <a href="/submenu/toogle/{{ $submenu->id }}">  
							    		  	<button type="button" class = 'btn btn-danger'>inactive</button> 
							    		  </a>
							    		  </td>							    		  
							    	@else 
							    	<td ><a href="/submenu/toogle/{{ $submenu->id }}"> <button class = 'btn btn-success'>active</button> </td></a>  
                                    @endif
                                    
                                    <td >                                        
                                        <a href="/submenu/{{ $submenu->id }}/edit">
								    		<button type="button" class = 'btn btn-primary'>Update
								    		</button>								    		
							    		</a>
							    	</td>
							    	
							    	<td >
							    		<a href="/submenu/delete/{{ $submenu->id }}">
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
