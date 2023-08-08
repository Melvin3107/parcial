<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        //Asignar a variables locales los datos ingreados en el form
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $mensaje  = $_POST['mensaje'];

        //Despliegue de datos recibidos
        echo "<h2>Datos recibidos:</h2>";
        echo "<br><br>";
        echo "<p>Nombre: $nombre</p><br>";
        echo "<p>Apellido: $apellido</p><br>";
        echo "<p>Correo: $email</p><br>";
        echo "<p>Memsaje: $mensaje</p><br>";
    }
?>



