<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PracTestController extends Controller
{
    public function test1()
    {
        // dump('test');
        return Inertia::render('prac/test1');
    }
}
