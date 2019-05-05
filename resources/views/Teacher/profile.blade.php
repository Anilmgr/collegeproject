@extends('layouts.app')
    @section('content')
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
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="/storage/image/{{$teacher->image}}" alt="{{$teacher->first_name}} {{$teacher->last_name}}"/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                {{-- <input type='file' onchange="readURL('/storage/image/');" />
                                <img id="blah" src="/storage/image/{{$teacher->image}}" alt="{{$teacher->first_name}} {{$teacher->last_name}}" /> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h3>
                                        {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                                    </h3>
                                    <h6>
                                        Teacher at Nepathya College
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Teacher Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->id}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p>{{$teacher->phone}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class=" form-group col-md-6">
                                                <label>Email:</label>
                                            </div>
                                            <div class=" form-group col-md-6">
                                                <p>{{Auth::user()->email}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class=" form-group col-md-6">
                                                <label>Gender:</label>
                                            </div>
                                            <div class=" form-group col-md-6">
                                                @if(Auth::user()->gender)
                                                    <p>Male</p>
                                                @else
                                                    <p>Female</p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class=" form-group col-md-6">
                                                <label>Identity:</label>
                                            </div>
                                            <div class=" form-group col-md-6">
                                                @if(Auth::user()->identity =='1')
                                                    <p>Teacher</p>
                                                @else
                                                    <p>Student</p>
                                                @endif
                                            </div>
                                        </div>

                                        
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class=" form-group col-md-6">
                                        <label>Qualification:</label>
                                    </div>
                                    <div class=" form-group col-md-6">
                                        <p>{!! $teacher->qualification !!}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" form-group col-md-6">
                                        <label>Description:</label>
                                    </div>
                                    <div class=" form-group col-md-6">
                                        <p>{!! $teacher->description !!}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" form-group col-md-6">
                                        <label>Facebook Profile Link:</label>
                                    </div>
                                    <div class=" form-group col-md-6">
                                        <p>{!! $teacher->facebook !!}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" form-group col-md-6">
                                        <label>Linked-In Profile Link :</label>
                                    </div>
                                    <div class=" form-group col-md-6">
                                        <p>{!! $teacher->linkedin !!}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" form-group col-md-6">
                                        <label>Twitter profile Link:</label>
                                    </div>
                                    <div class=" form-group col-md-6">
                                        <p>{!! $teacher->twitter !!}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        
    @endsection