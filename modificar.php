<?php
    include_once 'pep/DatabaseOOP.php';
    include_once 'pep/estadistica.php';

    $conn = new DatabaseOOP("localhost:3306", "root", "admin", "m07uf3");
    $conn->connect();

    $tabla = $conn->findById($_POST["encontrar"]);
    echo "<form method='POST'>";
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
        echo "<td style='border:1px solid blue;background:silver;'>";
        if($contador==0){
            echo "<input type='hidden' name='id' value='".$tabla[$contador]."'>";
            echo $tabla[$contador];
        }
        if($contador==1){
            echo "<select name='modalitat'>";
            if($tabla[$contador]=='Huma'){
                echo "<option value='Huma' selected>Huma</option>";
                echo "<option value='Maquina'>Maquina</option>";
            }
            if($tabla[$contador]=='Maquina'){
                echo "<option value='Huma'>Huma</option>";
                echo "<option value='Maquina' selected>Maquina</option>";
            }
        }
        if($contador==2){
            echo "<input name='nivell' type='number' min='1' max='3' value ='".$tabla[$contador]."'></input>";
        }
        if($contador==3){
            echo "<input name='data' type='datetime' value ='".$tabla[$contador]."'></input>";
        }
        if($contador==4){
            echo "<input name='intents' type='number' min='1' value ='".$tabla[$contador]."'></input>";
        }

        echo "</td>";
    }
    echo "</tr>";
    echo "</table>";
    echo "<input type='submit' value='Modificar' formaction='./modif.php'>";
    echo "</form>";

    echo "<form name='volver' method='post' action='estadisticas.php'>
            <input type='submit' value='Volver a inicio'>
        </form>";
?>