<?php

require_once "../../model/connectomydb.php"; //Inserer le chemin de connection à la bdd*/
require_once "../../model/client/pushCltToSql.php"; //Inserer le chemin des fonction d'insertion à la bdd*/

if (isset($_POST['submit'])){
extract ($_POST); //enleve les variables dans le tableau POSTet y a plus de $_Post à ecrire $_Post["nom"] devient $nom 

    if ($_POST['cltp'] =='1'){//insert pour client moral
        
        if (!empty($raisonSo) || !empty($nomsEmployeur) || !empty($adresseEmploi) || !empty($numIdEmployeur)){
            
            $cltp = htmlspecialchars ($_POST['cltp']); //Recupérer les données du formulaire
            $raisonSo = htmlspecialchars ($_POST['raisonSo']);
            $nomsEmployeur = htmlspecialchars ($_POST['nomsEmployeur']);
            $adresseEmploi = htmlspecialchars ($_POST['adresseEmploi']);
            $numIdEmployeur = htmlspecialchars ($_POST['numIdEmployeur']);
        
         $result = addcltmo($raisonSo, $nomsEmployeur, $adresseEmploi, $numIdEmployeur); 
        //Garder les info validées dans les champs
        }echo isset($_POST['raisonSo']) ? $raisonSo : '';
        echo isset($_POST['nomsEmployeur']) ? $nomsEmployeur : '';
        echo isset($_POST['adresseEmploi']) ? $adresseEmploi : '';
        echo isset($_POST['numIdEmployeur']) ? $numIdEmployeur : '';

        }
    
        if ($_POST['cltp'] =='2'){ //insérer pour client physique
        
            if ($_POST['statut'] =='1'){
    
                if (!empty($nomsClt) || !empty($prenoms) || !empty($adresse) || !empty($email) || !empty($phone) || !empty($statut) || !empty($salaire) || !empty($nomsEmployeur) || !empty($numIdTravail));
    
            $nomsClt = htmlspecialchars ($_POST['nomsClt']);
            $prenoms = htmlspecialchars ($_POST['prenoms']);
            $adresse = htmlspecialchars ($_POST['adresse']);
            $email = htmlspecialchars ($_POST['email']);
            $phone = htmlspecialchars ($_POST['phone']);
            $statut = htmlspecialchars ($_POST['statut']);
            $salaire = htmlspecialchars ($_POST['salaire']);
            $nomsEmployeur = htmlspecialchars ($_POST['nomsEmployeur']);
            $numIdTravail = htmlspecialchars ($_POST['numIdTravail']); //Recupérer les données du formulaire
    
             $result = addcltphySal($nomsClt, $prenoms, $adresse, $email, $phone, $statut, $salaire, $nomsEmployeur, $numIdTravail);
            
            //Garder les info validées dans les champs
        
        echo isset($_POST['nomsClt']) ? $nomsClt : '';
        echo isset($_POST['prenoms']) ? $prenoms : '';
        echo isset($_POST['adresse']) ? $adresse : '';
        echo isset($_POST['email']) ? $email : ''; 
        echo isset($_POST['phone']) ? $phone : '';
        echo isset($_POST['statut']) ? $statut : '';
        echo isset($_POST['salaire']) ? $salaire : '';
        echo isset($_POST['nomsEmployeur']) ? $nomsEmployeur : ''; 
        echo isset($_POST['numIdTravail']) ? $numIdTravail : ''; 

            }else
            { $result = addcltphyNonSal($nomsClt, $prenoms, $adresse, $email, $phone);

            }

        }
      
    }else{
        echo "Remplir tous les champs";
        die();
            
    }
