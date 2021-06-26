<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\PublishingHouse;

class publishingController extends Controller
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
    'name' => ['required', 'min:5'],
    'siteName' => ['required','url'],
]);

$PublishingHouse = new PublishingHouse();
$PublishingHouse->publishingHouseName = $request->input('name');
$PublishingHouse->siteName = $request->input('siteName');
$PublishingHouse->bookNumber = 0;
$PublishingHouse->save();
//return redirect(view(''))->with('success','succes create author : '.$request->input('Name'));
return redirect()->back()->with('success', 'succes create Publishing HOME : ' . $request->input('name'));

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
       public function showall()
    {
      $PublishingHouse = new PublishingHouse();
      $PublishingHouse=PublishingHouse::all();
      return view('admin.admin-publishing-home')->with('PublishingHouse',$PublishingHouse);
    }
}
