<?php

namespace Akagari\Http\Controllers;

use Illuminate\Http\Request;

use Akagari\Comment;

use Akagari\Topic;

use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $topic_comments = Comment::wheretopic_id($id)->get();
        $topic_info     = Topic::whereid($id)->first();
        return view('comments')->with('comments', $topic_comments)->with('topic', $id)->with('topic_info', $topic_info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('add_comment')->with('topic', $id);
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
        Comment::create($data);
        return redirect('comments/'.$request->input('topic_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::whereid($id)->delete();
        return redirect('/topics');
    }
}