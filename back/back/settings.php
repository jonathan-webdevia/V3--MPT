<?php

/*** connexion à la base de données **/

/*
try {
    $bdd = new PDO('mysql:host=db5012115790.hosting-data.io:3306; dbname=dbs10193710', 'dbu2169934', 'Akaze1/*27', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
} */
 
try {
    $bdd = new PDO('mysql:host=localhost; dbname=dbs002-mpt', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}