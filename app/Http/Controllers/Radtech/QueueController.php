<?php

namespace App\Http\Controllers\Radtech;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QueueController extends Controller
{
    public function index()
    {
        return view('radtech/queue');
    }
}
