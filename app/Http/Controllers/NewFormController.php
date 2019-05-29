<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewFormController extends Controller
{

    public function showform(){
        return view('NewForm');
    }

    public function AddData(Request $request){
            $data[]=$request->pepka;

             return   view('NewForm');

}

  public function ShowData(){
        return view('ShowDatas');
    }
}
