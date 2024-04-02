<?php

// Funzione per generare una password casuale
function RandomPassword($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_=+';
    $password = '';

    // Genera la password casuale
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}

// Se la lunghezza della password è stata inviata tramite GET
if (isset($_GET['password_length'])) {
    $password_length = $_GET['password_length'];

    // Genera e mostra la password solo se la lunghezza è valida
    if ($password_length > 5) {
        $random_password = RandomPassword($password_length);
        echo "<h2>Password generata:</h2>";
        echo "<p>$random_password</p>";
    } else {
        echo "<p style='color: red;'>Selezionare la lunghezza della password di almeno 6 caratteri</p>";
    }
}
?>