<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitemas Topico</title>
    <link rel="stylesheet" href="css/usuario.css">
</head>
<body>

    <!--cabecera-->
 <header>
        <!--seccion-->
    <section>

         <!--imagen del instituto-->
    <div class="img">
        <img src="img/logo_iestp.png" alt="Logo del Instituto">
    </div>

         <!--titulo del instituto-->
    <div class="title">
        <h1>INSTITUTO DE EDUCACIÓN SUPERIOR TECNOLÓGICO PÚBLICO "CIENEGUILLO -SULLANA"</h1>
    </div>
</section>

 </header>



 <!--cuerpo del documento-->
<main>

<h2><ins>REGISTRO DE USUARIO</ins></h2>
<form action="graba.php" method="post">

<div class="primer_bloque">
     <label for="dni">
                <span>DNI:</span>
                <input type="number" name="dni" id="dni">
        </label>

        <label for="apellidos">
                <span>Apellidos:</span>
                <input type="text" name="apellidos" id="apellidos">
        </label>

        <label for="nombres">
                <span>Nombres:</span>
                <input type="text" name="nombres" id="nombres">
        </label>

        <label for="email">
                <span>Email:</span>
                <input type="email" name="email" id="email">
        </label>

        <label for="edad">
                <span>Edad:</span>
                <input type="number" name="edad" id="edad">
        </label>

        <label for="telefono">
                <span>Telefono:</span>
                <input type="tel" name="telefono" id="telefono">
        </label>
</div>
       
<div class="segundo_bloque">

        <label for="peso">
                <span>Peso:</span>
                <input type="number" name="peso" id="peso">
        </label>

        <label for="talla">
                <span>Talla:</span>
                <input type="number" name="talla" id="talla">
        </label>

        <label for="presion_arterial">
                <span>Presion Arterial:</span>
                <input type="number" name="presion_arterial" id="presion_arterial">
        </label>

        <label for="especialidad">
                <span>Especialidad:</span>
                <input type="text" name="especialidad" id="especialidad">
        </label>

        <label for="comentario">
                <span>Comentario:</span>
                <input type="text" name="comentario" id="comentario">
        </label>

</div>


        <input type="submit" value="Enviar" class="enviar">
    </form>

    <hr/>
</main>

</body>
</html>