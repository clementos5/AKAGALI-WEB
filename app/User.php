<?php

namespace Akagari;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Akagari\Cell;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cell_id', 'first_name', 'last_name', 'phone_number', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function userNames($id){
        $user = User::whereid($id)->first();
        return $user->first_name.' '.$user->last_name;
    }

    public static function userCell($id){
        return Cell::cellName(User::whereid($id)->first()->cell_id);
    }
}
