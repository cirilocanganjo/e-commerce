<?php

use App\Http\Controllers\{HomeController,AdminController,AuthenticationController, ClienteController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get("/" , "home")->name("website.index");
});

Route::controller(AdminController::class)->group(function () {
    Route::get("/index" , "index")->name("admin.index");
        Route::get("/cadastro/produtos/" , "formSaveProducts")->name("form.save.products");
            Route::post("/registar/produtos/" , "storeProducts")->name("store.products");
                Route::get("/consultar/produtos/" , "showProducts")->name("table.products");
});

Route::controller(AuthenticationController::class)->group(function () {
    Route::get("/login" , "userLogin")->name("user.login");
        Route::post("/entrar" , "signIn")->name("user.signin");
            Route::get("/logout", "logout")->name("user.logout");

});

Route::controller(ClienteController::class)->group(function () {
    Route::middleware(["auth"])->group(function () {
        Route::get("/adicionar/carrinho/{id}" , "addChart")->name('client.add.chart');
    });
    Route::prefix("/clientes")->group(function () {
        Route::get("/formulário/criação/conta/" , 'clientAddAccount')->name("form.client.add.account");
            Route::post("criar/conta/" , "storeClientAccount")->name("store.client.account");
                Route::get("/formulário/confirmação/compra/" , "formConfirmationPaymet")->name("form.confirm.payment");
                    Route::post("/confirmar/pagamento/", "confirmPayment")->name("client.confirm.payment");
    });

});



