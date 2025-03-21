<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Умовні конструкції</title>
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
        input[type="number"], input[type="text"], input[type="password"] {
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
        button:hover {
            background-color: #0056b3;
        }
        h2 {
            text-align: center;
        }
        p {
            font-size: 16px;
            margin-top: 10px;
        }
        .green { color: green; }
        .red { color: red; }
        .gray { background-color: gray; color: white; padding: 5px; border-radius: 4px; }
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
    <h1>Умовні конструкції</h1>

    <!-- Форма для завдання 3a -->
    <h2>Завдання 3a: Добуток двох чисел</h2>
    <form method="POST">
        <label for="num1">Число 1:</label>
        <input type="number" name="num1" id="num1" required>
        <label for="num2">Число 2:</label>
        <input type="number" name="num2" id="num2" required>
        <button type="submit">Обчислити</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $product = $num1 * $num2;
        echo "<p>Добуток чисел $num1 та $num2 = ";
        if ($product < 45) {
            echo "<span class='green'>$product</span>";
        } elseif ($product > 70 && $product < 100) {
            echo "<span class='red'>$product</span>";
        } elseif ($product > 100) {
            echo "<span class='gray'>$product</span>";
        } else {
            echo $product;
        }
        echo "</p>";
    }
    ?>

    <!-- Форма для завдання 3b -->
    <h2>Завдання 3b: Перевірка числа</h2>
    <form method="POST">
        <label for="number">Введіть число:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Перевірити</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
        $number = $_POST["number"];
        echo "<p>Число $number є ";
        if ($number > 0) {
            echo "позитивним";
        } elseif ($number < 0) {
            echo "негативним";
        } else {
            echo "рівним нулю";
        }
        echo "</p>";
    }
    ?>

    <!-- Форма для завдання 3c -->
    <h2>Завдання 3c: Перевірка логіну та паролю</h2>
    <form method="GET">
        <label for="login">Логін:</label>
        <input type="text" name="login" id="login" required><br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required><br>
        <button type="submit">Увійти</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["login"])) {
        $correct_login = "user";
        $correct_password = "password";
        $login = $_GET["login"];
        $password = $_GET["password"];
        if ($login === $correct_login && $password === $correct_password) {
            echo "<p>Логін та пароль вірні!</p>";
        } else {
            echo "<p>Логін або пароль невірні!</p>";
        }
    }
    ?>
    <div class="links">
        <h2>Посилання на завдання:</h2>
        <a href="linear_programs.php">Лінійні програми</a>
        <a href="loop_programs.php">Програми з повторенням</a>
        <a href="index.php">Головна сторінка</a>
    </div>
</body>
</html>