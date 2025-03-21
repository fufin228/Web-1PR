<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Програми з повторенням</title>
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
        button:hover {
            background-color: #0056b3;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
        h2{
           text-align: center;
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
    <h1>Програми з повторенням</h1>

    <!-- Форма для завдання 2a -->
    <h2>Завдання 2a: Квадрати чисел у діапазоні</h2>
    <form method="POST">
        <label for="start">Початкове число:</label>
        <input type="number" name="start" id="start" required>
        <label for="end">Кінцеве число:</label>
        <input type="number" name="end" id="end" required>
        <button type="submit">Вивести квадрати</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["start"])) {
        $start = $_POST["start"];
        $end = $_POST["end"];
        echo "<table>";
        echo "<tr><th>Число</th><th>Квадрат</th></tr>";
        for ($i = $start; $i <= $end; $i++) {
            echo "<tr><td>$i</td><td>" . ($i * $i) . "</td></tr>";
        }
        echo "</table>";
    }
    ?>

    <!-- Форма для завдання 2b -->
    <h2>Завдання 2b: Таблиця множення</h2>
    <form method="POST">
        <label for="size">Розмір таблиці (N x N):</label>
        <input type="number" name="size" id="size" required>
        <button type="submit">Вивести таблицю</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["size"])) {
        $size = $_POST["size"];
        echo "<table>";
        for ($i = 1; $i <= $size; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $size; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
    <div class="links">
        <h2>Посилання на завдання:</h2>
        <a href="linear_programs.php">Лінійні програми</a>
        <a href="index.php">Головна сторінка</a>
        <a href="conditional_programs.php">Умовні конструкції</a>
    </div>
</body>
</html>