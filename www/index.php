<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <br>
 <h1> Juego de números</h1>
  
<br><br>
  <form class="form-inline" action="FORMULARIO.php" method="get">
    <div class="form-group mb-2">
      <label for="staticEmail2" class="sr-only">Email</label>
      <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Numero elegido : ">
      <br>
      <br>
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="inputPassword2" class="sr-only">Introduce el numero</label>
      <input type="text" class="form-control" id="name"  name = "name" >
    </div>
    <button type="submit" class="btn btn-primary mb-2">Jugar</button>
  </form>



</body>
</html>