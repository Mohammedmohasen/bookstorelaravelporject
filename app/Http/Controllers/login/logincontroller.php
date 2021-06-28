<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin\PublishingHouse;
use App\Models\admin\books;
use App\Models\admin\Categorie;
use App\Models\admin\author;

class logincontroller extends Controller
{
    function index() {

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
            $author=author::count();
            $Categorie=Categorie::count();
             $PublishingHouse=PublishingHouse::count();
              $books=books::count();
            return view('admin.admin-dashboard')
            ->with('success','login ')
            ->with('author',$author)
            ->with('Categorie',$Categorie)
            ->with('PublishingHouse',$PublishingHouse)
            ->with('books',$books) ;
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'wrong password',
        ]);

    }
}
