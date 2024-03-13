<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/nome',function(Request $request){
    $nome = $request ->input('nome');
return $nome;
});