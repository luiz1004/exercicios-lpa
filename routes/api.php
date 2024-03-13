<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/nome',function(Request $request){
    $nome = $request ->input('nome');
return $nome;
});

Route::get('/nome\idade',function(Request $request){
    $nome = $request ->input('nome');
    $idade = $request ->input('idade');
    return 'Meu Nome é' . $nome . ' Minha Idade é '. $idade;

});