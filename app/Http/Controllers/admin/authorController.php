<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\author;
use Illuminate\Http\Request;

class authorController extends Controller
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
        $this->validate($request, [
            'Name' => ['required', 'min:5','max:20'],
            'Age' => ['required','numeric','min:18'],
              'Email' => ['required', 'min:8', 'email','unique:authors']

        ]);

        $author = new author();
        $author->name= $request->input('Name');
        $author->email = $request->input('Email');
        $author->BookBNumber = 0;
        $author->state = $request->has('State');
        $author->age = $request->input('Age');
        $author->save();
         //return redirect(view(''))->with('success','succes create author : '.$request->input('Name'));
         return  redirect()->back()->with('success','succes create author : '.$request->input('Name'));
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
        $author=author::find($id);
        return view('admin.admin-edit-author')->with('author',$author);
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
        $this->validate($request, [
   'Email' => ['required', 'min:8', 'email','unique:authors']
]);

          $author = author::find($id);
$author->email = $request->input('Email');
$author->save();

        return  redirect('/author')->with('success', 'succes update author : ' . $author->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $author = author::find($id);
       $name = $author->name;
       $condtion=$author->BookBNumber==0;
       if($condtion){
                $author->delete();
return redirect('/author')->with('success', 'succes delete author : ' . $name);
            }
return abort(
    response()->json(['error' => 'you cannot delete a pearant item !.',
                                  'type'=>'this author whoos have the name :'.$name.'and he have a '.$author->BookBNumber.'',
                                  'error type '=>'databbase conjunctoin withthe relationship '
], 402)
);

    }
      public function showall()
    {
      $author = new author();
      $author=author::all();
      return view('admin.admin-author')->with('author',$author);
    }
}
