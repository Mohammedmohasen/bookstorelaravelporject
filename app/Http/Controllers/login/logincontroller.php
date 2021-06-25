<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    function index() {
        return view('admin.admin-add-author');
    }
    public function __construct()
    {

    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *

     */
    public function authenticate(Request $request)
    {

        $user = $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $remember =$request->has('check');
        if (Auth::attempt($user,$remember)) {
         


            $request->session()->regenerate();
            return redirect('add-author')->with('success','success');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'wrong password',
        ]);

    return redirect('add-author');
    }
}
