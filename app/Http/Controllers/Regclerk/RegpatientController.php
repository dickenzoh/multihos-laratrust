<?php

namespace App\Http\Controllers\Regclerk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegpatientController extends Controller
{
    public function index()
    {
        return view('regclerk/patientreg');
    }
}
