<?php

namespace Akagari\Http\Controllers;

use Illuminate\Http\Request;

use Akagari\Cell;

class SearchController extends Controller
{
    public function index(Request $request){
    	// return $request->all();

    	$search_query	=	$request->input('search');
    	$results 		=	Cell::where('name', 'LIKE', "%$search_query%")->get();
    	return view('search')->with('results', $results)->with('query', $search_query);
    }
}
