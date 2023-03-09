<?php
include "../Conexion.php";
$db = connect();
$query = $db->query("select * from paises");
$countries = array();
while ($r = $query->fetch_object()) {
  $countries[] = $r;
}
;


?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="../assets/css/styles-registro.css?uuid=<?php echo uniqid();?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  </head>
  <body>

    <ul class="cabezera">
      <li class="active"><a href="../index.php">Inicio</a></li>
      <li><a href="../login/login.php">login</a></li>
  </ul>
    <main>
      <div class="contenedor__todo">
        <div class="caja__trasera">
          <div class="caja__trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar en la página</p>
            <button
              onclick="location.href='../login/login.php'"
              id="btn__iniciar-sesion"
            >
              Iniciar Sesión
            </button>
          </div>
        </div>

        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">
          <!--Register-->
          <form method="post" class="formulario__register">
            <h2>Regístrarse</h2>
            <input
              type="text"
              placeholder="Apellido paterno"
              name="apPaterno"
              minlength="1"
              maxlength="20"
              required
            />
            <input
              type="text"
              name="apMaterno"
              placeholder="Apellido materno"
              minlength="1"
              maxlength="20"
              required
            />
            <input
              type="text"
              name="nombre"
              placeholder="Nombres"
              minlength="1"
              maxlength="30"
              required
            />
            <fieldset>
              <label for="fecha">Fecha de nacimiento</label>
              <input name="fechaNacimiento" id="fecha" type="date" required />
            </fieldset>
            <select id="continente_id" name="continente_id" required>
              
              <option value="">--Selecciona un pais--</option>
              <?php foreach ($countries as $c): ?>
              <option value="<?php echo $c->id; ?>"><?php echo $c->nombre; ?></option>
          <?php endforeach; ?>
            </select>
            <select id="pais_id" name="pais_id" required>
              <option>--Selecciona un estado</option>
            </select>
            <select id="ciudad_id" name="ciudad_id" required>
              <option>--Selecciona un municipio--</option>
            </select>
            <input
              type="tel"
              name="telefono"
              placeholder="Numero"
              minlength="10"
              maxlength="10"
              required
            />
            <input type="email" placeholder="Correo elctronico" name="email" required />
            <input
            name="password"
              type="password"
              placeholder="Contraseña"
              minlength="10"
              maxlength="30"
              required
            />
            <input class="boton" type="submit" name="registrar" value="registrar">
          </form>
          <?php
            include('registrar.php');
          ?>
        </div>
      </div>
    </main>
    <script type="text/javascript">
  $(document).ready(function(){
    $("#continente_id").change(function(){
      $.get("Paises.php","continente_id="+$("#continente_id").val(), function(data){
        $("#pais_id").html(data);
        console.log(data);
      });
    });

    $("#pais_id").change(function(){
      $.get("Ciudades.php","pais_id="+$("#pais_id").val(), function(data){
        $("#ciudad_id").html(data);
        console.log(data);
      });
    });
  });
</script>
  </body>
</html>
