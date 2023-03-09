<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/styles-login.css">
</head>
<body>

    <ul class="cabezera">
        <li class="active"><a href="../index.php">Inicio</a></li>
        <li><a href="login.php">login</a></li>
    </ul>

<main>

  <div class="contenedor__todo">
      <div class="caja__trasera">
          <div class="caja__trasera-register">
              <h3>¿Aún no tienes una cuenta?</h3>
              <p>Regístrate para que puedas iniciar sesión</p>
              <button onclick="location.href='../registro/registro.php'" id="btn__registrarse">Regístrarse</button>
          </div>
      </div>

      <!--Formulario de Login y registro-->
      <div class="contenedor__login-register">
          <!--Login-->
          <form action="" class="formulario__login">
              <h2>Iniciar Sesión</h2>
              <input type="text" placeholder="Correo Electronico">
              <input type="password" placeholder="Contraseña">
              <p>Recuperar <a href="./recuperar.php">contraseña</a></p>
              <button>Entrar</button>
          </form>

      </div>
  </div>

</main>