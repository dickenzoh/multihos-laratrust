<?php

namespace App\Http\Controllers\Billclerk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QueueController extends Controller
{
    public function index()
    {
        return view('billclerk/queue');
    }
}
