<?php

namespace App\Http\Controllers;

use App\handhelds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class HandheldController extends Controller
{
    public function index()
    {
        $handheld = handhelds::all();
        return view('handheld.handheld', compact('handheld'));
    }

    public function create()
    {

    }

    public function store(Request $handhelds)
    {

    }
    public function show(handhelds $handhelds)
    {

    }

    public function edit($handhelds)
    {

    }

    public function update($handhelds, Request $request)
    {

    }

    public function destroy($handhelds)
    {

    }
}
