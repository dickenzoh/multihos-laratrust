<?php

namespace App\Http\Controllers\Labtech;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function index()
    {
        return view('labtech/reports');
    }
}
