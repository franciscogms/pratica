<?php 
// Inclui o arquivo de conexão com o banco de dados
require 'config/db.php';

// verifica se o formulário foi enviado utilizando o método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Pega os dados do formulário enviados pelo método POST
    $nome = $_POST['nome'] // Nome digitado pelo usuário
    $email = $_POST['email'] // Email digitado pelo usuário

    // Criptografa a senha antes de salvar no banco de dados
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 
    
    // prepara a consulta a query SQL com parametros (?) para evitar SQL Injection
    $stmt = $conn->prepare(query:"INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");

    // substitui os parâmetros da query pelos valores reais da forma segura
    // "SSS" significa que estamos passando 3 strings 

}












?>