<?php

namespace Akagari;

use Illuminate\Database\Eloquent\Model;

class ActionPlan extends Model
{
    protected $fillable	=	[
    	'user_id', 'cell_id', 'plan_url'
    ];
}
