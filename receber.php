<?php
# Back-End

// Verifica se o método GET está enviando dados
if(isset($_GET['nome'])){
    echo "<h1>Envio de dados método <em>GET</em></h1>";

    echo "\n<pre>\n";
    print_r($_GET); #ARRAY
    echo "\n</pre>\n";

    print("\n<br><strong>Nome: </strong>");
    print("$_GET[nome]");

    print("\n<br><strong>E-mail: </strong>");
    print("$_GET[email]");

    print("\n<br><strong>Senha: </strong>");
    print("$_GET[senha]");

    print("\n<br><strong>Data de Nascimento: </strong>");
    print("$_GET[data]");
}
// Verifica se o métodocPOST está enviando os dados
if(isset($_POST['nome'])){
    echo "<h1>Envio de dados método <em>POST</em></h1>";

    echo "\n<pre>\n";
    print_r($_POST); #ARRAY
    echo "\n</pre>\n";

    print("\n<br><strong>Nome: </strong>");
    print("$_POST[nome]");

    print("\n<br><strong>E-mail: </strong>");
    print("$_POST[email]");

    print("\n<br><strong>Senha: </strong>");
    print("$_POST[senha]");

    print("\n<br><strong>Data de Nascimento: </strong>");
    print("$_POST[data]");
}