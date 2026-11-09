<?php
// 1. Исходные данные для вычислений (хранятся прямо в файле)
$number1 = 10;
$number2 = 20;
$number3 = 30;

// 2. Алгоритм вычисления среднего арифметического
$average = ($number1 + $number2 + $number3) / 3;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вычисление среднего арифметического</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 400px; }
        h1 { color: #333; font-size: 20px; }
        p { font-size: 16px; color: #555; }
        .result { font-weight: bold; color: #2c3e50; }
    </style>
</head>
<body>

<div class="container">
    <h1>Результат вычислений</h1>
    <p>Числа: <?php echo "$number1, $number2, $number3"; ?></p>
    <p class="result">Среднее арифметическое: <?php echo $average; ?></p>
</div>

</body>
</html>