<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
   {
       if(Auth::user()->hasRole('doctor')){
            return view('doctor/landpage');
       }elseif(Auth::user()->hasRole('regclerk')){
            return view('regclerk/landpage');
       }elseif(Auth::user()->hasRole('admin')){
        return view('admin/admin');
       }elseif(Auth::user()->hasRole('radtech')){
          return view('radtech/landpage');
       }elseif(Auth::user()->hasRole('billclerk')){
          return view('billclerk/landpage');
       }elseif(Auth::user()->hasRole('labtech')){
          return view('labtech/landpage');
       }elseif(Auth::user()->hasRole('pharmasist')){
          return view('pharmasist/landpage');
       }
   }

   public function myprofile()
   {
    return view('myprofile');
   }

   public function postcreate()
   {
    return view('postcreate');
   }
}
