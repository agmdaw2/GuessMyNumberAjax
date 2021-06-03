<?php
    include_once 'pep/DatabaseOOP.php';
    include_once 'pep/estadistica.php';
    
    $conn = new DatabaseOOP("localhost:3306", "root", "admin", "m07uf3");
    $conn->connect();

    $conn->update(new estadistica($_POST['id'], $_POST['modalitat'], $_POST['nivell'], $_POST['data'], $_POST['intents']));

    // Header para la redireccion
    // Necesita el retardo del sleep para que funcione el update
    sleep(1.5);
    header("Location: ./estadisticas.php");