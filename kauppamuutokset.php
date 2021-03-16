<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE autokauppa SET Merkki='" . $_POST['Merkki'] . "', Malli='" . $_POST['Malli'] . "', Vuosimalli='" . $_POST['Vuosimalli'] . "', Polttoaine='" . $_POST['Polttoaine'] . "' ,Vaihteisto='" . $_POST['Vaihteisto'] . "' ,Kilometrilukema='" . $_POST['Kilometrilukema'] . "' ,Katsastus='" . $_POST['Katsastus'] . "' ,Hinta='" . $_POST['Hinta'] . "' ,Lisatiedot='" . $_POST['Lisatiedot'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "<h3> Tiedot päivitetty onnistuneesti! </h3";
}
$result = mysqli_query($conn,"SELECT * FROM autokauppa WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Haukiauto</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Sivun alkuun</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Etusivulle</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="kauppa.php">Autokauppa</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="ajanvaraus.php">Huollon tarjouspyyntö</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#yhteys">Yhteystiedot</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Haukiauto</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Monipuolinen autokauppa, autovuokraamo, sekä täyden toiminnan autokorjaamo.</h2>
                </div>
            </div>
        
            <section class="about-section text-center" id="etusivu">
            <div id="ajanvarausmuutokset">
<form name="ajanvarausmuutokset" method="post">
<div style="text-align:center">
<?php if(isset($message)) { echo $message; } ?><br> <br> <br>
<a href="member-index.php"> Tästä takaisin hallintapaneelin etusivulle </a> <br> <br>
<a href="kauppahallinta2.php"> Tästä takaisin muuttamaan muiden autojen tietoja </a> <br> <br> <br>
            <div>
            </div>
            <div>
            </div> 
            <h4 class="text-white-50"> Auton ID-numero: </h4>
            <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
            <input type="text" name="id"  value="<?php echo $row['id']; ?>">
            <br> <br> 
            <h4 class="text-white-50"> Merkki: </h4>
            <input type="text" name="Merkki" class="txtField" value="<?php echo $row['Merkki']; ?>">
            <br> <br>
            <h4 class="text-white-50"> Malli: </h4>
            <input type="text" name="Malli" class="txtField" value="<?php echo $row['Malli']; ?>">
            <br> <br>
            <h4 class="text-white-50"> Vuosimalli: </h4>
            <input type="text" name="Vuosimalli" class="txtField" value="<?php echo $row['Vuosimalli']; ?>">
            <br> <br>
            <h4 class="text-white-50"> Polttoaine: </h4>
            <input type="text" name="Polttoaine" class="txtField" value="<?php echo $row['Polttoaine']; ?>">
            <br> <br>
            <h4 class="text-white-50"> Vaihteisto: </h4>
            <input type="text" name="Vaihteisto" class="txtField" value="<?php echo $row['Vaihteisto']; ?>">
            <br> <br>
            <h4 class="text-white-50"> Rekisterinumero: </h4>
            <input type="text" name="Rekisterinumero" class="txtField" value="<?php echo $row['Rekisterinumero']; ?>">
            <br> <br>
            <h4 class="text-white-50"> Kilometrilukema: </h4>
            <input type="text" name="Kilometrilukema" class="txtField" value="<?php echo $row['Kilometrilukema']; ?>">
            <br> <br>
            <h4 class="text-white-50"> Katsastus: </h4>
            <input type="text" name="Katsastus" class="txtField" value="<?php echo $row['Katsastus']; ?>">
            <br> <br>
            <h4 class="text-white-50"> Hinta: </h4>
            <input type="text" name="Hinta" class="txtField" value="<?php echo $row['Hinta']; ?>">
            <br> <br>
            <h4 class="text-white-50"> Lisätietoja: </h4>
            <input type="text" name="Lisatiedot" class="txtField" value="<?php echo $row['Lisatiedot']; ?>">
            <br> <br>
            <input type="submit" name="submit" value="Päivitä tiedot" class="button"> </div> </div> </form> </section>
            <! Tähän päättyy lomakkeen muutostiedot ja php-toiminnallisuus>

             <!-- Signup-->
        <section class="signup-section" id="yhteys">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Osoite</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">
                                <a href="https://www.google.com/maps/place/Revontie+45,+90830+Haukipudas/@65.1652842,25.3437896,17z/data=!3m1!4b1!4m5!3m4!1s0x468028df4bdcd579:0xda67424ee7414ebb!8m2!3d65.1652842!4d25.3459783">
                                Revontie 45, 90830 Haukipudas</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Sähköposti</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="mailto:sutinenoy@gmail.com">sutinenoy@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Puhelin</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="tel:+358465970854"> +358 46 5970854 </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://www.facebook.com/sutinenoy"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container"><p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> J&A Sutinen Oy</p></div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
