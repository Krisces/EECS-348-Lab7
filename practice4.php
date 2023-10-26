<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = $_POST["size"];
    echo "<h2>Multiplication Table for $size</h2>";

    echo "<table>";
    echo "<tr><th>&nbsp;</th>";
    for ($i = 1; $i <= $size; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= $size; $i++) {
        echo "<tr><th>$i</th>";
        for ($j = 1; $j <= $size; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
