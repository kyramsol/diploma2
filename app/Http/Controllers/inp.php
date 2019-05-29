<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class inp extends Controller
{
    public function index()
    {
        $DataSearch= DB::table('yourtask')->get();


        return view('INP', compact('DataSearch'));
    }
}
