<?php
namespace Akagari;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	protected $table = 'topics';

    protected $fillable = [
    	'user_id', 'title', 'description', 'start_date', 'end_date'
    ];

    public static function topicTitle($id){
    	return Topic::find($id)->first()->title;
    }

    public static function getCellTopics($cell){
    	return Topic::select('topics.*', 'users.cell_id')->join('users', function($join){
		    		$join->on('users.id', '=', 'topics.user_id');
		    	})
		    	->where('users.cell_id', '=', $cell)
		    	->get();
    }
}
