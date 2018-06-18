<?php

namespace App\Http\Controllers;

use App\Handhelds;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HandheldsController extends Controller
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
            'naam' => 'required|unique:handhelds',
            'releasedate' => 'required',
            'company' => 'required',
            'price' => 'required',
        ]);

        handhelds::create($request->all());

        return redirect('handhelds');
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
    public function update(Request $request, Handhelds $handhelds)
    {
        $handhelds->naam = $request->naam;
        $handhelds->releasedate = $request->releasedate;
        $handhelds->company = $request->company;
        $handhelds->price = $request->price;
        $handhelds->save();
        return redirect('handhelds');
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
    }
}
