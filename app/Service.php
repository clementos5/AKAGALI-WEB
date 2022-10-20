<?php

namespace Akagari;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table	=	'services';
    protected $fillable	=	[
    	'cell_id', 'name', 'description'
    ];
}
