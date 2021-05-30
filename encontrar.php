<?php
    include_once 'pep/DatabaseOOP.php';

    $conn = new DatabaseOOP("localhost:3306", "root", "admin", "m07uf3");
    $conn->connect();
    $tabla = $conn->findById($_POST["encontrar"]);

    echo "<table>";
    echo "<tr>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Modalitat</th>";
    echo "<th>Nivell</th>";
    echo "<th>Data</th>";
    echo "<th>Intents</th>";
    echo "";
    echo "</tr>";
    for($contador=0; $contador<count($tabla); $contador++){
        echo "<td style='border:1px solid blue;background:silver;'>" . $tabla[$contador] . "</td>";
    }
    echo "</tr>";
    echo "</table>";
    echo "<form name='volver' method='post' action='estadisticas.php'>
    <input type='submit' value='Volver a inicio'></form>";
 
?>