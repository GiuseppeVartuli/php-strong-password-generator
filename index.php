
<?php

require_once __DIR__ . '/functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">

        <label for="password_length">Lunghezza della password:</label>
        <input type="number" id="password_length" name="password_length" min="6" max="100">
        <button type="submit">Genera Password</button>
    </form>
</body>
</html>