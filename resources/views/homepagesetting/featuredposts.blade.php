@extends('Admin.adminLayout.admin_design')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home Page / Featured Posts</li>
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
				<h1 class="page-header"> Content List</h1>
			</div>
		</div><!--/.row-->				
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"> Feature Your Content</div>
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
                                <th data-field="action" >Featured Post</th>
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


					    			<td  > {{ Str::words(strip_tags($tablecontent->description),7) }} </td>
							    	<td >{{ $tablecontent->created_at }}</td>
                                    <td >{{ $tablecontent->updated_at }}</td>                                    							    	
							    	@if($tablecontent->featured == 1)
							    		  <td > <a href="/content/feature/{{ $tablecontent->id }}">  
							    		  	<button type="button" class = 'btn btn-danger'>remove</button> 
							    		  </a>
							    		  </td>							    		  
							    	@else 
							    	<td ><a href="/content/feature/{{ $tablecontent->id }}"> <button class = 'btn btn-success '>Set as featured</button></a> </td>  
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
