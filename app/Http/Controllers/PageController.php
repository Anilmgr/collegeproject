<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableContent;
use App\Menu;

class PageController extends Controller
{

    public function page( $slug=Null, $subslug=Null){
        $tablecontent = TableContent::all();
        
    	if($slug == Null || $slug == 'homes' ){
    		return view('Pages.homes')->with('tablecontent',$tablecontent)    						->with('menus',Menu::where('status','=',1)->get());
	                            
    	} else {
    		if($subslug == Null ){
    			return view('Pages.page')->with('tablecontent',$tablecontent)->with('slug',$slug)    						->with('menus',Menu::where('status','=',1)->get());
	                            
    		} else {
                return view('Pages.page')->with('tablecontent',$tablecontent)->with('slug',$slug)->with('subslug',$subslug)->with('menus',Menu::where('status','=',1)->get());
    		}
		}

	}

}	
