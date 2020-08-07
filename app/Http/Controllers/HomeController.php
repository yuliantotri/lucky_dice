<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function play(Request $request)
    {
        if (empty($request->total_player) || empty($request->total_dice)) {
            return redirect(route('home.index'))->withErrors('Please fill out <b>total player field</b> or <b>total dice field</b>');
        }

        $data = array(
            'input' => $request->all(),
        );

        return view('play', $data);
    }
}
