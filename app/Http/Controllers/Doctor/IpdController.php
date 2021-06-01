<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IpdController extends Controller
{
    public function index()
    {
        return view('doctor/ipd');
    }
}
