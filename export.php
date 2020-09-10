<?php  
//export.php  
include('conexao.php');

$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM financas";
 $result = mysqli_query($conexao, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>titulo</th>  
                         <th>Valor</th>  
                         <th>Data</th>  
       <th>Postal Code</th>
       <th>Country</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["titulo"].'</td>  
                         <td>'.$row["valor"].'</td>  
                         <td>'.$row["data"].'</td>  
    
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>