<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{	

	// table name
    protected $table = "submenus";
    
    public function menu(){
        return $this->belongsTO('App\Menu');
    }

    public function content(){
    	return $this->hasMany('App\tableofcontents');
    }
   
}
