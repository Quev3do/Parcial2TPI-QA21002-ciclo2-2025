<?php
use lib\Route;
use app\controllers\BancoController;

Route::get("/", function(){
    return "Raiz";
});

Route::get("/banco", [BancoController::class,"index"]);

Route::post("/enviar", [BancoController::class,"enviar"]);

Route::dispatch();
?>