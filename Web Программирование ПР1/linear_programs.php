<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лінійні програми</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h1, h2 {
            color: #2c3e50;
        }
        form {
            margin-bottom: 20px;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        h2 {
            text-align: center;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            font-size: 16px;
            margin-top: 10px;
        }
        .links {
            margin-top: 30px;
        }
        .links a {
            display: block;
            margin-bottom: 10px;
            color: #007BFF;
            text-decoration: none;
            text-align: center;
            font-size: 18px;
        }
        .links a:hover {
            text-decoration: underline;
            color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Лінійні програми</h1>

    <!-- Форма для завдання 1a -->
    <h2>Завдання 1a: Збільшити число вдвічі</h2>
    <form method="POST">
        <label for="a">Введіть число a:</label>
        <input type="number" name="a" id="a" required>
        <button type="submit">Обчислити</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["a"])) {
        $a = $_POST["a"];
        $b = $a * 2;
        echo "<p>Результат: b = $b</p>";
    }
    ?>

    <!-- Форма для завдання 1b -->
    <h2>Завдання 1b: Зменшити число в 3 рази та додати 1</h2>
    <form method="POST">
        <label for="c">Введіть число c:</label>
        <input type="number" name="c" id="c" required>
        <button type="submit">Обчислити</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["c"])) {
        $c = $_POST["c"];
        $d = ($c / 3) + 1;
        echo "<p>Результат: d = $d</p>";
    }
    ?>

    <!-- Форма для завдання 1c -->
    <h2>Завдання 1c: Площа рівностороннього трикутника</h2>
    <form method="POST">
        <label for="side">Введіть довжину сторони трикутника (a):</label>
        <input type="number" name="side" id="side" required>
        <button type="submit">Обчислити</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["side"])) {
        $side = $_POST["side"];
        $area = (1/4) * $side * sqrt(3);
        echo "<p>Площа трикутника: S = $area</p>";
    }
    ?>

    <!-- Форма для завдання 1d -->
    <h2>Завдання 1d: Максимальне та мінімальне число з трьох</h2>
    <form method="POST">
        <label for="num1">Число 1:</label>
        <input type="number" name="num1" id="num1" required><br>
        <label for="num2">Число 2:</label>
        <input type="number" name="num2" id="num2" required><br>
        <label for="num3">Число 3:</label>
        <input type="number" name="num3" id="num3" required><br>
        <button type="submit">Знайти</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $max = max($num1, $num2, $num3);
        $min = min($num1, $num2, $num3);
        echo "<p>Максимальне число: $max</p>";
        echo "<p>Мінімальне число: $min</p>";
    }
    ?>
    <div class="links">
        <h2>Посилання на завдання:</h2>
        <a href="index.php">Головна сторінка</a>
        <a href="loop_programs.php">Програми з повторенням</a>
        <a href="conditional_programs.php">Умовні конструкції</a>
    </div>
</body>
</html>