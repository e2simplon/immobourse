<?php
// fichier de configuration générale
// on y place ici les constantes, la connexion à la bdd...

// configuration
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
define('hostServer','127.0.0.1');
define('DbUser','immobourse');
define('DbPassword','mdpimmobourse');
define('Database','immobourse');

// Connexion mysqli
$mysqli = mysqli_connect(hostServer, DbUser, DbPassword, Database);

if (!$mysqli) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
