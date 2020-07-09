function showForm(){
    let client=document.getElementById("choixclt")
    let choix = client.selectedIndex;
    let type = client.options[choix].text;
    if(type==="Client Entreprise"){
        document.getElementById("cltMoralForm").hidden = false;
        document.getElementById("cltPhysiqueForm").hidden = true;

    }else{
        if(type==="Client Particulier"){
            document.getElementById("cltMoralForm").hidden = true;
            document.getElementById("cltPhysiqueForm").hidden = false;
        }
        else{
            document.getElementById("cltMoralForm").hidden = true;
            document.getElementById("cltPhysiqueForm").hidden = true;
        }
    }   
}
