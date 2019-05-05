<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableContent extends Model
{
    // table name
    protected $table = "tablecontents";

   public function menu(){
   	return $this->belongsTo('App\Menu');
   }
   
    public function submenu(){
   	return $this->belongsTo('App\SubMenu');
   }
}
