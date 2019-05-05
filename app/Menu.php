<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{	

    public function submenus(){
        return $this->hasMany('App\SubMenu');
    }

    public function tablecontent(){
    	return $this->hasMany('App\tableofcontents');
    }

    public function activesubmenus(){
        $instance =  $this->hasMany('App\SubMenu');
        $instance->where('status','=',1);
        return $instance;

    }

}
