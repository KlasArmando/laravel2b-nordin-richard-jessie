<?php

namespace App\Http\Controllers;

use App\games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    public function index()
    {
        $game = games::all();
        return view('games.games', compact('game'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        try{
        $game = new games();
        $game->name = input::get('name');
        $game->releasedate = input::get('releasedate');
        $game->company = input::get('company');
        $game->price = input::get('price');
        $game->created_at = null;
        $game->updated_at = null;
        $game->save();
        }catch (\Exception $e)
        {
            return ('This product already exist. Go back to the previous page');
        }

        return redirect('games');
    }
    public function show(Games $games)
    {
        $game = games::where('id', $games)->first();
        return view('games.show', compact('game'));
    }

    public function edit($games)
    {
        $game = games::where('id', $games)->first();
        return view('games.edit', compact('game'));
    }

    public function update($games, Request $request)
    {
        $game = games::find($games);
        $game->name = $request->name;
        $game->releasedate = $request->releasedate;
        $game->company = $request->company;
        $game->price = $request->price;
        $game->save();
        return redirect('/games');
    }

    public function destroy($games)
    {
        $game = games::find($games);
        $game->delete();
        return redirect('/games');
    }
}
