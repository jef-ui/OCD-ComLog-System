<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function index (){
        return view ('requisitions.index');
    }

    public function create (){
        return view('requisitions.create');
    }

    public function store (Request $request){
        dd ($request);
        
    }

}
