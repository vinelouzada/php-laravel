<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            "Flash",
            "Breaking Bad",
            "Prison Break",
            "Grey's Anatomy"
        ];
        // ["series" => $series] == compact('series')
        return view("series.index",compact('series'));
    }

    public function create()
    {
        return view("series.create");
    }
}
