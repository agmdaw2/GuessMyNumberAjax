<?php
include_once 'pep/DatabaseOOP.php';

    try{
        $conn = new DatabaseOOP("localhost:3306", "root", "admin", "m07uf3");
        $conn->connect();

        //funcion borrar
        $conn->delete($_POST["borrar"]);

        //Header para la redireccion
        header("Location: ./estadisticas.php");
    } catch (Exception $error) {
        echo "connection failed: " . $error->getMessage();
    }
    DatabaseProc::TABLE_END
?>