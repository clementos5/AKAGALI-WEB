<?php

namespace Akagari\Http\Controllers;

use Illuminate\Http\Request;

use Akagari\Suggestion;

use Akagari\Service;

use Akagari\ActionPlan;

use Akagari\User;

use Auth;

use Log;

use Session;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cell_suggestions   =   Suggestion::wherecell_id(Auth::user()->cell_id)->get();
        return view('suggestions')->with('suggestions', $cell_suggestions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($cell_id)
    {
        $cell_services  =   Service::wherecell_id($cell_id)->get();
        $action_plans   =   ActionPlan::wherecell_id($cell_id)->get();
        return view('suggest')
        ->with('cell_id', $cell_id)
        ->with('action_plans', $action_plans)
        ->with('services', $cell_services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Suggestion::create($request->all());
        $this->notifyCellAdmin();
        $request->session()->flash('message', 'Your suggestion was submitted. Thank you for your time');
        return redirect('/suggestions/suggest/'.$request->cell_id);
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
        Suggestion::whereid($id)->delete();
        Session::flash('message', 'Suggestion deleted!');
        return redirect('/suggestions');
    }

    private function notifyCellAdmin(){
        //Cell recipients
        $user_cell  =   Auth::user()->cell_id;
        $recipients =   User::select('phone_number')->wherecell_id($user_cell)->whereuser_type('admin')->get();
        $receivers  =   '';
        foreach($recipients AS $recipient){
            $receivers .= $recipient->phone_number.', ';
        }
        $message    =   'Muraho! Umuturage atanze igitekerezo mu rwego rwo kwiyubakira igihugu mu kagali muyobora!';
        $receivers  =   rtrim($receivers, ', ');
        $data       =   array("sender"=>"AKAGARI", "recipients"=>$receivers, "message"=>$message);
        Log::info($data);
        $url        =   env("INTOUCH_URL");
        $data       =   http_build_query($data);  
        $username   =   env("INTOUCH_USERNAME");
        $password   =   env("INTOUCH_PASSWORD");
        $ch         =   curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
        $result     =   curl_exec($ch);
        $httpcode   =   curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        Log::info($result);
        Log::info($httpcode);
    }
}
