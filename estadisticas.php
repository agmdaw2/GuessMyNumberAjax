<?php
    include_once 'pep/DatabaseProc.php';
    include_once 'pep/DatabasePDO.php';
    include_once 'pep/DatabaseOOP.php';
    include_once 'pep/EstadistiquesRow.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        window.onload = function(){
            showDataBase("ninguno");
        };

        function showDataBase(txt){
            if(txt == ''){
                document.getElementById("txt").innerHTML="";
                return;
            }else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState === 4 && this.status === 200){
                        document.getElementById("txt").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "ajax.php?modalidad=" + txt, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>

    <h1>Estadisticas de GuessMyNumber</h1>
    <h2>Modificacion tabla</h2>
        <div id="modificadores" style="display:none">
            <form action="./estadisticas.php" method="post">
                <table>
                    <tr>
                        <td>FindById:</td>
                        <td><input type="number" placeholder="id" name="encontrar"></td>
                        <td><input type="submit" value="DO IT!" formaction="./encontrar.php"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div>
            <table>
                <tr>
                    <td><button id="abrir" type="button" onclick="cargarModificadores(true)">Abrir</button></td>
                    <td><button id="cerrar" type="button" onclick="cargarModificadores(false)" style="display:none">Cerrar</button></td>
                </tr>
            </table>
        </div>

    <?php
        //CONEXION BBDD mediante OOP
        try{
            $conn = new DatabaseOOP("localhost:3306", "root", "admin", "m07uf3");
            $conn->connect();

            // SELECTOR MODALIDAD
            echo "<h2>Filtro Tabla</h2>";
            $modalidad = $conn->getTypes();
            echo "Filtrar por modalidad: ";
            echo "<select onchange='showDataBase(this.value)'>";
            echo "<option value='ninguno'>Todos</option>";
            for ($i = 0; $i < count($modalidad); $i++) {
                echo "<option value='" . $modalidad[$i][0] . "'>" . $modalidad[$i][0] . "</option>";
            }
            echo "</select>";

            // PRINT TABLA
            echo "<h2>Tabla Estadisticas</h2>";


            echo "<div id='txt'></div>";
        
        } catch (Exception $error) {
            echo "connection failed: " . $error->getMessage();
        }
        DatabaseProc::TABLE_END
    ?>
    <br>
    <form name="volver" method="post" action="añadir.php">
            <input type="submit" value="Añadir uno nuevo">
    </form>
    <br>
    <form name="volver" method="post" action="index.php">
            <input type="submit" value="Volver a inicio">
    </form>
    <script src="js/funciones.js"></script>
</body>
</html>