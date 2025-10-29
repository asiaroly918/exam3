<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
  public function home()
    {
        return view('layouts.app');
    }

    public function index()
    {
        return view('Pages.Home');
    }
    
    public function resume()
    {
        return view('Pages.Resume');
    }
    public function contact()
    {
        return view('Pages.Contact');
    }

    public function projects()
    {
        return view('Pages.Projects');
    }   
}  

