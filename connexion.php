<?php
//Variable serveur
define("SERVEUR","");
define("USER","");
define("MDP","");
define("BD","");

try {
$connexion= new PDO('mysql:host='.SERVEUR.';dbname='.BD, USER, MDP);      
$connexion->exec("SET CHARACTER SET utf8");	//Gestion des accents          
}
catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}
?>