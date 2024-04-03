<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/nome', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('/nome/idade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return ' Meu Nome é ' . ' ' . $nome . ' ' . 'Minha Idade é ' . ' ' . $idade;
});

Route::get('/nome/idade/cidade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    $cidade = $request->input('cidade');

    return ' Meu Nome é ' . ' ' . $nome . ' minha idade é ' . ' ' . $idade . ' minha cidade é ' . ' ' . $cidade;
});


Route::get('/conta/adcao', function (Request $request) {
    $primeironumero = $request->input('primeironumero');
    $segundonumero = $request->input('segundonumero');
    $resultado = $primeironumero + $segundonumero;
    return $resultado;
});

Route::get('/conta/sub', function (Request $request) {

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');

    $terceironumero = $request->input('terceironumero');

    $resultado = $primeironumero - $segundonumero - $terceironumero;
    return $resultado;
});

Route::get('/conta/divi', function (Request $request) {

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');


    $resultado = $primeironumero / $segundonumero;
    return $resultado;
});

Route::get('/conta/multi', function (Request $request) {

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');


    $resultado = $primeironumero * $segundonumero;
    return $resultado;
});

Route::get('/conta/media', function (Request $request) {

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');

    $terceironumero = $request->input('terceironumero');

    $quartonumero = $request->input('quartonumero');

    $quintonumero = $request->input('quintonumero');

    $resultado = ($primeironumero + $segundonumero + $terceironumero + $quartonumero + $quintonumero) / 5;

    return $resultado;
});

Route::get('/conta/divi2', function (Request $request) {

    $primeironumero = $request->input('primeironumero');

    $segundonumero = $request->input('segundonumero');


    $resultado = $segundonumero / $primeironumero;
    return $resultado;
});

Route::get('/dobrodonumero', function (Request $request) {

    $onumeroé = $request->input('onumeroé');
    $resultado = $onumeroé * 2;

    return 'O dobro do ' . $onumeroé . ' é igual a ' . $resultado;
});

Route::get('/retangulo', function (Request $request) {

    $base = $request->input('base');
    $altura = $request->input('altura');

    $resultado = $base * $altura;

    return $resultado;
});

Route::get('/desconto', function (Request $request) {

    $preco = $request->input('preco');
    $desconto = $request->input('desconto');
    $valorDesconto = $desconto * $preco / 100;
    $valorComDesconto = $preco - $valorDesconto;
    return $valorComDesconto;
});

Route::get('/salario', function (Request $request) {

    $salarioanterior = $request->input('salario');
    $aumento = $request->input('aumento');
    $resultado = ($salarioanterior * $aumento) / 100;
    return 'o salario anterior é' . ' ' . $salarioanterior . ' ' . 'o novo salario é de' . ' ' . $resultado + $salarioanterior;
});


Route::get('/pontos', function (Request $request) {

    $valorgasto = $request->input('valorgasto');
    $pontos = $valorgasto / 10;

    return $pontos;
});

Route::get('/comissao', function (Request $request) {

    $venda = $request->input('venda');
    $comissao = $request->input('comissao');
    $resultado = ($venda * $comissao) / 100;
    return $resultado;
});


Route::get('/dias', function (Request $request) {


    $dias = $request->input('dias');


    $resultado = ($dias * 24) . ' horas ' . ($dias * 1440) . ' minutos ' . ($dias * 86400) . ' ' . 'segundos';
    return $resultado;
});

Route::get('/quantidade', function (Request $request) {

    $preco = $request->input('preco');
    $quantidade = $request->input('quantidade');
    $resultado = $preco * $quantidade;
    return $resultado;
});



Route::Get('/exemplocondicao', function (Request $request) {

    $idade = $request->input('idade');
    $retorno = "";
    if ($idade >= 18) {;
        $retorno = "Maior de Idade";
    } else ($retorno = "Menor de idade");

    return $retorno;
});




Route::Get('verificandoidade', function (Request $request) {

    $idade = $request->input('idade');

    if ($idade <= 18) {;
        return  "maior de idade";
    } else {
        return "menor de idade";
    };
});

Route::Get('parimpar', function (Request $request) {

    $numero = $request->input('numero');
    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});


Route::Get('exercicios21', function (Request $request) {

    $numero = $request->input('numero');

    if ($numero > 10) {
        return "Maior que 10";
    } else {
        return "Menor que 10";
    }
});


Route::Get('exercicios22', function (Request $request) {

    $temperatura = $request->input('temperatura');
    if ($temperatura >= 30) {
        return "Esta quente";
    } else {
        return "Esta Frio";
    }
});

Route::Get('exercicios23', function (Request $request) {

    $numero = $request->input('numero');


    if ($numero > 0) {
        return "Positivo";
    } else if ($numero == 0) {
        return "numero é zero";
    } else {
        return "Negativo";
    }
});

Route::Get('exercicios24', function (Request $request) {

    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if ($numero1 > $numero2) {
        return "o primeiro numero é maior";
    } else {
        return "o segundo numero é maior";
    }
});


Route::Get('exercicios25', function (Request $request) {

    $numero = $request->input('numero');

    if ($numero % 3 == 0) {
        return "o numero é divisivel";
    } else {
        return "o numero nao é divisivel";
    }
});


Route::Get('exercicios26', function (Request $request) {

    $numero = $request->input('numero');

    if ($numero % 9 == 0) {
        return "o numero é divisivel";
    } else {
        return "o numero nao é divisivel";
    }
});


Route::Get('exercicios27', function (Request $request) {

    $numero = $request->input('numero');

    if ($numero % 7 == 0) {
        return "o numero é multiplo";
    } else {
        return "o numero nao é multiplo";
    }
});

Route::Get('/exercicios28', function (Request $request) {

    $idade = $request->input('idade');
    $retorno = "";
    if ($idade <= 12) {;
        $retorno = "Você é uma criança";
    } else ($retorno = "Você ja é adulto");

    return $retorno;
});


Route::Get('/exercicios29', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 2 == 0) {
        if ($numero > 0)
            return "o numero é impar e positivo";
    } else {
        return "o numero nao é impar";
    }
});



Route::Get('exercicios30', function (Request $request) {

    $numero = $request->input('numero');


    if ($numero > 100) {
        return "Maior que 100";
    } else if ($numero == 100) {
        return "numero é 100";
    } else {
        return "Menor que 100";
    }
});

Route::Get('/exercicios31', function (Request $request) {

    $numero = $request->input('numero');
    if ($numero % 6 == 0) {
        return 'É divisivel';
    } else {
        return 'Não é divisivel';
    }
});

Route::Get('/exercicios32', function (Request $request) {

    $nome = $request->input('nome');
    if ($nome == "Alice") {
        return "ola Alice";
    } else {
        return "voce não é a alice";
    }
});

Route::Get('/exercicios33', function (Request $request) {
    $idade = $request->input('nome');
    $carteira = $request->input('carteira');
    if ($idade >= 18) {
        if ($carteira == "sim") {
            return "ok voce é maior de idade";
        }
    } else {
        return "voce nao pode dirigir";
    }
});


Route::Get('/exercicios34', function (Request $request) {

    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if ($numero1 > $numero2) {
        return "o primeiro numero é menor";
    } elseif ($numero2 == $numero1) {
        return "os numeros são iguais";
    } else {
        return "o segundo numero é menor";
    }
});


Route::Get('/exercicios35', function (Request $request) {

    $nome = $request->input('nome');
    $idade = $request->input('idade');
    if ($idade >= 18) {
        return "Voce é maior de idade" . ' ' . $nome;
    } else {
        return "Voce é menor de idade" . ' ' . $nome;
    }
});

Route::Get('/exercicios36', function (Request $request) {

    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if ($numero1 == 0) {
        return "o primeiro numero é igual a 0";
    } elseif ($numero2 == 0) {
        return "o segundo numero é igual a 0";
    }
    $resultado = $numero1 / $numero2;
    return $resultado;
});

Route::Get('/exercicios37', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 * $numero2 > 100) {
        return "é maior que 100";
    } elseif ($numero1 * $numero2 >= 100) {
        return "o numero é 100";
    } else {
        return "o numero é menor que 100";
    }
});


Route::Get('/exercicios38', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    $resultado = $numero1 + $numero2;
    if ($resultado % 2 == 0) {
        return "a soma dos 2 é par vamos multiplicar";
    } else {
        return $numero1 / $numero2;
    };
});
