<?php 
include('conexao.php');

?>

<div class="box-search">

<form method="POST" action="pesquisa.php">
	<input type="text" name="nome_pagamento">
	<button type="submit" name="verificar_pesquisa" >Pesquisar</button>
</form>


<?php

if (isset($_POST['verificar_pesquisa'])) {


if (isset($_POST['nome_pagamento'])) {

$nome_pesquisa=	$_POST['nome_pagamento'];

$term = mysqli_real_escape_string($conexao,$nome_pesquisa);    

$sql = "SELECT * FROM  `financas` WHERE titulo = '$term';";

 $result = mysqli_query($conexao, $sql);

 if(mysqli_num_rows($result) > 0)
 {
 while ($row = mysqli_fetch_array($result)){ 
echo '<br /> Titulo: '.$row['titulo']; 
echo '<br /> Valor: '.$row['valor']; 
echo '<br /> Data: '.$row['data'];  
}
 }
 else
 {
 		echo 'Nenhuma dado encontrado';
 }
}
}
?>

</div>

<style>
	.box-search
	{
		    position: absolute;
    top: 47%;
    left: 50%;
    margin: 10px;
    transform: translate(-50%, -48%);
    padding:10px;
	}
</style>