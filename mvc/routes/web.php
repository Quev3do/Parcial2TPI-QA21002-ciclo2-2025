<?php
use lib\Route;
use app\controllers\BancoController;

//Route::get("/", [BancoController::class,"inicio"]);

Route::get("/", [BancoController::class,"index"]);

Route::post("/enviar", [BancoController::class,"enviar"]);

Route::dispatch();
?>