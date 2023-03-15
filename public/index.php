<?php 

require_once '../config.php';
#Routerrequire_once '../controller/PublicController.php';
# Connexion à la DB

# Essai de connexion
try{
    # connexion mysqli
    $db = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    # charset
    mysqli_set_charset($db,DB_CHARSET);

# capture l'erreur
}catch(Exception $e){

    # arrêter le script et afficher l'erreur
    exit(utf8_encode($e->getMessage()));

}
include "../controller/publicController.php";

