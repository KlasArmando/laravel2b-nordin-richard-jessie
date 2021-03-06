<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Console;
use function Sodium\compare;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Console::all();
        return view('console.console', compact('results'));
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
    public function store(Request  $request)
    {
        try
        {
            $consoles = new Console();
            $consoles->naam = input::get('naam');
            $consoles->releasedate = input::get('releasedate');
            $consoles->price = input::get('price');
            $consoles->name_id = 1;
            $consoles->created_at = null;
            $consoles->updated_at = null;
            $consoles->save();
        }catch (\Exception $e)
        {
            return Redirect::to('console/create')
                ->withInput()
                ->with('message', 'You tried to insert a duplicated item, please try again');

        }

        return redirect('console');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TheGameMuseum  $console)
     * @return \Illuminate\Http\Response
     */
    public function show(Console $console)
    {
        $consoles = Console::where('id', $console)->first();
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
        $consoles = Console::where('id', $console)->first();
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
        $consoles = Console::find($console);
        $consoles->naam = $request->naam;
        $consoles->releasedate = $request->releasedate;
        $consoles->price = $request->price;
        $consoles->name_id = 1;
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
        $consoles = Console::find($console);
        $consoles->delete();
        return redirect('/console');
    }
}
