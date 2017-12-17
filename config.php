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

define('PageTitle','La bourse de l\'immobilier d\'entrprise dans les Vosges');
define('PageDescription','La bourse des locaux professionnels dans les Vosges, trouvez un espace coworking ou un entrepot proche de chez vous.');
define('PageKeywords','vosges,epinal, saint-dié, remiremont, usine, bureau, entrepot');

// Connexion mysqli

$mysqli = mysqli_connect(hostServer, DbUser, DbPassword, Database);
$mysqli->set_charset("utf8");

if (!$mysqli) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
