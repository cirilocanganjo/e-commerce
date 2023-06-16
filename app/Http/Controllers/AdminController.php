<?php

namespace App\Http\Controllers;
use App\Models\{Produto, Cliente , Categoria};
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productsCounter = Produto::count();
        $clientsCounter = Cliente::count();
        return view("/admin/index", [
            "productsCounter" =>$productsCounter,
            "clientsCounter" =>$clientsCounter
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function formSaveProducts()
    {
        $categories = Categoria::all();
        return view('admin/produtos/formulario', ["categories" =>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeProducts(Request $request)
    {
        try{

            $data = $request->all();
            if($request->hasFile("foto") && $request->file("foto")->isValid()){
                $file = $request->foto;
                $extension = $file->extension();
                $nameFile = "foto".strtotime("now").".". $extension;
                $file->move(public_path("./imagens/produtos"), $nameFile);
                $data["foto"] = $nameFile;
            }
            $newProduct = Produto::create($data);
            return redirect()->back()->with("success" , "Produto cadastrado com sucesso.");

            }catch(\Exception $ex){
              return redirect()->back()->with("catch" , "erro".$ex->getMessage());
            }


    }

    /**
     * Display the specified resource.
     */
    public function showProducts()
    {
        $productsCounter = Produto::count();
        $clientsCounter = Cliente::count();
        $products = Produto::all();
        return view("admin/produtos/tabela" , ["productsCounter" =>$productsCounter, "clientsCounter" =>$clientsCounter , "products" =>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

 
}
