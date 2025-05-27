<h2>Criar conta</h2>
<!-- titulo da pagina exibido para o usuario -->

<form action="process_register.php" method="post">
<!-- inicio do formulario. Os serao enviados para 'process_register.php' via metodo post-->

nome: <input type="text" name="nome" required><br><br>
<!-- campo para o usuario digitar o nome. Obrigatorio (required) -->

email <input type="email" name="email" required><br><br>
<!-- campo para o usuario digitar o email. Obrigatorio (required) --> 

senha: <input type="password" name="senha" required><br><br>
<!-- campo para o usuario digitar a senha. Obrigatorio (required) -->

<button type="submit">Cadastrar</button>

</form>
<!-- fim do formulario -->

<p>ja tem conta?<a href="login.php">Entrar</a></p> 
<!-- se voce ja tem conta pode clicar aqui para entrar no sistema -->