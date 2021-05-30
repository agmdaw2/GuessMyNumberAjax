
<?php
    $modalidad = $_GET['modalidad'];

    $conn = mysqli_connect("localhost:3306", "root", "admin", "m07uf3");
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($con));
    }

    if($modalidad != "ninguno"){
        $sql = "SELECT * FROM estadistiques WHERE modalitat = '" . $modalidad . "'";
    }else{
        $sql = "SELECT * FROM estadistiques";
    }
    
    $result = mysqli_query($conn, $sql);

    echo "<table id='ta'>
            <tr>
            <th>Id</th>
            <th>Modalitat</th>
            <th>Nivell</th>
            <th>Data_Partida</th>
            <th>Intents</th>
            </tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['modalitat'] . "</td>";
        echo "<td>" . $row['nivell'] . "</td>";
        echo "<td>" . $row['data_partida'] . "</td>";
        echo "<td>" . $row['intents'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
?>

