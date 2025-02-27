<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:chauffeur');
    }

    public function index()
    {
        return view('chauffeur.dashboard');
    }
}
