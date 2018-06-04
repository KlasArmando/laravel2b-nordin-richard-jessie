<?php

namespace App\Http\Controllers;

use App\consoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;
use SebastianBergmann\Environment\Console;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = consoles::all();
        return view('console.console', compact('results'));
    }

    public function cart($consoles)
    {
        $Consoles = consoles::where('id', $consoles)->first();
        return redirect('console');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('console.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consoles = new consoles();
        $consoles->naam = input::get('naam');
        $consoles->releasedate = input::get('releasedate');
        $consoles->company = input::get('company');
        $consoles->price = input::get('price');
        $consoles->created_at = null;
        $consoles->updated_at = null;
        $consoles->save();
        return redirect('console');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TheGameMuseum  $console)
     * @return \Illuminate\Http\Response
     */
    public function show(Consoles $console)
    {
        $consoles = consoles::where('id', $console)->first();
        return view('console.show', compact('consoles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TheGameMuseum  $console)
     * @return \Illuminate\Http\Response
     */
    public function edit($console)
    {
        $consoles = consoles::where('id', $console)->first();
        return view('console.edit', compact('consoles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TheGameMuseum  $consolem
     * @return \Illuminate\Http\Response
     */
    public function update($console, Request $request)
    {
        $consoles = consoles::find($console);
        $consoles->naam = $request->naam;
        $consoles->releasedate = $request->releasedate;
        $consoles->company = $request->company;
        $consoles->price = $request->price;
        $consoles->save();
        return redirect('/console');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TheGameMuseum  $console
     * @return \Illuminate\Http\Response
     */
    public function destroy($console)
    {
        $consoles = consoles::find($console);
        $consoles->delete();
        return redirect('/console');
    }
}
