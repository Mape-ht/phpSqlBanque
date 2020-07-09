<?php
//creer connection avec la base de données
function getConnect() //creer une fonction de connection
{
    $dbServername = "localhost"; //declarer les variables utiles à la connection
    $dbUsername = "root";
    $dbPassword = "";
    $dbName="bpmape_gr2";
    $dsn = "mysql:host=$dbServername;dbname=$dbName";//data server name prend la bd mysql + host + dbname

    try { //faire un try and catch pour tester la connection
        $conn = new PDO($dsn, $dbUsername, $dbPassword);
    } catch (\Throwable $th) {//throwable 
        throw $th;
    }
    return $conn;//retourner la connexion
}

function makeRequest($mrequest){  //créer une fonction de requete connexion 

    $conn = getConnect();  //qui prend en charge laconnexion à chaque fois
    return mysqli_query($conn, $mrequest); // qui retourne la connexion et la requete
}
 ?>
