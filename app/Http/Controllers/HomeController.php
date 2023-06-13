<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Categoria, Produto};

class HomeController extends Controller
{
    public function home() {
        $categories = Categoria::all();
        $products = Produto::all();
        return view("index", ["categories" =>$categories , "products" =>$products]);
    }


}
