<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz Game</title>
</head>
<body>
    <h2>FizzBuzz Game</h2>
    <form method="POST">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = (int) $_POST["number"]; // Convert input to an integer

        // Check divisibility conditions
        if ($number % 3 == 0 && $number % 5 == 0) {
            echo "<p>The magic number is: <strong>FizzBuzz</strong></p>";
        } elseif ($number % 3 == 0) {
            echo "<p>The magic number is: <strong>Fizz</strong></p>";
        } elseif ($number % 5 == 0) {
            echo "<p>The magic number is: <strong>Buzz</strong></p>";
        } else {
            echo "<p>The magic number is: <strong>$number</strong></p>";
        }
    }
    ?>
</body>
</html>
