<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Categorie;
class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    'name' => ['required', 'min:5', 'max:20','unique:categories'],
    'Describe' => ['required','min:5'],
]);

$Categorie = new Categorie();
$Categorie->name = $request->input('name');
$Categorie->Describe = $request->input('Describe');
$Categorie->NumberOfBook = 0;
$Categorie->save();
//return redirect(view(''))->with('success','succes create author : '.$request->input('Name'));
return redirect()->back()->with('success', 'succes create Categorie : ' . $request->input('name'));

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
        $Categorie=Categorie::find($id);
        return view('admin.admin-edit-category')->with('Categorie',$Categorie);

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
    'Describe' => ['required', 'min:5'],
]);


        $Categorie = Categorie::find($id);
        $categorynam=$Categorie->name;
$Categorie->Describe = $request->input('Describe');
$Categorie->NumberOfBook = 0;
$Categorie->save();

        return  redirect('/category')->with('success', 'succes update Categorie : ' .$categorynam);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Categorie = Categorie::find($id);
      $name=$Categorie->name;
       $condtion=$Categorie->NumberOfBook==0;

        if($condtion){
                $Categorie->delete();

return redirect('/category')->with('success', 'succes delete author : ' . $name);
            }
return abort(
    response()->json(['error' => 'you cannot delete a pearant item !.',
                                  'type'=>'this author whoos have the name :'.$name.'and he have a '.$Categorie->NumberOfBook.'',
                                  'error type '=>'databbase conjunctoin withthe relationship '
], 402)
);
    }
    public function showall()
    {
      $Categorie = new Categorie();
      $Categorie=Categorie::all();
      return view('admin.admin-category')->with('Categorie',$Categorie);
    }
}
