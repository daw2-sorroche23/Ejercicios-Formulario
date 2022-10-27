<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$valor4 = $_POST['valor4'];
?>

<html>
 <head>
  <title>Select Field con los valores que has puesto</title>
 </head>
 <body>
  <form action="N4P112form.php" method="post">
   <table>
     <td>
      <select name="Valores">
       <option value="valor1"><?php echo $valor1?></option>
       <option value="valor2"><?php echo $valor2?></option>
       <option value="valor3"><?php echo $valor3?></option>
       <option value="valor4"><?php echo $valor4?></option>
      </select>
     </td>
      <input type="submit" name="submit" value="Submit" />
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>