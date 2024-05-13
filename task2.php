<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Числові операції</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 200px;
            padding: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
<h1>Числові операції</h1>
<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
    <label for="number">Введіть число:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Обчислити</button>
</form>

<?php
if (isset($_POST['number'])) {
    $number = (int) $_POST['number'];

    $numberOfDigits = count(str_split($number));
    $sumOfDigits = 0;
    $hasThree = false;

    for ($i = 0; $i < $numberOfDigits; $i++) {
        $digit = $number % 10;
        $sumOfDigits += $digit;

        if ($digit === 3) {
            $hasThree = true;
            break;
        }

        $number = (int) ($number / 10);
    }

    echo "<p>Кількість цифр: $numberOfDigits</p>";
    echo "<p>Сума цифр: $sumOfDigits</p>";
    echo "<p>Число містить цифру '3': " . ($hasThree ? "Так" : "Ні") . "</p>";
}
?>
</body>
</html>