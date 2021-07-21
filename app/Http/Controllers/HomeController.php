<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    public function index()
    {
        $comicSelect = Comic::select('id', 'thumb', 'title', 'slug')->get();

        return view('home', compact('comicSelect'));
    }
}
