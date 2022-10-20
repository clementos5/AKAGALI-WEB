<?php

namespace Akagari;

use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    public static function cellName($id){
    	return Cell::whereid($id)->first()->name;
    }
}
