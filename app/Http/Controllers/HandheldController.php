<?php

namespace App\Http\Controllers;

use App\Handheld;
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
        $handhelds = Handheld::all();
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
            $handheld = new Handheld();
            $handheld->name = input::get('name');
            $handheld->releasedate = input::get('releasedate');
            $handheld->price = input::get('price');
            $handheld->name_id = 1;
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
    public function show(Handheld $handhelds)
    {
        $handheld = Handheld::where('id', $handhelds)->first();
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
        $handheld = Handheld::where('id', $handhelds)->first();
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
        $handheld = Handheld::find($handhelds);
        $handheld->name = $request->name;
        $handheld->releasedate = $request->releasedate;
        $handheld->price = $request->price;
        $handheld->name_id = 1;
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
        $handheld = Handheld::find($handhelds);
        $handheld->delete();
        return redirect('/handhelds');
    }
}