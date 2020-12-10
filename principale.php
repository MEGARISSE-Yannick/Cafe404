<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="tdb.css">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--Police-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Tableau de bord</title>
</head>

<body>


    <nav class="navbar">
        <img class="m-1" src="https://zupimages.net/up/20/45/i2fx.png" alt="" width="100" height="60" />
        <div class="row">
            <p class="navbar-brand text-light text-center" href="#">
                Tableau de bord
            </p>

        </div>
        <div class="col-1"></div>
        </div>

    </nav>

    <div class="row text-center">
        <div class=" card col-5 ml-5 mt-5">
            <p class="mt-3">
                <h4 id="p1">00:00</h4>
                <h4>Poste occupés :<a id="pc_occupé">0</a> /12 </h4>
            </p>
        </div>
        <div class="col-6"></div>
    </div>


    <div class="row">
        <div class="card col-3 d-flex text-center m-5 " style="width: 18rem;">

            <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
                <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
            </svg>

            <div class="card-body">
                <h5 class="card-title">Ordinateur</h5>
                <p>User: <a id="name_U"></a></p>
                <p>Temps:<a id="timer"></a></p>
                <p>Fin:<a id="timer_fin"></a></p>

                <button type="button" class="bouton_disponible" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" id="situation">Disponible</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header clr">
                                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body clr">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom de
                                        l'utilisateur</label>
                                    <form method="post">
                                        <input type="text" name="nom">
                                </div>
                            </div>
                            <div class="modal-footer clr">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Temps de reserve
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="time" onclick="set_time('10')" href="#">10min</a>
                                        <a class="dropdown-item" id="time" onclick="set_time('20')" href="#">20min</a>
                                        <a class="dropdown-item" id="time" onclick="set_time('30')" href="#">30min</a>
                                        <a class="dropdown-item" id="time" onclick="set_time('60')" href="#">1H</a>
                                        <a class="dropdown-item" id="time" onclick="set_time('120')" href="#">2H</a>
                                        <a class="dropdown-item" id="time" onclick="set_time('180')" href="#">3H</a>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="defaut();">Annuler</button>
                                <button type="button" class="btn btn-primary" onclick="couleur();" data-dismiss="modal" action="submit">                                        <input type="submit">
Enregistrer</button>
                                </form>

                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>

    <?php

    if (isset($_POST['nom'])) {
        $bdd = new PDO('mysql:host=localhost;dbname=cafe404;charset=utf8', 'admin', 'Simpl@n974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $reponse = $bdd->query('SELECT * FROM test');

        $requete = 'INSERT INTO test VALUES("' . $_POST['nom'] . '")';
        $resultat = $bdd->query($requete);
    }

    ?>
</body>

</html>