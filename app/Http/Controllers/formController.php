<?php
namespace App\Http\Controllers;

    use Illuminate\Http\Request;

class formController extends Controller
{
    //function index()
    // {
    //    return view('acceuil');
    //}

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
             return $request->input('ville')."   ".$request->input('age')."   ".$request->input('sexe');
    }
}


