

<?php
$host = "localhost";
$base = 'jarditou';
$login = 'root';
$password = '';

try 
{
   $bdd = new PDO('mysql:host=' .$host. ';charset=utf8;dbname='.$base, $login, $password);

   // Ajout d'une option PDO pour gérer les exceptions
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
}

