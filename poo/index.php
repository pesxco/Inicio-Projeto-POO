<?php

include_once("caminhos/caminhos.php");
// aqui ta fazendo da URl e dividindo em um array

$url = $_SERVER['REQUEST_URI'];
$novarota= new rotas(); //cria uma nova rota

$novarota->quebralink($url); //imprime a quebra do link

$novarota->mostrainstancia();

$novarota->validacaminho();
// validação de diretorio
/*
*/
