

setInterval(function(){
    var d = new Date(); 
    var h = d.toLocaleTimeString();
    console.log(d.toLocaleTimeString()); 
    document.getElementById("date").innerHTML=h;
},1000)

function myFunction() {
    document.getElementById("situation").innerHTML="Indisponible";
    document.getElementById("utilisation").innerHTML="Indisponible j'usque ";
}
function couleur() {
    var element =  document.getElementById("situation");
    element.classList.remove("bouton");
    var element =  document.getElementById("situation");
    element.classList.add("indisponible");

}

function defaut() {
    var element =  document.getElementById("situation");
    element.classList.add("bouton");
    var element =  document.getElementById("situation");
    element.classList.remove("indisponible");
}
 
    function myFunctiondefaut() {

    document.getElementById("situation").innerHTML="Disponible";
    document.getElementById("utilisation").innerHTML="Reserver un Ordinateur ";
}



