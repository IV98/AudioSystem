<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Songs::all();
        return view('songs.index', compact('songs'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
