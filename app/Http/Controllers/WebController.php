<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class WebController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
        return view('article', ['articles' => $articles]);
    }
}
