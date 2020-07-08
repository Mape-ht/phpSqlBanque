<?php
$dbServername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName="bpmape_gr2";

   //creer connection avec la base de données
   $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);$dbServername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName="bpmape_gr2";

   //creer connection avec la base de données
   $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
 
   //$typesCompte = $conn->query('SELECT * FROM type_compte')->fetch_all();
  // $fraisOuverture = $conn->query('SELECT * FROM type_frais')->fetch_all();
   //$fraisAgios = $conn->query('SELECT * FROM type_frais')->fetch_all();
   $fraisRemuneration = $conn->query('SELECT * FROM type_frais')->fetch_all();
   var_dump($fraisRemuneration);
   die;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet" />
    <title>Creation Compte Client</title>
    <meta name="description" content="Interface client Banque du Peuple" />
    <meta name="keywords" content="Interface, client, banque du Peuple" />
    <meta name="author" content="Marie Perle" />
</head>

<body>
    <!-----------------header contiendra logo + titre------>
    <header>
        <h1><span>Banque du</span> peuple</h1>
        <img src="image/cloche.png" alt="logo Banque du Peuple" class="img1">
        <img src="image/envelope_maket.png" alt="logo Banque du Peuple" class="img2">
    </header>
    <main>
        <!-----------------contiendra le side barre et le contenu principal------>
        <!-----------------aside contiendra le dashboard en side barre gauche------>
        <aside>
            <ul class="main-nav">
                <li><a href="index.php">Creation Client</a></li>
                <li><a href="creacompte.php">Creation Compte</a></li>
                <li><a href="#">Consultation Compte</a></li>
                <li><a href="#">Transaction</a></li>
            </ul>
        </aside>
        <!--creation compte Client-->
        <section class="Compte">
            <form id="creacompteForm" method="POST" action="./phpController/compte/getcompteform.php">
                <!--onsubmit="return comptevalidate()" action="connectcpte.php" method="POST">-->
                <fieldset>
                    <legend>Creation Compte</legend>
                    <label for="typeCompte">Indiquer le type de Compte</label>
                    <!--<select name="typeCompte" id="typeCompte">
                        <option value="0">--Type de compte--</option>
                        <option value="1">Compte Epargne et Xewel</option>
                        <option value="2">Compte Courant</option>
                        <option value="3">Compte Bloqué</option>
                    </select><br><br />-->
                    <select name="typeCompte" id="typeCompte">
                    <?php 
                        foreach ($typesCompte as $typeCompte){
                            echo "<option value='".$typeCompte[0]."'>".$typeCompte[1]."</option>";
                        } 
                    ?>
                    </select><br></br>
                    <label for="numCompte">Numéro de Compte</label>
                    <input type="text" id="numCompte" name="numCompte" disabled /></br>
                    <label for="cle">Numéro Clé RIB</label>
                    <input type="text" id="cle" name="cle" disabled /></br>
                    <label for="initial">Depôt initial</label>
                    <input type="texte" id="initial" name="initial" placeholder="Depôt initial" / required><br />
                    <label for="fraisOuv">Frais Ouverture Compte</label>
                    <select name="fraisOuv" id="fraisOuv">
                        <!--<option value="0">--Frais ouverture Compte--</option>
                        <option value="1">Frais Epargne et Xewel</option>
                        <option value="2">Frais Courant</option>
                        <option value="3">Frais Bloqué</option>
                    </select>-->
                    <?php 
                        foreach ($fraisOuverture as $fraisO){
                            echo "<option value='".$fraisO[0]."'>".$fraisO[1]."</option>";
                        } 
                    ?>
                    </select><br><br />
                    <label for="remun">Intérêt Bancaire</label>
                    <select name="remun" id="remun">
                        <!--<option value="0">--Remuneration Compte--</option>
                        <option value="1">Taux Epargne et Xewel</option>
                        <option value="2">Taux Courant</option>
                        <option value="3">Taux Bloqué</option>-->
                        <?php 
                        foreach ($fraisRemuneration as $Remuneration){
                            echo "<option value='".$Remuneration[0]."'>".$Remuneration[2]."</option>";
                        } 
                        ?>
                    </select><br><br />
                    <label for="agios">Agios</label>
                    <select name="agios" id="agios">
                        <!--<option value="0">--Agios Compte--</option>
                        <option value="1">Taux Epargne et Xewel</option>
                        <option value="2">Taux Courant</option>
                        <option value="3">Taux Bloqué</option>-->
                        <?php 
                        foreach ($fraisAgios as $agio){
                            echo "<option value='".$agio[0]."'>".$agio[1]."</option>";
                        } 
                        ?>

                        $fraisAgios
                    </select><br><br />
                    <label for="dateOuv">Date d'ouverture du compte</label>
                    <input id="Aujourdhui" type="date" name="date" /><br />
                </fieldset>
                <div>
                    <button type="submit" name="submitCo" class="bouttonV">VALIDER</button>
                    <button type="reset" class="bouttonA">ANNULER</button>
                </div>
            </form>
        </section>
    </main>
</body>

</html>