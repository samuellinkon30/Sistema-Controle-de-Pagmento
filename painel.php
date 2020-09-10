
<?php include('conexao.php');
$query_db = "select titulo,valor,data from financas ORDER BY data";


$result = mysqli_query($conexao, $query_db);

$query_valor = "select valor from financas";

$result_valor = mysqli_query($conexao, $query_valor);



?>

<div class="box-global">

	<?php

	if(mysqli_num_rows($result) > 0 ){

		while ($row = mysqli_fetch_array ($result)) 
		{

			$aux = $row['data'];

			$aux2=	date("d/m/Y", strtotime($aux));


			echo "<div class='box'>

			<h3>Titulo: " . $row['titulo'] . "</h3>
			<h3>Valor: R$" . $row['valor'] . "</h3>
			<h3>Data: " . $aux2 . "</h3>
			</div>";

		}
	}
	?>
</div>

<div>
	

	<?php 
	if(isset($_POST['button1'])) { 
		
		$aux_3=0;

		if(mysqli_num_rows($result_valor) > 0 ){

			while ($row = mysqli_fetch_array ($result_valor)) 
			{
				$aux_3 += $row['valor'];		
			}
			echo "Total: ".$aux_3;
		}		
	}
	?>
</div>



<div>
	<h3>Remover Dados</h3>
	<form method="post" > 
		<h5>Inisira o titulo da cobrança</h5>
		<input type="name" name="valor_remover" /> 
		<input type="submit" name="botao_remover">

	</form>

	<?php 
	if(isset($_POST['button1'])) { 
		
		$aux_3=0;

		if(mysqli_num_rows($result_valor) > 0 ){

			while ($row = mysqli_fetch_array ($result_valor)) 
			{
				$aux_3 += $row['valor'];		
			}
			echo "Total: ".$aux_3;
		}		
	}
	?>

	<?php 

	if(isset($_POST['botao_remover'])) { 
		
		if (isset($_POST['valor_remover'])) 
		{

			$valor_remover_aux=$_POST['valor_remover'];

			$query_remover = "DELETE FROM `financas` WHERE titulo = '$valor_remover_aux';";

			if (mysqli_query($conexao,$query_remover)) {
			
			echo "<script> alert('$valor_remover_aux foi removido.')
			window.location.href='painel.php';
	
			</script>";	

			
			}
			echo "<script> alert('Erro ao remover: $valor_remover_aux')</script>";		

		}
	}
	?>
</div>

<div>
	<form action="" method="POST">
		<button type="submit">Exportar</button>
	</form>
	</div>

<style>
	.box 
	{
		width: 100%;
		width:23%;

	}
	.box-global {
		display: flex;
		justify-content: space-evenly;
	}

	.box { background: green; }
	.box:nth-child(odd) { background: red; }
</style>
