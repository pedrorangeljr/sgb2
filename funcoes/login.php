<?php
require '../conexao/conexao.php';
try {

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha');

    if ($email && $senha) {

        $sql = $pdo->prepare("SELECT * FROM login WHERE email= :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
        
        if($sql->rowCount() > 0) {

            header("Location: ../src/views/paginas/cadastrarAlunos.php");
        }else {

            header("Location: ../index.php");
            exit;
        }

    } else {

        header("Location: ../index.php");
        exit;
    }
    
} catch (Exception $e) {
    
    echo $e->getMessage();
}
//require '../src/views/paginas/cadastrarAlunos.php';