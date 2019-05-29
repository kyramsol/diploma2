<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SearchingController extends Controller
{

    public function Searching(Request $request)
    {   $value='%'.$request->searching.'%';
        $DataSearch=DB::table('yourtask')->where('Name','like', $value)->get();
        return view('SearchResult', compact('DataSearch'));
    }
}
