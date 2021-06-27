<?php

require 'users.php';
$dadosUser= new user();

foreach ($dadosUser->list() as $value) {
    echo 'ID: ' . $value['id'] . '<br> Nome: ' . $value['name'].'<br> Idade: '. $value['age'] .'<br> Email: ' .$value['email'].
    '<br> Telefone: '.$value['fone'].'<br> Senha: '.$value['password'] . '<hr>';
}







