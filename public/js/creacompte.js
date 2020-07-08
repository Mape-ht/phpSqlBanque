//declarer comme variable les inputs    
var typeCompteFields = document.getElementById('typeCompte');
var numCompteFields = document.getElementById('numCompte');
var cleFields = document.getElementById('cle');
var montantinitial = document.getElementById('initial');
var fraisOuvCompte = document.getElementById('fraisOuv');
var interet = document.getElementById('remun');
var agiosbanc = document.getElementById('agios');
var dateOuvcompte = document.getElementById('Aujourdhui');




//validation si tous les champs renseignés  

var creacompteForm = document.getElementById('creacompteForm')
creacompteForm.addEventListener('submit',comptevalidate);
        function comptevalidate(e) {
        e.preventDefault();
        
        if (typeCompteFields.value <= "0" || numCompteFields.value ==="0" || cleFields.value ==="0" || montantinitial.value.trim() ==="" || fraisOuvCompte.value <="0" || interet.value <="0" || agiosbanc.value <="0" || dateOuvcompte.value ==="" ) 
         {
            alert('Veuillez remplir tous les champs');
        } else {
            alert('Formulaire bien enregistré');
                }
         
        }