<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обчислення виразу</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .result {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 5px;
        }

        p {
            margin: 0;
        }
    </style>
</head>
<body>
<h1>Обчислення значення виразу</h1>

<div class="result">
    <h2>Результат:</h2>
    <p><?php

        $a = 1.19; // Використовуємо стале значення a=1.19

        $tanSinA = tan(sin($a));
        $sinTanA = sin(tan($a));
        $denominator = pow($a, 2) * pow(exp(1), 2);
        $result = ($tanSinA + $sinTanA) / $denominator;

        echo $result;

        ?></p>
</div>
</body>
</html>