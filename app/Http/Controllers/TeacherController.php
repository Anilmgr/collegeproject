<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;
use App\Teacher;
use App\Menu;
use Session;
use DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

        // if(Auth::user()->identity=='teacher'){
            // $Tid = Teacher::find(auth()->id);
            // $teacher = Auth::user();
            
            $teacher = Teacher::all();
            $user = Auth::user();
            return view('Teacher/show_teacher')->with('teacher',$teacher)
                                                      ->with('user', $user);
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if(Auth::user()->identity=='teacher'){

            if($request->isMethod('get')){
                $teacher = Auth::user();
                $menus = Menu::all();
                // return view('Teacher/pages/add_profile')->with("teacherdata",Teacher::find(auth()->id));
                return view('Teacher/add_profile')->with("teacher",$teacher)
                                                  ->with("menus", $menus);
            }

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
   
    // if(Auth::user()->idnetity=='teacher'){
        
        //   if($request->isMethod('post')){
            // if(dd($request)){

                 $this->validate($request,[
                    'address' => 'string|max:255',
                    'phone'   => 'string|min:15|max:15',
                    'qualification' => 'string|max:1000',
                    'description'  =>'string|max:1000',
                    'facebook'  =>'string|max:50',
                    'linkedin'  =>'string|max:50',
                    'twitter'  =>'string|max:50',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
            
            $teacher = new Teacher;
            
            // if we have to send teacher's id 
            $id= Auth::user()->id;
            $teacher->id=$id;
            $teacher->phone = $request->input('phone');
            $teacher->address= $request->input('address');
            $teacher->qualification = $request->input('qualification');
            $teacher->description = $request->input('description');
            $fileName = pathinfo($request->file('image')->getClientOriginalName(),PATHINFO_FILENAME);
            $image_name = $fileName.'_'.time().'.'.request()->image->getClientOriginalExtension();
            $teacher->image = $image_name;
            $path= $request->file('image')->storeAs('public/image',$image_name);
            $teacher->facebook =$request->input('facebook');
            $teacher->linkedin =$request->input('linkedin');
            $teacher->twitter =$request->input('twitter');
            $teacher->save();
            return redirect('/dashboard/1/profile')->with('success','Your Profile Updated Successfully !!!');
            // return redirect('/teacher/dashboard/{id}')->with("id",$id);
            // $imageName = time().'.'.request()->image->getClientOriginalExtension();

     
    // }        
        // }else{
        //         return redirect('/admin')->with('flash_msg_err','You must Log-In First to access');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_profile()
    {    
        $id = Auth::user()->id;
        $user = User::all();
        $teacher=Teacher::find($id);
        $menus =Menu::all();
        return view('Teacher/profile')->with("teacher", $teacher)->with("menus", $menus)->with("user", $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
