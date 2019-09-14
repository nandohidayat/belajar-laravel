<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $username = '@nandohidayat';
        $skill = ['HTML', 'CSS', 'Javascript'];
        return view('biodata', ['username' => $username, 'skill' => $skill]);
    }
}
