<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias)


$nome = 'Eduardo';
$idade = 8;

//VAR_dunp($nome);
//VAR_dunp($idade);

if ($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++ ){
        if($categorias[$i] == 'infantil'){
            echo "O Nadador ".$nome. "Compete na categoria infantil";
        }
    }
}else if( $idade >= 13 && $idade <= 18){
    echo 'adolescente';
}else{
    echo 'adulto';
}