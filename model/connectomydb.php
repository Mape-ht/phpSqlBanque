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
    return $conn;
}

/*//creer connection avec la base de données
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
function getConnect(){
    return '$conn';
}

//  if (mysqli_connect_error()) {
//      die("Connect Error(" . mysqli_connect_error(). ")" . mysqli_connect_error());
//  } else {
//      die("Connection PAS établie " .mysqli_connect_error());
//  }*/
 ?>
