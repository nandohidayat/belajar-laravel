<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $messages = [
            'required' => ':attribute harus diisi',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maximal :max karakter'
        ];

        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ], $messages);

        return view('proses', ['data' => $request]);
    }
}
