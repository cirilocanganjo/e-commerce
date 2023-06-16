<?php

namespace App\Http\Controllers;
use App\Models\{CarrinhoCompras, Cliente, ConfirmacaoPagamento, DadosPessoais, Produto, User};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClienteController extends Controller
{
    public function clientAddAccount(){
        return view('/clients/forms/cliente');
    }

    public function storeClientAccount(Request $request){
        try{
            //Saving data in clientsTable
            $clientId = new Cliente();
            $date = Carbon::now();
            $clientId->created_at = $date;
            $clientId->updated_at = $date;
            $clientId->save();


            $client = new DadosPessoais();
            $client->nome = $request->nome;
            $client->sexo = $request->sexo;
            $client->dataNascimento = $request->dataNascimento;
            $client->telefone = $request->telefone;
            $client->provincia = $request->provincia;
            $client->municipio = $request->municipio;
            $client->rua = $request->rua;
            $client->bairro = $request->bairro;
            $client->clienteId = $clientId["clienteId"];
            $client->save();

            //Adding data in usersTable
            $user = new User();
            $user->email = $request->email;
            $user->password = \Hash::make($request->password);
            $user->dadosPessoaisId = $client["dadosPessoaisId"];
            $user->nivelAcesso = 'cliente';
            $user->save();

            return redirect()->route("user.login")->with("success" , "A sua conta foi criada com sucesso, faça o seu login");


        }catch(\Exception $ex){
            return redirect()->back()->with("exception",$ex->getMessage());
        }

    }

    //Adicionar ao carrinho
    public function addChart(Request $request, $id){
        $productAddedChart = new CarrinhoCompras();
        $productId = Produto::find($id);
        $dateBuy = Carbon::now()->format("d/m/Y");
        $productAddedChart->dataCompra = $dateBuy;
        $productAddedChart->produtoId = $productId["produtoId"];
        $productAddedChart->clienteId = Auth::user()->dadosPessoaisRelacionamento->clienteId ?? '';
        $productAddedChart->save();
        return redirect()->back();

    }

    public function formConfirmationPaymet(){

        $dateBuy = Carbon::now()->format("d/m/Y");
        $productDesc = CarrinhoCompras::Join("produtos" , "carrinho_compras.produtoId" , '=' , 'produtos.produtoId')
        ->where("dataCompra" , "=" , $dateBuy)
        ->get(["carrinho_compras.*", "produtos.*"]);

        $dateBuy = Carbon::now()->format("d/m/Y");
        $productInfo = CarrinhoCompras::Join("produtos" , "carrinho_compras.produtoId" , '=' , 'produtos.produtoId')
        ->where("dataCompra" , "=" , $dateBuy)
        ->select(\DB::raw("SUM(preco) as preco"))
        ->get(["carrinho_compras.*", "produtos.*"]);

        return view("clients.forms.confirmarPagamento", ["productInfo" =>$productInfo,
        "productDesc" =>$productDesc
    ]);
    }


    public function confirmPayment(Request $request){
        try{
            $data = $request->all();
            $confirmationPayment = ConfirmacaoPagamento::create($data);
            return redirect()->route("website.index");
        }catch(\Exception $ex){
            return redirect()->back()->with("exception", $ex->getMessage());
        }

    }

}
