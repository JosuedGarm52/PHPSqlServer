<?php
class Cconexion{
    
    function ConexionBD(){
        $config = include('config.php');
        $host = $config['host'];
        $dbname = $config['dbname'];
        $username = $config['username'];
        $password = $config['password'];

        try{
            // Usa comillas dobles para permitir la expansión de variables
            $dsn = "sqlsrv:Server=$host;Database=$dbname";
            $conn = new PDO($dsn, $username, $password);
            // Configurar el manejo de errores en PDO
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Se conectó correctamente a la base de datos";
        }
        catch(PDOException $exp){
            echo ("No se logro conectar correctamente con la base de datos:  $dbname, error: $exp");
        }
        catch(Exception $e){
            echo "error desconocido, error: $e";
        }

        return $conn ?? null;
    }
}
?>