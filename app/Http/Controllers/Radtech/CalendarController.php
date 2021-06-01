<?php

namespace App\Http\Controllers\Radtech;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    public function index()
    {
        return view('radtech/calendar');
    }
}
