<?php
//Conexão com o banco de dados.
require_once 'configBD.php';


function verificar_entrada($entrada){
    //Filtrando a entrada.
    $saida = htmlspecialchars($entrada);
    $saida = stripslashes($saida);
    $saida = trim($saida);
    return $saida; //Retorna saída limpa.
}

//Teste se existe ação.
if(isset($_POST['action'])){
    if($_POST['action'] == 'cadastro'){
        //Teste se ação é igual a cadastro.
        echo "\n<p>cadastro</p>";
        echo "\n<pre>";//Pré-formatar
        print_r($_POST);
        echo "\n</pre>";
    }else if($_POST['action'] == 'login'){
        //Senão, testa se ação é login.
        echo "\n<p>login</p>";
        echo "\n<pre>";//Pré-formatar
        print_r($_POST);
        echo "\n</pre>";
    }else if($_POST['action'] == 'senha'){
        //Senão, testa se ação é recuperar senha.
        echo "\n<p>senha</p>";
        echo "\n<pre>";//Pré-formatar
        print_r($_POST);
        echo "\n</pre>";
    }else{
        header("location:index.php");
    }
}else{  
    //Redirecionando para o Index, negando o acesso a esse arquivo diretamente.
    header("location:index.php");
}