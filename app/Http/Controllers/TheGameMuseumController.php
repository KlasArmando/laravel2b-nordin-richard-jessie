<?php

namespace App\Http\Controllers;

use App\Console;
use App\Handheld;
use App\Game;
use Illuminate\Http\Request;

class TheGameMuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::all();
        $console = Console::all();
        $handheld = Handheld::all();
        return view('index', compact('game', 'console', 'handheld'));
    }


    public function contact()
    {
        return view('contact');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TheGameMuseum  $theGameMuseum
     * @return \Illuminate\Http\Response
     */
    public function show(TheGameMuseum $theGameMuseum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TheGameMuseum  $theGameMuseum
     * @return \Illuminate\Http\Response
     */
    public function edit(TheGameMuseum $theGameMuseum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TheGameMuseum  $theGameMuseum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TheGameMuseum $theGameMuseum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TheGameMuseum  $theGameMuseum
     * @return \Illuminate\Http\Response
     */
    public function destroy(TheGameMuseum $theGameMuseum)
    {
        //
    }
}
