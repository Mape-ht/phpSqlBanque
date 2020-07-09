<?php

require_once "model/connectomydb.php";

/*function getAllTypeClt()
{ //pas utile, le select a été mis en static 
    $sql = "SELECT * FROM type_client";
    $conn = getConnect();

    return $conn->query($sql)->fetchAll();

}*/

/*function getAllTypeProf()
{
    $sql = "SELECT * FROM client_physique";
    $conn = getConnect();
    return $conn->query($sql)->fetchAll();

} pas utile, le select a été mis en static */


function getAllEmployeur() //pour faire apparaitre la liste des clients entreprise au niveau de employeur 
{
    $sql = "SELECT * FROM client_moral";
    $conn = getConnect();

    return $conn->query($sql)->fetchAll();
}

?>
