<?php

namespace App\Http\Controllers\Billclerk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {
        return view('billclerk/patient');
    }
}
