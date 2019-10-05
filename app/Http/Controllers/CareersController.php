<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Careers;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers=Careers::all();
        return view('careers.career', ['careers'=>$careers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('careers.NewCareer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('logo')->store('logos');
        $career=new Careers;
            $career->name=$request->name;
            $career->logo=$path;
            $career->number=$request->number;

            $career->save();

        return redirect('/careers');
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
        $career_id=$id;
        $career=Careers::find($career_id);
        return view('careers.UpdateCareer', ['career'=>$career]);
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
        $career=Careers::find($id);
        $delete_img=$career->logo;
        Storage::delete($delete_img);

        $path = $request->file('logo')->store('logos');

        $career->name=$request->name;
        $career->logo=$path;
        $career->number=$request->number;
        $career->save();

        return redirect('/careers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career=Careers::find($id);
        $delete_img=$career->logo;
        Storage::delete($delete_img);

        $career=Careers::destroy($id);
        return redirect('/careers');
    }
}
