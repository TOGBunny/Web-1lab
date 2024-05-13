<?php
$css = <<<CSS
body {
  font-family: sans-serif;
  margin: 0;
  padding: 20px;
}

h1 {
  text-align: center;
}

p {
  font-weight: bold;
}

#result {
  color: blue;
}

.input-form {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.input-label {
  margin-bottom: 5px;
}

.input-field {
  padding: 5px;
  border: 1px solid #ccc;
}

.submit-button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}
CSS;

function is_descending_array($array) {
    if (count($array) <= 1) {
        return true;
    }

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $array[$i - 1]) {
            return false;
        }
    }

    return true;
}


$array = [];


if (isset($_POST['submit'])) {

    $inputArrayString = $_POST['arrayInput'];


    if (strlen($inputArrayString) > 0) {
        $inputArray = explode(',', $inputArrayString);
        foreach ($inputArray as $value) {
            if (!is_numeric($value)) {
                $errorMessage = "Введіть масив чисел, розділених комою.";
                break;
            }

            $array[] = (int) $value;
        }
    } else {
        $errorMessage = "Введіть масив чисел, розділених комою.";
    }
}


if (count($array) > 0) {
    $result = (is_descending_array($array)) ? "Масив упорядкований за спаданням" : "Масив не упорядкований за спаданням";
} else {
    $result = "Введіть масив чисел для перевірки.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Масив за спаданням</title>
    <style>
        <?php echo $css; ?>
    </style>
</head>
<body>
<h1>Перевірка упорядкування масиву</h1>
<p>Введіть масив чисел, розділених комою:</p>

<form method="post" class="input-form">
    <label for="arrayInput" class="input-label">Вхідний масив:</label>
    <input type="text" id="arrayInput" name="arrayInput" class="input-field" value="<?php echo isset($inputArrayString) ? $inputArrayString : ''; ?>">

    <?php if (isset($errorMessage)) { ?>
        <p style="color: red;"><?php echo $errorMessage; ?></p>
    <?php } ?>

    <input type="submit" name="submit" value="Перевірити" class="submit-button">
</form>

<p>Результат: <span id="result"><?php echo $result; ?></span></p>
</body>
</html>


