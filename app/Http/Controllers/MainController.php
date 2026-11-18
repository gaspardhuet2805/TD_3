<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function albums()
    {
        $albums = DB::select("SELECT * FROM albums");
        return view("albums", compact("albums"));
    }
}