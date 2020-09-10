<?php include('conexao.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>


	<div class="txt"><h2>Bem Vindo</h2></div>
	<div class="box">


		<button onclick="location.href='cadastro.php'">Cadastro</button>

		<button onclick="location.href='painel.php'">Ver DataBase</button>

		<button onclick="location.href='pesquisa.php'">Pesquisar</button>

	</div>
		<div style="justify-content: center;
    margin: 2em auto;
    position: absolute;
    top: 58%;
    left: 50%;
    transform: translate(-50%, -50%);">
			
			<form method="post" action="export.php"> 

		<input type="submit" name="export" value="Exportar"/> 

		</form>
		
		</div>


</body>
</html>

<style>
	.txt
	{
		text-align: center;
		position: absolute;
	        top: 50%;
   			 left: 50%;
    		transform: translate(-50%, -50%);
	}
	.box
	{
		display: flex;
	
	    justify-content: center;
	    margin: 2em auto;
	    position: absolute;
	        top: 50%;
   			 left: 50%;
    		transform: translate(-50%, -50%);
	}
	.box button
	{
		justify-content: space-between;
    margin-left: 20px;
    margin-top: 20px;
	}
</style>



