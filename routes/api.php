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

Route::get('/nome/idade/cidade',function(Request $request){
    $nome = $request ->input('nome');
    $idade = $request ->input('idade');
    $cidade = $request ->input('cidade');

    return $nome .' '. $idade .' '. $cidade;

});


Route::get('/conta/adcao',function(Request $request){
    $primeironumero = $request ->input('primeironumero');
$segundonumero = $request ->input('segundonumero');
   $resultado = $primeironumero + $segundonumero;
return $resultado;
});

Route::get('/conta/sub',function(Request $request){

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');

$terceironumero = $request->input('terceironumero');

$resultado = $primeironumero - $segundonumero - $terceironumero;
return $resultado;
});

Route::get('/conta/divi',function(Request $request){

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');


$resultado = $primeironumero / $segundonumero;
return $resultado;
});

Route::get('/conta/multi',function(Request $request){

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');


$resultado = $primeironumero * $segundonumero;
return $resultado;
});

Route::get('/conta/media',function(Request $request){

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');

$terceironumero = $request->input('terceironumero');

$quartonumero = $request ->input('quartonumero');

$quintonumero = $request ->input('quintonumero');

$resultado = $primeironumero + $segundonumero + $terceironumero + $quartonumero + $quintonumero / 5;

return $resultado;
});

Route::get('/conta/divi2',function(Request $request){

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');


$resultado = $segundonumero / $primeironumero;
return $resultado;
});

Route::get('/dobrodonumero',function(Request $request){

    $onumeroé = $request->input('onumeroé');
    $resultado = $onumeroé * 2;
    
    return 'O dobro do ' . $onumeroé . ' é igual a ' . $resultado;
    
    });

    Route::get('/retangulo',function(Request $request){

        $base = $request  ->input('base');
        $altura = $request ->input('altura');
    
        $resultado = $base * $altura;
    
        return $resultado;
    
    });

    Route::get('/desconto',function(Request $request){

        $preco = $request ->input('preco');
        $desconto = $request ->input('desconto');
        $valorDesconto = $desconto * $preco/100;
        $valorComDesconto = $preco - $valorDesconto;
        return $valorComDesconto;
        });

        Route::get('/salario',function(Request $request){

            $salarioanterior = $request ->input('salario');
            $aumento = $request ->input('aumento');
            $resultado = ($salarioanterior * $aumento) /100 ;
            return 'o salario anterior é' .' '. $salarioanterior .' '. 'o novo salario é de' .' '. $resultado + $salarioanterior;
            });
            

            Route::get('/pontos',function(Request $request){

                $valorgasto = $request ->input('valorgasto');
                $pontos = $valorgasto /10;
                
                return $pontos;
                });

                Route::get('/comissao',function(Request $request){

                    $venda = $request ->input('venda');
                    $comissao = $request ->input('comissao');
                    $resultado = ($venda * $comissao) / 100;
                    return $resultado;
                    
                    });
                    

                    Route::get('/dias',function(Request $request){


                        $dias = $request->input('dias');
                        
                        
                        $resultado =($dias * 24).' horas '. ($dias * 1440).' minutos '. ($dias * 86400) .' '. 'segundos';
                        return $resultado;
                        });

                        Route::get('/quantidade',function(Request $request){

                            $preco = $request->input('preco');
                            $quantidade = $request ->input('quantidade');
                            $resultado = $preco * $quantidade;
                            return $resultado;
                            });