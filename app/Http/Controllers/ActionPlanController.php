<?php

namespace Akagari\Http\Controllers;

use Illuminate\Http\Request;

use Akagari\ActionPlan;

use Akagari\Cell;

use Auth;

class ActionPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $action_plans = ActionPlan::wherecell_id(Auth::user()->cell_id)->get();
        return view('action_plans')->with('action_plans', $action_plans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_action_plan')->with('cell', Auth::user()->cell_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $action_plan            =   new ActionPlan();
        $action_plan->cell_id   =   $request->input('cell_id');
        $action_plan->year      =   $request->input('year');
        if($request->file('plan_url') != ""){
            $file               =   $request->file('plan_url');
            $destinationPath    =   'uploads/action_plans';
            $extension          =   $file->getClientOriginalExtension();
            $filename           =   sha1(time().'_'.rand(0, 9999)).'.'.$extension;
            $upload_success     =   $file->move($destinationPath, $filename);
            $action_plan->plan_url = $destinationPath.'/'.$filename;
        }
        $action_plan->save();
        return redirect('/action_plans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ActionPlan::find($id)->delete();
        return redirect('/action_plans');
    }
}
