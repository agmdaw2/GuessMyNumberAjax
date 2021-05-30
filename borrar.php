<?php
include_once 'DatabaseOOP.php';
    try{
        $conn = new DatabaseOOP("localhost:3306", "root", "admin", "m07uf3");
        $conn->connect();
        $conn->delete($_POST["borrar"]);

        //Header para la redireccion
        header("Location: ./mysql_index.php");
    } catch (Exception $error) {
        echo "connection failed: " . $error->getMessage();
    }
    DatabaseProc::TABLE_END
?>