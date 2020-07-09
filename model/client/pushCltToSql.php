<?php
function addcltmo($raisonSo, $nomsEmployeur, $adresseEmploi, $numIdEmployeur){//creer une fonction d'insertion du client moral
           
    $sql = "INSERT INTO client_moral(`id`, `raison_social`, `nom`, `adresse`, `ninea`, `telephone`, `email`, `login`, `password`) VALUES (null,'$raisonSo','$nomsEmployeur','$adresseEmploi','$numIdEmployeur',null,null,null,null)";    //creation de la variable $sql de insert into

    return makeRequest($sql); //a l'appel de la fonction addcltmo retourne la fonction qui a la connection et la requete en parametre
            
}
  

function addcltphyNonSal($nomsClt, $prenoms, $adresse, $email, $phone){//fonction pour ajouter les informations dont tous les clients physiques ont en communs 
    
    $sql = "INSERT INTO client_physique (`id`, `nom`, `prenom`, `telephone`, `statut`, `salaire`, `adresse`, `login`, `password`, `email`, `cin`, `typeclt_id`, `cltmoral_id`) VALUES (null,'$nomsClt','$prenoms','$phone','$statut', null,'$adresse',null,null,null,'$email',null,null,null)";

    return makeRequest($sql);
}
    

 function addcltphySal($statut, $salaire, $employeur, $numIdTravail){

    $sql = "INSERT INTO client_physique (`id`, `nom`, `prenom`, `telephone`, `statut`, `salaire`, `adresse`,`login`, `password`, `email`, `cin`, `typeclt_id`, `cltmoral_id`) VALUES (null,'$nomsClt','$prenoms','$phone','$statut', '$salaire','$adresse',null,null,'$email','$numIdTravail',null,null)";

    return makeRequest($sql);
 }      


 function getAllEmployeur() {//pour faire apparaitre la liste des clients entreprise au niveau de employeur 

    $sql = "SELECT * FROM client_moral";
    //$conn = getConnect();

    //return $conn->query($sql)->fetchAll();
    return makeRequest($sql)->fetch_All();
}

?>