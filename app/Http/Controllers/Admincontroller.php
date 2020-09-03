<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signinuser;
use App\Http\Requests\SignRequset;
class Admincontroller extends Controller
{

    public function users()
    {
        $detail= Signinuser::orderBy('id')->get();
        return view('delete' , compact('detail'));
    }

}
