<?php

namespace Akagari\Http\Controllers;

use Illuminate\Http\Request;

use Akagari\Topic;

use Akagari\User;

use Akagari\Conclusion;

use Akagari\Service;

use Akagari\ActionPlan;

use Auth;

use Log;


class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::getCellTopics(Auth::user()->cell_id);
        return view('topics')->with('topics', $topics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_topic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array_merge($request->all(), ['user_id'=>Auth::user()->id]);
        Topic::create($data);
        //Send a notification to the cell members
        $this->notifyCellMembers($request->title, $request->description);
        return redirect('/topics');
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
         topic::whereid($id)->delete();
        return redirect('/topics');
    }

    private function notifyCellMembers($title, $description){
        //Cell recipients
        $user_cell  =   Auth::user()->cell_id;
        $recipients =   User::select('phone_number')->wherecell_id($user_cell)->get();
        $receivers  =   '';
        foreach($recipients AS $recipient){
            $receivers .= $recipient->phone_number.', ';
        }
        $receivers  =   rtrim($receivers,', ');
        $data       =   array("sender"=>"AKAGARI", "recipients"=>$receivers, "message"=>$title.'\n '.$description);
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

    public function cellTopics($user_cell){
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
