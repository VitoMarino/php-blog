<?php
// Connessione al database mysql
$host = 'localhost';   // Indirizzo del server database
$user = 'root';        // Nome utente
$password = 'root';        // Password
$dbname = 'mysql'; // Nome del database

// Crea connessione
$conn = new mysqli($host, $user, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>