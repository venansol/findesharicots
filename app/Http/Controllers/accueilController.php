<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accueilController extends Controller
{
    //function index()
   // {
    //    return view('acceuil');
    //}
    public function index()
    {
        return view('accueil');
    }
    public function create()
    {
        return view('accueil');
    }

    public function store()
    {
        return view('acceuil');
     //   return 'Le nom est ' . $request->input('prenom')
       //     ."   ".$request->input('ville')."   ".$request->input('age')."   ".$request->input('sexe');
    }
    }
