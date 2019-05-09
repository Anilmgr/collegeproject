@extends('Admin.adminLayout.admin_design')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home Page / Our Sercives</li>
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
				<h1 class="page-header"> Our Sercives</h1>
			</div>
		</div><!--/.row-->				
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"> Manage Our Services <div class="col-md-2 pull-right"><button class="btn btn-success btn-block">Add</button></div> </div>
					<div class="panel-body">
						<table data-toggle="table">
						    <thead>
						    <tr>
                                <th data-field="id" >ID</th>
                                <th data-field="icon" >Icon</th>
						        <th data-field="title" >Title</th>
						        <th data-field="description">description</th>
						        <th data-field="created_at" >Created at</th>
						        <th data-field="updated_at" >Updated at</th>						        						         
                                <th data-field="action" colspan="2" >Action</th>
						    </tr>
                            </thead>
                            
						    @foreach($services as $service)
							    <tr >
                                    <td> {{ $service->id }} </td>
                                    <td> <img src="/images/1557042443.jpg" width="50px" height="50px"> </td>
							    	<td> {{ $service->title }} </td>
					    			<td> {{ Str::words(strip_tags($service->description),7) }} </td>
							    	<td> {{ $service->created_at }} </td>
                                    <td> {{ $service->updated_at }} </td>                                    							    	
                                    <td> <button class="btn btn-primary">edit</button> <button class="btn btn-danger">delete</button></td>		    		
							    </tr>
						    @endforeach
						    
						</table>
					</div>
				</div>
			</div>			
		</div><!--/.row-->			
		
	</div><!--/.main-->

@endsection
