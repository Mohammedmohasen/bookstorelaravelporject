<?php

namespace App\Http\Controllers;

use App\Http\Controllers\login\signupcontroller;
use Illuminate\Http\Request;

class controlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = url()->current();
        $http = "http://127.0.0.1:8000";
        switch ($url) {
            case $url . '/login':
                return view('login.pages-login');
                break;
            case $url . '/signup':
                return view('login.pages-register-boxed');
                break;
            case $url . '/index':
                return view('customer.home-page.index');
                break;
            case $url . '/book':
                return view('customer.home-page.book');
                break;
            default:
             return view('login.pages-login');
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * ANY REQUEST SEND SEND TO STOREN AND STORE RETURN IT TO THE CORRECT ROUTE IN THE CONTROLLER
     * AND WE SEND THE FORNAME AND CHECK THE TYPE OF FORNAME
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = $request['requestName'];
        switch ($check) {
            case 'register':
                return (new login\signupcontroller)->store($request);
                break;

            case 'loginForm':
                return app('App\Http\Controllers\login\loginController')->authenticate($request);
                break;
            case 'add-author-form':
                return app('App\Http\Controllers\admin\authorController')->store($request);

                break;
            default:

                break;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
