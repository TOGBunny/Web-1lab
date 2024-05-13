<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Максимальні елементи стовпчиків матриці</title>
    <style>
        .container {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <?php


    $matrix = array(
        array(2, 4, 1, 3, 5),
        array(6, 7, 8, 9, 10),
        array(11, 12, 13, 14, 15),
        array(16, 17, 18, 19, 20),
        array(21, 22, 23, 24, 25)
    );


    $maxColumns = array();
    foreach ($matrix as $row) {
        $maxColumn = max($row);
        array_push($maxColumns, $maxColumn);
    }


    echo "<h1>Максимальні елементи стовпчиків матриці:</h1>";
    for ($i = 0; $i < count($maxColumns); $i++) {
        echo "<p>Стовпчик " . ($i + 1) . ": " . $maxColumns[$i] . "</p>";
    }

    ?>
</div>
</body>
</html>
