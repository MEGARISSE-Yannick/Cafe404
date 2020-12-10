<html>
    <head>
       <meta charset="utf-8">
        <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
        <!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <!--Police-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    </head>
    <body class="text-center">
    <img class="ml-3" src="https://zupimages.net/up/20/45/i2fx.png" alt="" width="200" height="150" />
        <div  class="container contour text-center">
            <div class="row mt-5">
              <div class="col-3"></div>
              <div class="col-6">
                        
                    <!-- zone de connexion -->
            
                    <form class="form-signin " action="verification.php" method="POST">
                    <h3 class=" text-white">Admin login</h3>
                    <div class="trait1"></div>
                    <div class="trait2 mt-1 mb-2"></div>
                
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="white"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg> 
                    <input type="text" class="form-control m-2" placeholder="Nom d'utilisateur" name="username" required>

                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock" fill="white"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                    </svg>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" class="form-control m-2" placeholder="Mot de passe" name="password" required>

                    <div class="checkbox ">
                    </div>
                    <button class="btn btn-light btn-block mt-4" type="submit">Sign in</button>
                       
                    <?php
                    if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";}
                    ?>
                    <p class="mt-3  text-muted">© 2020-2090</p>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </body>
</html>