<?php

namespace App\Http\Controllers\Phamasist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QueueController extends Controller
{
    public function index()
    {
        return view('phamasist/patient');
    }
}