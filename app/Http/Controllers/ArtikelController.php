<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function create(){
    	return view('artikel.form');
    }

    public function store(Request $request){
    	//dd($request->all());
    	$new_artikel = ArtikelModel::simpan($request->all());
    	return redirect('/artikel');
    }

    public function index(){
    	$artikel = ArtikelModel::get_all();
    	//dd($artikel);
    	return view('artikel.index', compact('artikel'));
    }
}
