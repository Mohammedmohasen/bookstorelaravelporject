<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\author;
use App\Models\admin\PublishingHouse;
use App\Models\admin\books;
use App\Models\admin\Categorie;
use Carbon\Carbon;
class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dt = Carbon::create();
        $this->validate($request, [
    'NAME' => ['required', 'min:5', 'max:20'],
    'ISBN' => ['required',  'min:8'],
    'bookCategory'=>['required'],
   'bookAuthor' =>['required'],
   'bookpublishinghome' =>['required'],
]);

$books = new books();
$books->name = $request->input('NAME');
$books->isbn = $request->input('ISBN');
$books->releaseYear =  $dt->today();
$books->authorId = $request->input('bookAuthor');
$books->categoriesId = $request->input('bookCategory');
$books->publishingHousesId = $request->input('bookpublishinghome');
$books->save();
return redirect()->back()->with('success', 'succes create book : ' .  $request->input('NAME'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
public function showbooks()
{    
    $showbooks=new books();
     $showbooks = books::all();
      $author= author::all();
      $PublishingHouse= PublishingHouse::all();
      $Categorie= Categorie::all();
  



  
    
        return view('admin.book')
        ->with('showbooks',$showbooks)
         ->with('author',$author)
          ->with('PublishingHouse',$PublishingHouse)
          ->with('Categorie',$Categorie)
        ;
}
}
