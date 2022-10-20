<?php

namespace Akagari;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
    	'user_id', 'topic_id', 'comment_text'
    ];
}
