<?php

namespace Akagari;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $table	=	'suggestions';
    protected $fillable	=	[
    	'cell_id', 'name', 'email', 'phone', 'message'
    ];
}
