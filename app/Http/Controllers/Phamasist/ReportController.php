<?php

namespace App\Http\Controllers\Phamasist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function index()
    {
        return view('phamasist/reports');
    }
}
