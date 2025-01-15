<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion de php con sql server</title>
</head>
<body>
    <?php 
        include_once("conexion.php");
        $conexion = new Cconexion();
        $conexion->ConexionBD(); // Llamar al método desde la instancia 
    ?>
</body>
</html>