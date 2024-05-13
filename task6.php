<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання на PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Виведення літер до "F"</h1>
<?php
$text = "ABC.DEF"; // Приклад тексту

$index = strpos($text, "F");

if ($index !== false) {
    echo "<p>";
    for ($i = 0; $i < $index; $i++) {
        echo $text[$i];
    }
    echo "</p>";
} else {
    echo "<p>Літера F не знайдена</p>";
}
?>
</body>
</html>
