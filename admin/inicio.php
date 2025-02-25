<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="../config/login.php" method="POST">
      <h1>Denxy</h1>
      <h2 class="h3 mb-3 font-weight-normal">Porfavor iniciar sesion</h1>
      <div class="form-floating">
        <input type="email" id="inputcorreo" class="form-control" placeholder="correo"  name="correo">
        <label for="inputcorreo" class="sr-only">correo electronico</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" id="inputpasswords" class="form-control" placeholder="passwords" name="passwords">
        <label for="inputpasswords" class="sr-only">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">iniciar sesion</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2023</p>
        <a href="recovery.php">¿olvidaste tu contraseña?</a>
      </div>
    </form>
    </main>
  </body>
</html>