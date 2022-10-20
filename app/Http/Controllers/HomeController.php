<?php

namespace Akagari\Http\Controllers;

use Illuminate\Http\Request;

use Akagari\Topic;

use Akagari\Service;

use Akagari\ActionPlan;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type == 'sysadmin'){
            return redirect('/users');
        }

        $user_cell      =   Auth::user()->cell_id;
        $cell_topics    =   Topic::getCellTopics($user_cell);
        $cell_services  =   Service::wherecell_id($user_cell)->get();
        $action_plans   =   ActionPlan::wherecell_id($user_cell)->get();
        return view('home')
        ->with('topics', $cell_topics)
        ->with('cell_id', $user_cell)
        ->with('services', $cell_services)
        ->with('action_plans', $action_plans);        
    }
}
