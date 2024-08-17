<?php

try {

    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'senha');

    if ($email && $senha) {

    } else {

        header("Location: ../public/index.php");
        exit;
    }

    echo "login: " . $login;
    echo "<br>";
    echo "senha: " . $email;
    
} catch (Exception $e) {
    
    echo $e->getMessage();
}

//require './conexao/conexao.php';
