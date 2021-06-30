<?php

namespace App\Http\Controllers;

use App\Http\Controllers\login\signupcontroller;
use App\Models\admin\author;
use App\Models\admin\books;
use App\Models\admin\Categorie;
use App\Models\admin\PublishingHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use DB;
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

        $http = 'http://' . $_SERVER['HTTP_HOST'] . '/';

        switch ($url) {
            case $http . 'login':
                return view('login.pages-login');
                break;
            case $http . 'signup':
                return view('login.pages-register-boxed');
                break;
            case $http . '/index':
                return view('customer.home-page.index');
                break;
            case $http . 'book':
                return app('App\Http\Controllers\admin\booksController')->showall();
            case $http . 'category':
                return app('App\Http\Controllers\admin\categoriesController')->showall();
                break;
            case $http . 'author':
                return app('App\Http\Controllers\admin\authorController')->showall();
                break;
            case $http . 'publishing':
                return app('App\Http\Controllers\admin\publishingController')->showall();
            default:
                return view('customer.book');
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
            case 'add-Categories':
                return app('App\Http\Controllers\admin\categoriesController')->store($request);
                break;
            case 'add-publishing-house':
                return app('App\Http\Controllers\admin\publishingController')->store($request);
                break;
            case 'add-book':
                return app('App\Http\Controllers\admin\booksController')->store($request);
                break;
            case 'searchbox':
              return $this->searchmethod($request);
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
        $url = url()->current();
        $http = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        if (strpos($url, 'category') !== false) {return app('App\Http\Controllers\admin\categoriesController')->edit($id);} elseif (strpos($url, 'author') !== false) {
            return app('App\Http\Controllers\admin\authorController')->edit($id);
        } elseif (strpos($url, 'PublishingHouse') !== false) {
            return app('App\Http\Controllers\admin\publishingController')->edit($id);
        } elseif (strpos($url, 'book') !== false) {
            return app('App\Http\Controllers\admin\booksController')->edit($id);
        }
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
        $check = $request['requestName'];
        switch ($check) {
            case 'edit-Categories':
                return app('App\Http\Controllers\admin\categoriesController')->update($request, $id);
                break;
            case 'edit-author-form':
                return app('App\Http\Controllers\admin\authorController')->update($request, $id);
                break;
            case 'edit-publishing-house':
                return app('App\Http\Controllers\admin\publishingController')->update($request, $id);
                break;
            case 'edit-book':
                return app('App\Http\Controllers\admin\booksController')->update($request, $id);
                break;
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $url = url()->current();
        if (strpos($url, 'category') !== false) {
            return app('App\Http\Controllers\admin\categoriesController')->destroy($id);
        } elseif (strpos($url, 'author') !== false) {
            return app('App\Http\Controllers\admin\authorController')->destroy($id);
        } elseif (strpos($url, 'PublishingHouse') !== false) {
            return app('App\Http\Controllers\admin\publishingController')->destroy($id);
        } elseif (strpos($url, 'book') !== false) {
            return app('App\Http\Controllers\admin\booksController')->destroy($id);
        }
    }
///CUSTOM METHOID USE FOR SPACIFEC THINKS
    public function GetParentInformation()
    {
        $author = new author();
        $Categorie = new Categorie();
        $PublishingHouse = new PublishingHouse();

        $author = author::all('id', 'name');
        $Categorie = Categorie::all('id', 'name');
        $PublishingHouse = PublishingHouse::all('id', 'publishingHouseName');
        return view('admin.admin-add-book')
            ->with('author', $author)
            ->with('Categorie', $Categorie)
            ->with('PublishingHouse', $PublishingHouse);
    }

    public function searchmethod($request)
    {
        $this->validate($request, [
            'search' => ['required', 'min:5'],
        ]);
        /*
        $author = new author();
        $Categorie = new Categorie();
        $PublishingHouse = new PublishingHouse();
        $books = new books();



        $Categorie= Categorie::where('name', $request->search)
         ->pluck('id')
         ->all();


           $author= author::where('name', $request->search)
         ->pluck('id')
         ->all();


        $PublishingHouse= PublishingHouse::where('publishingHouseName', $request->search)
         ->pluck('id')
         ->all();

        $books = books::
          where('categoriesId', $Categorie)
            ->where('publishingHousesId', $PublishingHouse)
            ->where('authorId', $author)
           ->with('author')
            ->with('Categorie')
            ->with('PublishingHouse')
            ->select('*')
            ->get();
*/


$books=books::with('author')
->with('Categorie')
->with('PublishingHouse')
->where('name',$request->search)
->select('*')
->get();




     return view('admin.admin-book')->with('books', $books);


    }
}
