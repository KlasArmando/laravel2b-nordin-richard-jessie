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

        return view('handheld.handhelds', compact('handhelds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('handheld.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $handheld = new handhelds();
            $handheld->naam = input::get('naam');
            $handheld->releasedate = input::get('releasedate');
            $handheld->company = input::get('company');
            $handheld->price = input::get('price');
            $handheld->created_at = null;
            $handheld->updated_at = null;
            $handheld->save();
        }catch (\Exception $e)
        {
            return Redirect::to('handhelds/create')
                ->withInput()
                ->with('message', 'You tried to insert a duplicated item, please try again');

        }

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
        $handheld = handhelds::where('id', $handhelds)->first();
        return view('handheld.show', compact('handheld'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Handhelds  $handhelds
     * @return \Illuminate\Http\Response
     */
    public function edit($handhelds)
    {
        $handheld = handhelds::where('id', $handhelds)->first();
        return view('handheld.edit', compact('handheld'));
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
    public function destroy($handhelds)
    {
        $handheld = handhelds::find($handhelds);
        $handheld->delete();
        return redirect('/handhelds');
    }
}