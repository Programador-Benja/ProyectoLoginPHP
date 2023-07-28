<?php
    include("con_bd.php");

    if (isset($_POST['registrar'])) {
        if (strlen($_POST['nombre']) > 1 && strlen($_POST['apellido'] > 1) &&
            strlen($_POST['correo']) > 1 && strlen($_POST['password']) > 1 &&
            strlen($_POST['passwordConfirm']) > 1) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo  = $_POST['correo'];
            $pass = $_POST['password'];
            $passConfirm = $_POST['passwordConfirm'];
            $fecha_reg = date("d/m/y");
            if ($pass == $passConfirm) {
                $consulta = "INSERT INTO datos(nombre, apellido, correo, contraseña, fecha_registro) VALUES ('$nombre', '$apellido','$correo','$pass','$fecha_reg')";
                $resultado = mysqli_query($conex, $consulta);
                if ($resultado) {
                    ?>
                    <h3>Te has logueado correctamente</h3>
                    <?php
                }
            }  else {
                ?>
                <h3>Las contraseñas no coinciden</h3>
                <?php
            }
        } else {
            ?>
            <h3>Complete los campos</h3>
            <?php
        }
    }
?>