<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Розрахунок R = M - L</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        .result {
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Розрахунок R = M - L</h1>

    <?php

    $A = [1, 2, -3, 4, -5, 6, 7];
    $B = [-1, -2, 3, 4, -5, 6, 7];


    $sumA = 0;
    foreach ($A as $value) {
        if ($value > 0) {
            $sumA += $value;
        }
    }


    $sumB = 0;
    foreach ($B as $value) {
        if ($value > 0) {
            $sumB += $value;
        }
    }

    // Розрахунок R
    $R = $sumA - $sumB;


    echo "<div class=\"result\">R = $R</div>";
    ?>
</div>
</body>
</html>

