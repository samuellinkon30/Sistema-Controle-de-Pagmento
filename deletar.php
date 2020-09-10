
<?php 
include('conexao.php');
if (isset($_POST['remover'])) 
			{

			$valor_remover_aux = $linha['titulo'];
			$query_remover = 'DELETE FROM "financa" WHERE titulo = "$valor_remover_aux";';
			?>
				<script>
					console.log('<?php echo $query_remover ?>');
				</script>
			<?php

				if (mysqli_query($conexao,$query_remover)) {
				
				echo "<script> alert('Removido.')
				window.location.href='lista-filtro.php';
		
				</script>";	
				
				}
				else
				{}
			}