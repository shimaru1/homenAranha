<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuriosidadeController extends Controller
{
    public function Curiosidade()
    {
        return view('curiosidade');
    }
}
