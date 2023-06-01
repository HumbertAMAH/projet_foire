var message_valeur=document.querySelector(".information").children[1];
var id
var valeur;
//CECI NOUS PERMET DE SELECTIONNER LE 2 EME PARAGRAHPE DANS LA DIV AYANT LA CLASS INFORMATION
window.onload=()=>{
    valeur="Aucune valeur"
    message_valeur.innerHTML=valeur;
}
document.forms[0].onchange=()=>{
    console.log("change");
}
var qr = new QRious({
    element: document.querySelector('.qrious'),
    size: 200,
    value: valeur
  });
function change(element) {
switch (element.name) {
    case "id":
        Prenom=element.value;
      break;
    


    
}

valeur=Prenom;
qr.value=valeur;
message_valeur.innerHTML=qr.value;


  
   
}



  