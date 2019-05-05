@extends('layouts.app')
{{-- @extends('Admin/adminLayout/admin_design') --}}
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
                <div class="col-lg-12">
                        <h1 class="page-header">Teacher Registration Form</h1>
                </div>
        </div><!--/.row-->
        
        @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
                        
        @if(count($errors) > 0)
          @foreach($errors->all() as $error)
                  <div class="alert alert-danger"> {{ $error }}</div>
          @endforeach
        @endif

        <div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                                <div class="panel-heading">Your Details</div>
                                <div class="panel-body">
                                        <div class="col-md-12">						
                            
                {{-- Route session --}}
                {{      @csrf_field()   }}
{!! Form::open(['action'=>'TeacherController@store','Method'=>'POST','enctype'=>'multipart/form-data']) !!}
<div class="row">
        <div class="form-group col-md-6">
        {{Form::label('first_name','Your First Name')}}
        {{Form::text('first_name',$teacher->first_name,['class'=>'form-control','placeholder'=>'Your First Name'])}}
    </div>
    <div class="form-group col-md-6">
        {{Form::label('name','Your Last Name')}}
        {{Form::text('last_name',$teacher->last_name,['class'=>'form-control','placeholder'=>'Your First Name'])}}
    </div>
</div>

<div class="row">
        <div class="form-group col-md-6">
        {{Form::label('username','User Name')}}
        {{Form::text('username',$teacher->username,['class'=>'form-control col-md-6','placeholder'=>'User Name'])}}
        </div>

         <div class="form-group col-md-6">
        {{Form::label('role','User Role')}}
        {{Form::text('role',$teacher->identity,['class'=>'form-control col-md-6','placeholder'=>'User Role In this Institution'])}}
        </div>
</div>
<div class="row">
       <div class="col-md-6">
                {{Form::label('gender','Gender',['class'=>'col-md-2'])}}
                {{-- <label class="col-md-2">Gender:</label> --}}
                <div class="col-md-6">
                        @if($teacher->gender==1)
                <input type="radio" name="gender" value="{{$teacher->male}}" checked> Male<br>
                <input type="radio" name="gender" value="{{$teacher->female}}"> Female<br>              
                @else
                <input type="radio" name="gender" value=0 > Male<br>
                <input type="radio" name="gender" value=1 checked> Female<br>
                @endif
                </div>              
        </div>
        <div class="form-group col-md-6">
                {{Form::label('email','User Role')}}
                {{Form::email('email',$teacher->email,['class'=>'form-control col-md-6','placeholder'=>'your emailaddress'])}}
        </div>


</div>
<div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                                <div class="panel-heading">Add Following Details On Your Profile</div>
                                <div class="panel-body">
                                        <div class="col-md-12">	
        

        <div class="row">
                <div class="form-group col-md-6">
                {{Form::label('address','Address')}}
                {{Form::text('address','',['class'=>'form-control col-md-6','placeholder'=>'Your Address here'])}}
                </div>

                <div class="form-group col-md-6">
                  {{Form::label('contact','Contact Details')}}
                  {{Form::text('phone','',['class'=>'form-control col-md-6','placeholder'=>'+977 '])}}
                </div>
        </div>
         <div class="row">
                <div class="form-group col-md-6">
                        {{Form::label('facebook','Link Up With Your Facebook Profile')}}
                        {{Form::text('facebook','',['class'=>'form-control col-md-6','placeholder'=>'eg: www.facebook.com/username'])}}
                </div>

                <div class="form-group col-md-6">
                        {{Form::label('linkedin','Link Up With Your Linked-In Profile')}}
                        {{Form::text('linkedin','',['class'=>'form-control col-md-6','placeholder'=>'eg: www.linkedin.com/username'])}}
        </div>

         <div class="row">
                <div class="form-group col-md-6">
                  {{Form::label('twitter','Link Up With Your Twitter Profile')}}
                  {{Form::text('twitter','',['class'=>'form-control col-md-6','placeholder'=>'eg: www.twitter.com/username'])}}
                </div>
        </div>

        <div class="column">
        {{form::label('image','User Image')}}
        {{form::file('image',['id'=>'photo','type'=>'file','class'=>'custom-file-control'] )}}
        </div>
      <div class="row">
                <div class="form-group">
                        {{Form::label('qualification','Qualification Details')}}
                        {{Form::textarea('qualification','',['id'=>'article-ckeditor1','class'=>'form-control col-md-6','placeholder'=>'Your Address here'])}}
                </div>
     </div>
    
     <div class="row">
                <div class="form-group">
                          {{Form::label('description','Your Full description')}}
                          {{Form::textarea('description','',['id'=>'article-ckeditor2','class'=>'form-control', 'text'=>'Your Full description'])}}
                </div>
        </div>
        
     {{Form::submit('Submit',['class'=>'btn btn-primary btn-lg','style'=>'width:20%'])}}
    {!! Form::close() !!}
@endsection