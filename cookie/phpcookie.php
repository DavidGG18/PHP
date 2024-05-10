<?php

// Verifica se os campos foram preenchidos
if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['idade'])) {

    // Obtém os valores dos campos
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    
    // Define os cookies com os valores fornecidos
    setcookie('nome', $nome, time() + (86400 * 30), '/'); // 86400 = 1 dia
    setcookie('email', $email, time() + (86400 * 30), '/');
    setcookie('idade', $idade, time() + (86400 * 30), '/');

    // Redireciona de volta para o formulário
    header("Location: Formulario.html");
    exit;
} else {
    echo "Todos os campos devem ser preenchidos!";
}
?>


<!-- 
http://localhost/Formulario.html
 -->