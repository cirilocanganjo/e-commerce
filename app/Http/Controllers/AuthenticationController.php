<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function userLogin(){
        return view("login/login");
    }

    public function signIn(Request $request){
        //Validação para campos obrigatórios

        $credentials = $this->validate($request,["email" =>["required"], "password" =>["required"]],
             [
              "email.required" => "O campo utilizador é obrigatório",
              "password.required" => "O campo senha é obrigatório",
          ]);

          if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(Auth::user()->nivelAcesso === "admin"){
                return redirect()->route("admin.index");
            }
          }else {
            return redirect()->back()->with("wrongLogin", "Credenciais inválidas.");
          }

}



}
