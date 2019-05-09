<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\TableContent;
use App\Menu;
use App\SubMenu;
use DB;
use Session;
use App\Counter;
use App\Services;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	
    public function featuredposts()
    {
    	if(Session::has('adminsession')){ 
    		$tablecontent = TableContent::all(); 

    		return view('homepagesetting.featuredposts')->with("tablecontents",$tablecontent);;
    	}
    	else
    	{
            return redirect('/admin')->with('flash_msg_err','You must login to access');   
        }
    }

    public function services()
    {
    	if(Session::has('adminsession')){
            $services = Services::all(); 

    		return view('homepagesetting.services')->with("services",$services);
    	} 
    	else
    	{
            return redirect('/admin')->with('flash_msg_err','You must login to access');   
        }
    }

    public function counter()
    {
    	if(Session::has('adminsession')){ 
    		$counter=Counter::all(); 

    		return view('homepagesetting.counter')->with("counters",$counter);;
    	}
    	else
    	{
            return redirect('/admin')->with('flash_msg_err','You must login to access');   
        }
    }

    public function courses()
    {
    	if(Session::has('adminsession')){ 
    		return view('homepagesetting.courses');
    	}
    	else
    	{
            return redirect('/admin')->with('flash_msg_err','You must login to access');   
        }
    }

    public function feature($id)
    {
        if (Session::has('adminsession')) {
            # code...
            $tablecontent = TableContent::find($id);
            $tablecontent->featured = 1 - $tablecontent->featured;
            $tablecontent->save();

            return redirect('/homepagesetting/featuredposts');
        }else{
            return redirect('/admin')->with('flash_msg_err','you must login to assess');
        }
    }

}