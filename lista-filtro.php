
<?php

include('conexao.php');

$query_filtro = "SELECT * from financas";

$resultado = mysqli_query($conexao, $query_filtro);

?>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="box-global">

<div class="container mt-3">
  <h2>Filterable Table</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Valor</th>
        <th>Data</th>
        <th>Remover</th>
      </tr>
    </thead>
    <tbody id="myTable">
    	<?php

	if(mysqli_num_rows($resultado) > 0 ){

		while ($linha = mysqli_fetch_array ($resultado)) 
		{
				
			echo "
			<tr>
        	<td>".$linha['titulo']."</td>
        	<td>".$linha['valor']."</td>
        	<td>".$linha['data']."</td>
        	<td>
        	 <form ation='deletar.php' method='POST'>
  			 <button type=submit'name='remover'>remover</button>
  			 </form>";
	
				
  			echo '</td></tr>';
		}
	}

?>
    </tbody>
  </table>


  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>