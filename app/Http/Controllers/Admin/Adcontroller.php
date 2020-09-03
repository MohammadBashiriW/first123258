<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Signinuser;
use Illuminate\Http\Request;
use App\Http\Requests\SignRequset;
use App\Mail\TestMail;
class Adcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth')->only(['store' , 'edit' , 'update' , 'destroy']);
    }

    public function index()
    {
//        $user = \App\User::find(2);
//        Mail::to('mohammadbashiri8683@gmail.com')->send(new TestMail($user -> name, $user -> email));
//        session('key');
//        cookie()->queue(cookie('name' , 'ali' , 60 , null , null , true ));
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignRequset $request)
    {
        $validator_data = $request->validated();
        $user = new \App\Signinuser;
        $user->text  = $validator_data['text'];
        $user->body  = $validator_data['body'];
        $user->email = $validator_data['email'];
        $user->save();
        return redirect('/Signinusrs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Signinuser  $signinuser
     * @return \Illuminate\Http\Response
     */
    public function show(Signinuser $signinuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Signinuser  $signinuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Signinuser $Signinusr)
    {
//        dd(session()->get('key','ali'));
//        dd(request()->cookie('name'));
        return view('sign_form',[
            'FindUser' => $Signinusr
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Signinuser  $signinuser
     * @return \Illuminate\Http\Response
     */
    public function update(SignRequset $request, Signinuser $Signinusr)
    {
        $validator_data = $request->validated();
        $Signinusr->update($validator_data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Signinuser  $signinuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signinuser $Signinusr)
    {
        $Signinusr -> delete();
        return redirect('/Signinusrs/delete_page/');
    }
}
