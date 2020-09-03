<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;

class Homecontroler extends Controller
{
    public function Home (){

        return view('index');
    }
}
