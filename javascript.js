var d = new Date();

setInterval(function () {
    var date1 = new Date();
    let dateLocale = date1.toLocaleString('fr-FR', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
    });

    document.getElementById('p1').innerHTML = dateLocale;
}, 1000)


function couleur() {
    var element = document.getElementById("situation");
    element.classList.remove("bouton_disponile"); //couleur du bouton vert en rouge change le css + modifie le txt
    var element = document.getElementById("situation");
    element.classList.add("bouton_indisponible");
    document.getElementById("situation").innerHTML = "Indisponible ";
    var nom_utilisateur = document.getElementById("name").value;
    console.log(nom_utilisateur);
    document.getElementById("name_U").innerHTML = document.getElementById("name").value;

}

function defaut() {

    var element = document.getElementById("situation");
    element.classList.remove("bouton_indisponible");
    document.getElementById("situation").innerHTML = "Disponible";
    document.getElementById("utilisation").innerHTML = "Réserver un Ordinateur ";
    var element = document.getElementById("situation");
    element.classList.add("bouton_disponible");
}


var temps_recup = 0;
function set_time(temps) {
    var ladate = new Date()
    if (temps === '10') {
        document.getElementById("timer").innerHTML = 10+"min";
        ladate.setMinutes(ladate.getMinutes() + 10);
        document.getElementById('timer_fin').innerHTML = ladate.getHours()+ ":" + ladate.getMinutes();

    }
    else if (temps === '20') {
        document.getElementById("timer").innerHTML = 20+"min";
        ladate.setMinutes(ladate.getMinutes() + 20);
        document.getElementById('timer_fin').innerHTML = ladate.getHours()+ ":" + ladate.getMinutes();

    }
    else if (temps === '30') {
        document.getElementById("timer").innerHTML = 30+"min";
        ladate.setMinutes(ladate.getMinutes() + 30);
        document.getElementById('timer_fin').innerHTML = ladate.getHours()+ ":" + ladate.getMinutes();

    } else if (temps === '60') {
        document.getElementById("timer").innerHTML = 1+"H";
        ladate.setHours(ladate.getHours() + 1);
        document.getElementById('timer_fin').innerHTML = ladate.getHours()+ ":" + ladate.getMinutes();

    } else if (temps === '120') {
        document.getElementById("timer").innerHTML = 2+"H";
        ladate.setHours(ladate.getHours() + 2);
        document.getElementById('timer_fin').innerHTML = ladate.getHours()+ ":" + ladate.getMinutes();

    } else if (temps === '180') {
        document.getElementById("timer").innerHTML = 3+"H";
        ladate.setHours(ladate.getHours() + 3);
        document.getElementById('timer_fin').innerHTML = ladate.getHours()+ ":" + ladate.getMinutes();

    }
    temps_recup = temps;
}


//recuperer le temps a partir du moment ou on click sur enregister
//en suite y ajouter le temps choisi ;10min; 20min ;1h ;2h; etc...
//afficher un compte a rebours a coter du temps 

