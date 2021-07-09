<?php

namespace App\Http\Controllers\problemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProblemaTwoController extends Controller
{
    public function index()
    {
        return view('problema_2.index');
    }
}
