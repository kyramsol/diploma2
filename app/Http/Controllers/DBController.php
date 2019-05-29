<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function showTasks($id = null)
    {
        $tasks = DB::table('yourtask');
        if ($id) {
            $tasks = $tasks->where('id', $id);
        }
        $tasks = $tasks->get();
        return view('DB', compact('tasks'));
    }
}
