<?php

namespace App\Http\Controllers;

use App\Game;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class GameController extends Controller
{
    public function index()
    {
        $game = Game::all();
        $companies = Company::all();
        return view('games.games', compact('game', 'companies'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        try
        {
            $game = new Game();
            $game->naam = input::get('naam');
            $game->releasedate = input::get('releasedate');
            $game->company = input::get('company');
            $game->price = input::get('price');
            $game->created_at = null;
            $game->updated_at = null;
            $game->save();
        }catch (\Exception $e)
        {
            return Redirect::to('console/create')
                ->withInput()
                ->with('message', 'You tried to insert a duplicated item, please try again');

        }

        return redirect('games');
    }
    public function show(Game $games)
    {
        $game = Game::where('id', $games)->first();
        return view('games.show', compact('game'));
    }

    public function edit($games)
    {
        $game = Game::where('id', $games)->first();
        return view('games.edit', compact('game'));
    }

    public function update($games, Request $request)
    {
        $game = Game::find($games);
        $game->naam = $request->naam;
        $game->releasedate = $request->releasedate;
        $game->company = $request->company;
        $game->price = $request->price;
        $game->save();
        return redirect('/games');
    }

    public function destroy($games)
    {
        $game = Game::find($games);
        $game->delete();
        return redirect('/games');
    }
}
