<html>
<body>

<?php
  $haria = (int)$_GET["name"];
  $numero = rand(1,1000);
  echo("Número corrrecto: " . $numero);
  echo("<br>");
  echo("<br>");
  echo("<hr>");

  if ($haria == $numero){
    echo("Felicidades");
  } elseif ($haria < $numero){
    echo("El número elegido es menor");
    echo("<br>");
    echo("<br>");
  } else{      
   echo("El numero elegido es mayor");
  }
?>
  <hr>
<?php
  if (($haria % 2) == 0){
    echo("Es par");
  } else{
    echo("Es impar");
  }

?>


</body>
</html>