<?php

function login(){
    $logado = true;

if ($logado){
    echo "Painel de Controle";
 } else {
echo "Faça login para acessar o painel";
 }
}
echo login();