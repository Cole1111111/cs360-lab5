<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $a = 5;
        $b = 5;
        $c = $a + $b;

        return view('about',[
            //'user' => User::findOrFail()
            'user' => 10,
            'cs350' => $c
        ]);
    }

    public function signup()
    {
        $c = [1,2,3,4,5];

        return view('about',[
            //'user' => User::findOrFail()
            'a' => 9000,
            'b' => $c
        ]);
    }
}
