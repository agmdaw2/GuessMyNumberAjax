<?php
    include_once 'pep/DatabasePDO.php';


    echo "<form method='POST'>";
    echo "<table>";
    echo "<tr>";
    echo "<tr>";
    echo "<th>Modalitat</th>";
    echo "<th>Nivell</th>";

    echo "<th>Intents</th>";
    echo "";
    echo "</tr>";
    for($contador=0; $contador<3; $contador++){
        echo "<td style='border:1px solid blue;background:silver;'>";
        if($contador==0){
            echo "<select name='modalitat'>";
            echo "<option value='Huma'>Huma</option>";
            echo "<option value='Maquina'>Maquina</option>";
        }
        if($contador==1){
            echo "<input name='nivell' type='number' min='1' max='3'></input>";
        }
        if($contador==2){
            echo "<input name='intents' type='number' min='1'></input>";
        }

        echo "</td>";
    }
    echo "</tr>";
    echo "</table>";
    echo "<input type='submit' value='Añadir'formaction='./añadirdos.php'>";
    echo "</form>";

    echo "<form name='volver' method='post' action='estadisticas.php'>
            <input type='submit' value='Volver a inicio'>
        </form>";
?>