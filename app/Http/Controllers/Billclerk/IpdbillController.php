<?php

namespace App\Http\Controllers\Billclerk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IpdbillController extends Controller
{
    public function index()
    {
        return view('billclerk/ipdbill');
    }
}
