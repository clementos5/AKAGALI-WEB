<?php

namespace Akagari;

use Illuminate\Database\Eloquent\Model;

class Conclusion extends Model
{
    protected $table	=	'conclusions';
    protected $fillable	=	[
    	'user_id', 'topic_id', 'conclusion_text'
    ];
}
