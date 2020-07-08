<?php
extract ($_POST); //enleve les variables dans le tableau POSTet y a plus de $_Post à ecrire $_Post["nom"] devient $nom 
include_once('./model/connectomydb.php'); //Inserer le chemin de connection à la bdd

   $dbServername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName="bpmape_gr2";

   //creer connection avec la base de données
   //$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
   function getConnect(){
    return '$conn';
}
   //choix type de compte
    //Verifier si data existe et champs non vide et les recupérer à submit (determiner variables)  
    if (isset($_POST['submitCo'])) {
        //var_dump($_POST);
        //die;
        //echo"je vois les isset";
       //Recupérer les données du formulaire
      /* INSERT INTO `compte_client`(`id`, `numerocte`, `clerib`, `agence_id`, `solde`, `etat`, `cltphy_id`, `cltmoral_id`, `datecrea`, `typecompte_id`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])*/


       /*$typeCompte = htmlspecialchars ($_POST['typeCompte']);
       $nomsEmployeur = htmlspecialchars ($_POST['nomsEmployeur']);
       $adresseEmploi = htmlspecialchars ($_POST['adresseEmploi']);
       $numIdEmployeur = htmlspecialchars ($_POST['numIdEmployeur']);

        /*$sql = mysqli_query($conn,"INSERT INTO client_moral(`id`, `raison_social`, `nom`,
         `adresse`, `ninea`, `telephone`, `email`, `login`, `password`) 
         VALUES (null,'$raisonSo','$nomsEmployeur','$adresseEmploi','$numIdEmployeur',
         null,null,null,null)");
       
         $sql = mysqli_query($conn, "INSERT INTO `compte_client`(`id`, `numerocte`, `clerib`, `agence_id`, `solde`, `etat`, `cltphy_id`, `cltmoral_id`, `datecrea`, `dateferme`, `datefertempo`, `datereouv`, `typecompte_id`) VALUES (null,[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])
         

    if($sql!=0){
        echo ("Base de données RENSEIGNEE");
    }else
        echo ("ECHEC "); 
    }*/



/*if (!empty($raisonSo) || !empty($nomsEmployeur) || !empty($adresseEmploi) || !empty($numIdEmployeur)) {
    echo 'Données Validées';
//connection variables
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName="bpmape_gr2";


//creer connection avec la base de données
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
 if (mysqli_connect_error()) {
     die("Connect Error(" . mysqli_connect_error(). ")" . mysqli_connect_error());
    } else { //recupérer les données du formulaire
        $INSERT = "INSERT Into client_moral(`id`, `raison_social`, `nom`, `adresse`, `ninea`, `telephone`, `email`, `login`, `password`, `etatclient_id`) VALUES (null,$raisonSo,$nomsEmployeur,$adresseEmploi,$numIdEmployeur,null,null,null,null,null)";

    //prepre statement
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param(issssssss, $raisonSo, $nomsEmployeur, $adresseEmploi, $numIdEmployeur, $telephone, $email, $login, $password);
        $stmt->execute();
        echo "Données inserées correctement dans la base";
    }else{
         echo "Echec";    
 }
        $stmt->close;
}else{
    echo "Remplir tous les champs";
    die();
}*/  

    }
?>