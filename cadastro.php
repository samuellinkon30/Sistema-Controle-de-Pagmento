<?php
include('conexao.php');

?>


<div>
	<h2>Cadastrar novo Investimento </h2>
	</div>

<div>
	<form action="cadastrar.php" method="POST">
		<input type="text" name="titulo" placeholder="Titulo">
		<input type="number" name="valor" placeholder="R$ XX,XX">
		<button type="submit">Enviar</button>
	</form>
</div>
