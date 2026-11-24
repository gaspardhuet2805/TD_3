<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function albums()
    {
        $albums = DB::select("SELECT * FROM albums");

        return view('albums', compact('albums'));
    }

    public function detailalbum($id)
    {
        $albums = DB::select("SELECT * FROM albums WHERE id=?", [$id]);

        if (count($albums) == 0)
            abort(404);

        $album = $albums[0];

        $photos = DB::select("SELECT * FROM photos WHERE album_id=?", [$id]);

        return view('detailalbum', compact('album', 'photos'));
    }
}