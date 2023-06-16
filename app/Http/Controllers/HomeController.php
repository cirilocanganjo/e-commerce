<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Categoria, Produto , CarrinhoCompras};
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {

        //Definir a lógica para poder exibir o icone de confirmação da compra
        $currentDate = Carbon::now()->format("d/m/Y");
        $authenticated = Auth::user()->dadosPessoaisRelacionamento->clienteId ?? '';

        $checkProduct = CarrinhoCompras::where("clienteId", "=" , $authenticated, )
        ->where("dataCompra" , "=" , $currentDate)
        ->count();

        $categories = Categoria::all();
        $products = Produto::all();
        return view("index", ["categories" =>$categories ,
         "products" =>$products,
         "checkProduct" => $checkProduct,
    ]);
    }


}
