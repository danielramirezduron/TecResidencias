<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Edgar Escobedo">
    <meta name="viewport" content="width = device-width">
    <link rel="stylesheet" href="../css/preInscripcion.css">
    <title>Residencias | Preinscripción</title>
  </head>
  <body>

    <!--Franja en donde aparece el nombre y el logo del tec-->
    <header>
      <div class="container">
        <div id="branding">
          <h1>Instituto Tecnológico de Saltillo</h1>
        </div>
        <div id="logoTec">
          <img src="../img/itsicono3.png">
        </div>
      </div>
    </header>

    <!--En esta parte se verá el nombre del usuario así como la fecha del sistema-->

    <div class="usuarioYFecha">
      <h1>Hola</h1>
    </div>


    <!--Empieza el form para poder ser llenado-->
    <div class="container"><!--Se pone en container para que vaya centrado-->
      <div class="cuadroForm">
        <form action="../scripts/enviarPreInscripcion.php" method="post">

          <h2>Formulario de PreInscripción</h2>
          <p>Verifica que la información sea correcta.</p>
          <table class="tablaDeContenido">
            <tr>
              <td class="tdIzquierdo"> <label>Número de Control: </label> </td>
              <td> <input required class="txtField" readonly='read_only' type="text" name="numeroDeControl" value=<?php session_start(); echo $_SESSION['numeroDeControl']; ?>> </td>
            </tr>

            <tr>
              <td class="tdIzquierdo"><label>Nombre: </label></td>
              <td><input required class="txtField" readonly='read_only' type="textArea" name="nombreUsuario" value=<?php session_start(); echo '"'; echo $_SESSION['nombre']; echo '"';?>></td>
            </tr>

            <tr>
              <td class="tdIzquierdo"><label>Clave plan de estudios: </label></td>
              <td><input required class="txtField" readonly='read_only' type="text" name="semestre" value=<?php session_start(); echo $_SESSION['planDeEstudios'];?>></td>
            </tr>

            <tr>
              <td class="tdIzquierdo" > <label>Carrera: </label> </td>
              <td> <input required class="txtField" readonly='read_only' type="text" name="carrera" value=<?php session_start(); echo '"'.$_SESSION['carrera'].'"'; ?>> </td>
            </tr>

            <tr>
              <td class="tdIzquierdo"><label>Correo Electrónico: </label></td>
              <td><input required class="txtField" type="email" name="email" value=<?php session_start(); echo $_SESSION['email'] ?>></td>
            </tr>

            <tr>
              <td class="tdIzquierdo"><label>Domicilio Particular: </label></td>
              <td> <input required type="text" name="domicilio" value=<?php session_start(); echo '"'; echo $_SESSION['domicilio']; echo '"'; ?>> </td>
            </tr>

            <tr>
              <td class="tdIzquierdo" > <label>Ciudad: </label> </td>
              <td> <input required type="text" name="ciudad" value=<?php session_start(); echo '"'.$_SESSION['ciudad'].'"'; ?> </td>
            </tr>

            <tr>
              <td class='tdIzquierdo'> <label>Fecha:</label> </td>
              <!--Se le pone como valor por defecto la fecha actual-->
              <td> <input class="date" required type="date" name="fecha" value="<?php echo date("Y-m-d"); ?>"> </td>
            </tr>
          </table> <!--Termina la tabla para acomodar los labels y txtFields-->

          <br>

          <label>¿Deseas ingresar al programa de residencias en el siguiente semestre?</label> <br>
          <label>
            <input type='radio' name='radioSiNo' value='true'>Si
          </label>
          <label>
            <input type='radio' name='radioSiNo' value='false' checked>No
          </label>

          <br>
          <!--Aquí termina el form, termina con el botón de enviar-->
          <button type="submit" name="guardar">Guardar y Enviar</button>
        </form>
      </div>
    </div>

  </body>
</html>
