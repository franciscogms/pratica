<?php
 if(isset($_GET['sucesso'])) {
    // verifica se há o parametro 'sucesso' na URL (ex: login.php?sucesso=1)
    // Se existir, mostra uma mensagem de sucesso
    echo "<p style='color: green,'>Conta criada com sucesso! faça login.</php>";

 }
 if (isset($_GET['erro'])) {
    // se o erro for 'senha', mostra mensagem de erro para incorreta 
    if ($_GET['erro']=='senha') {
 echo "<p style='color: red;'> senha incorreta. </p>";
    } elseif ($_GET['erro']) {

echo "<p style='color': red;'> Email não encontrado.</p>";
    }
}
?>
<h2>Login</h2>
<!--título da pagina -->

<form action="process_login.php" method="POST">
<!-- ínicio do formulário. ao envia, os dados irão para 'process_login.php'-->

Email: <input type="email" name="email" required> <br><br>
<!-- campo de entrada para email. Obrigatorio (required) -->
 
senha: <input type="password" name="senha" required> <br><br>
<!-- campo de entrada para a senha. os caracteres sao ocultos. Obrigatorios -->
 
<button type="submit">entrar</button>
<!--botão que envia o formulário para ser processado -->
</form>
<!-- Fim do formulário -->
 <ph> Não tem conta? <a href="register.php"> Criar conta </a></ph>
 <!-- Link para redirecionar à tela de cadastro caso o usuário ainda não tenha conta -->
  