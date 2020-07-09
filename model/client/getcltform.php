<?php
extract ($_POST); //enleve les variables dans le tableau POSTet y a plus de $_Post à ecrire $_Post["nom"] devient $nom 
include_once("../../model/connectomydb.php"); //Inserer le chemin de connection à la bdd

   $dbServername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName="bpmape_gr2";

   //creer connection avec la base de données
   $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
  
    
    //client moral
    //Verifier si data existe et champs non vide et les recupérer à submit   
  if (isset($_POST['submit'])) {
        //echo"je vois les isset";
       
    /*    //insert pour client moral
     if ($cltp =='1'){
                     
        $sql = mysqli_query($conn,"INSERT INTO client_moral(`id`, `raison_social`, `nom`,
        `adresse`, `ninea`, `telephone`, `email`, `login`, `password`) 
        VALUES (null,'$raisonSo','$nomsEmployeur','$adresseEmploi','$numIdEmployeur',
        null,null,null,null)");
     }
        //Recupérer les données du formulaire
       $cltp = htmlspecialchars ($_POST['cltp']); 
       $raisonSo = htmlspecialchars ($_POST['raisonSo']);
       $nomsEmployeur = htmlspecialchars ($_POST['nomsEmployeur']);
       $adresseEmploi = htmlspecialchars ($_POST['adresseEmploi']);
       $numIdEmployeur = htmlspecialchars ($_POST['numIdEmployeur']);

    

     if ($cltp =='2'){
    }
      //echo"je vois les isset";
       //Recupérer les données du formulaire
       $nomsClt = htmlspecialchars ($_POST['nomsClt']);
       $prenoms = htmlspecialchars ($_POST['prenoms']);
       $adresse = htmlspecialchars ($_POST['adresse']);
       $email = htmlspecialchars ($_POST['email']);
       $phone = htmlspecialchars ($_POST['phone']);
       $profession = htmlspecialchars ($_POST['profession']);
       $salaire = htmlspecialchars ($_POST['salaire']);
       $nomsEmployeur = htmlspecialchars ($_POST['nomsEmployeur']);
       $numIdTravail = htmlspecialchars ($_POST['numIdTravail']);
      
       //$clientMorals = $conn->query('SELECT * FROM client_moral')->fetch_all();

        if($profession=='2'){
            $sql = mysqli_query($conn, "INSERT INTO client_physique (`id`, `nom`, `prenom`, `telephone`, `salaire`, `adresse`, `profession`, `login`, `password`, `email`, `cin`, `typeclt_id`, `cltmoral_id`) VALUES (null,'$nomsClt','$prenoms','$phone',NULL,'$adresse','$profession',null,null,'$email','$numIdTravail',null,NULL)");
        
        
        }else {
            $sql = mysqli_query($conn, "INSERT INTO client_physique (`id`, `nom`, `prenom`, `telephone`, `salaire`, `adresse`, `profession`, `login`, `password`, `email`, `cin`, `typeclt_id`, `cltmoral_id`) VALUES (null,'$nomsClt','$prenoms','$phone','$salaire','$adresse','$profession',null,null,'$email','$numIdTravail',null,$nomsEmployeur)");
        
        }

        if($sql!=0){
        echo ("Base de données RENSEIGNEE");
    }else
        echo ("ECHEC "); 


        if($sql!=0){
            echo ("Base de données RENSEIGNEE");
        }else
            echo ("ECHEC "); 
    }

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
        die("Connect Error(" . mysqli_connect_error(). ")" );
    }
     else 
     {  //recupérer les données du formulaire
            $INSERT = "INSERT Into client_moral(`id`, `raison_social`, `nom`, `adresse`, `ninea`, `telephone`, `email`, `login`, `password`) VALUES (null,:raisonSo,:nomsEmployeur,:adresseEmploi,:numIdEmployeur,null,null,null,null)";

        //prepare statement
            $stmt = $conn->prepare($INSERT);
           $stmt->bind_Param(':raisonSo', $raisonSo, PDO::PARAM_STR);
           $stmt->bind_Param(':nomsEmployeur', $nomsEmployeur, PDO::PARAM_STR);
           $stmt->bind_Param(':adresseEmploi', $adresseEmploi, PDO::PARAM_STR);
           $stmt->bind_Param(':numIdEmployeur', $numIdEmployeur, PDO::PARAM_STR);
            $stmt->execute();
            echo "Données inserées correctement dans la base";
        }  
    }else{
        echo "Remplir tous les champs";
        die();
        $stmt->close;*/

}

  
   /* //Garder les info validées dans les champs
    echo isset($_POST['raisonSo']) ? $raisonSo : '';
    echo isset($_POST['nomsEmployeur']) ? $nomsEmployeur : '';
    echo isset($_POST['adresseEmploi']) ? $adresseEmploi : '';
    echo isset($_POST['numIdEmployeur']) ? $numIdEmployeur : ''; */
    
  
?>