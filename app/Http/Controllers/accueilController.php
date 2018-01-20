<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accueilController extends Controller
{
    //function index()
   // {
    //    return view('acceuil');
    //}

    public function create()
    {
        return view('acceuil');
    }

    public function store(Request $request)
    {
         $nom =  $request->nom;
        return view('acceuil' , function (
        $request){

        });

    }
    }
