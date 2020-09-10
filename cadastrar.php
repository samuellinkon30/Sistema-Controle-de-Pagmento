<?php include('conexao.php');

$titulo = $_POST['titulo']; 
$valor = $_POST['valor'];



$query_cadastrar = "INSERT INTO financas (titulo,valor,data) VALUES ('$titulo','$valor',now())";


if (mysqli_query($conexao,$query_cadastrar))
 {
	echo "<script> alert('Cadastro Realizado')
	window.location.href='cadastro.php';

	</script>";
	
	
}
else
{
	echo "Erro no Cadastro<br>Contate o WebMaster";

}


