<?php

namespace App\Http\Controllers\problemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProblemaThreeController extends Controller
{
    public function index(){
        return view('problema_3.index');
    }
}
