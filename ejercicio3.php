<h1>Tarea 3 de switch con POST</h1>
<form action="ejercicio3.php" method="post">
  <p><label>Ingrese su categoria (A,B,C):</label>
    <input type="text" name="cat"></p>
  <p><label>Ingrese su salario actual:</label>
    <input type="number" name="sal" step="any"></p>
    <p><input type="submit" name="enviar" value="Aceptar"></p>
  </form>

<?php
if(isset($_POST['enviar']))
{
  $cat = htmlentities($_POST['cat']);
  $sal = htmlentities($_POST['sal']);
  if(strlen($cat)>0 && strlen($sal)>0)
  {
    switch($cat)
    {
      case 'A':
      $sal_final = $sal * 0.10 + $sal;
      break;
      case 'B':
      $sal_final = $sal * 0.05 + $sal;
      break;
      case 'C':
      $sal_final = $sal * 0.03 +$sal;
      break;
      default:
      echo "<font color='red'>La categoria debe ser una de las tres opciones: A,B,C</font>";
      $sal_final=0;
      break;
    }

    }
    echo <<<_END
     </br></br>Salario final: $sal_final
     _END;

   }else{
     echo "<font color='red'>La cantidad no puede estar vacia</font>";
}

 ?>
