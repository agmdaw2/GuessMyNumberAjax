<?php
    include_once 'pep/DatabasePDO.php';

    $conn = new DatabasePDO("localhost:3306", "root", "admin", "m07uf3");
    $conn->connect();

    $conn->insert($_POST['modalitat'], $_POST['nivell'], $_POST['intents']);

    sleep(1.5);
    header("Location: ./estadisticas.php");
?>