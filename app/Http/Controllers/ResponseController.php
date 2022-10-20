<?php

namespace Akagari\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function intouchSmsResponse(Request $request){
    	$json_response 	=	(string)$request->getContent();
    	$response 		=	json_decode($json_response, true);
    }
}
