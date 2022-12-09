<?php

namespace App\Http\Controllers;

use App\Models\Christ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PublicController extends Controller
{

    public function welcome(){

        $products = Christ::all();

        return view('welcome', compact('products'));
    }

    public function show(Christ $product){
        return view('show', compact('product'));
    }
    public function product(){
        $products = Christ::latest()->paginate(24);
        return view('product', compact('products'));
    }
}

