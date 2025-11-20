<?php
    $nombre="Nicolas";
    $email="Nicolas@iticbcn.cat";
    $codigo="IC07";

    $conexion=mysqli_connect("localhost","root","","base1")
        or die("Problemas con la conexion");
    
        mysqli_query($conexion,
                "insert into alumnos(nombre, mail, codigocurso) "
                ."value('$nombre','$email','$codigo')")
            or die("Problemas en el insert".mysqli_error($conexion));
        
        mysqli_close($conexion);

        echo "El alumno fue dado de alta.";
?>