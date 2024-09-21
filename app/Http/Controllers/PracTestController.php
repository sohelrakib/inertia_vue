<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\PracTestRequest;

class PracTestController extends Controller
{
    public function test1()
    {
        // dump('test');
        return Inertia::render('prac/test1');
    }

    public function test2()
    {
        // dump('test2');
        $title = 'form prac';
        $namesArray = [
            ['name' => 'John2'],
            ['name' => 'Doe2'],
            ['name' => 'Alice3'],
            ['name' => 'Bob3'],
        ];

        return Inertia::render('prac/test2', [
            'title' => $title,
            'namesArray' => $namesArray,
        ]);
    }

    public function test2Submit(PracTestRequest $request)
    {
        dd($request->all());
    }
}
