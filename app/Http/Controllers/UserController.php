<?php

namespace Akagari\Http\Controllers;

use Illuminate\Http\Request;

use Akagari\User;

use Akagari\Cell;

use Session;

use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type != 'sysadmin'){
            Session::flash('message', 'Permission denied. This module required a higher access level');
            return redirect('home');
        }
        else{
            $users  =   User::where('user_type', '!=', 'sysadmin')->get();
            return view('users')->with('users', $users);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user   =   User::whereid($id)->first();
        return view('user_details')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user   =   User::whereid($id)->first();
        $cells  =   Cell::all();;
        return view('edit_user')->with('user', $user)->with('cells', $cells);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id                 =   $request->input('_user');
        $user               =   User::whereid($id)->first();
        $user->first_name   =   $request->input('first_name');
        $user->last_name    =   $request->input('last_name');
        $user->email        =   $request->input('email');
        $user->phone_number =   $request->input('phone_number');
        $user->user_type    =   $request->input('user_type');
        $user->cell_id      =   $request->input('cell_id');
        $user->save();
        Session::flash('message', 'User updated with success');
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user   =   User::whereid($id)->delete();
        Session::flash('message', 'User deleted with success');
        return redirect('/users');
    }
}
