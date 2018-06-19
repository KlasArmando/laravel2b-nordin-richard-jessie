<?php

namespace App\Http\Controllers;

use App\handhelds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class HandheldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $handhelds = Handhelds::all();

        return view('handheld.handheld', compact('handhelds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('handheld.handheldcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'name' => 'required|unique:handheld',
            'releasedate' => 'required',
            'company' => 'required',
            'price' => 'required',
        ]);

        Handhelds::create($request->all());

        return redirect('handheld.handheld');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Handhelds  $handhelds
     * @return \Illuminate\Http\Response
     */
    public function show(Handhelds $handhelds)
    {
        return view('handheld.handheldshow', compact('handhelds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Handhelds  $handhelds
     * @return \Illuminate\Http\Response
     */
    public function edit(Handhelds $handhelds)
    {
        return view('handheld.handheldedit', compact('handhelds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Handhelds  $handhelds
     * @return \Illuminate\Http\Response
     */
    public function update($handhelds, Request $request)
    {
        $handheld = handhelds::find($handhelds);
        $handheld->naam = $request->naam;
        $handheld->releasedate = $request->releasedate;
        $handheld->company = $request->company;
        $handheld->price = $request->price;
        $handheld->save();
        return redirect('/handhelds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Handhelds  $handhelds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Handhelds $handhelds)
    {
        $handhelds->delete();
        return redirect('handheld.handheld');
    }
}