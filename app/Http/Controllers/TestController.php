<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class TestController extends Controller
{
    public function showForm(){
        return view('AddTask');
    }

    public function saveTask(Request $request){
        $id = DB::table('yourtask')->insertGetId(
            ['Task' => $request->Task,
                'Name' => $request->Name,
                'SecondName' => $request->SecondName,
                'Post' => $request->Post,
                'Price' => $request->Price
                ]
        );
        
        return view('AddTask');
    }
}
