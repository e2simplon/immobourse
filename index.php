<?php
// Le fichier index est appelé pour afficher n'importe quelle page

// configuration globale
include 'config.php';

// le loader va charger les fichiers php qui contiennent les composants dont nous avons besoin (controlleurs, modeles, router)
include 'load.php';

// on charge le router qui s'occupera du reste
$router->load();