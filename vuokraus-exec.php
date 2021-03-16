<?php
//Start session
session_start();
	
//Include database connection details
require_once('config.php');

//Array to store validation errors
$errmsg_arr = array();

//Validation error flag
$errflag = false;

//Connect to mysql server
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
if(!$link) {
    die('Virhe yhdistäessä palvelimeen ' . mysqli_error());
}

//Select database
$db = mysqli_select_db($link, DB_DATABASE);
if(!$db) {
    die("Virhe valitessa tietokantaa");
}


//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysqli_real_escape_string($str);
}




//Sanitize the POST values
/*	$fname = clean($_POST['fname']);
$lname = clean($_POST['lname']);
$login = clean($_POST['login']);
$password = clean($_POST['password']);
$cpassword = clean($_POST['cpassword']);
*/	

$Nimi = ($_POST['Nimi']);
$Puhelinnumero = ($_POST['Puhelinnumero']);
$Email = ($_POST['Email']);
$MerkkiMalli = ($_POST['MerkkiMalli']);
$Ajankohta = ($_POST['Ajankohta']);
$Ajankohta2 = ($_POST['Ajankohta2']);



        $subject = "Vahvistus auton vuokrauksesta Haukiautolta";
        $to = $Email;
        $message = "Kiitos vuokrauksesta! <br> <br>";
        $message .= "Valitsit seuraavan auton: <br>";
        $message .= $MerkkiMalli . "<br> <br> <br>";
        $message .= "Valitsemasi päivä ja kellonaika: <br>";
        $message .= $Ajankohta;
        $message .= "&nbsp;&nbsp;-&nbsp;&nbsp;";
        $message .= $Ajankohta2 . "<br> <br> <br>";
        $message .= "Ystävällisin terveisin, <br>";
        $message .= "Haukiauto"; 
        $header = "From:sutinenoy@gmail.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail ($to, $subject,$message,$header);


        $subject = "Uusi vuokraus sivustoltasi";
        $to = 'jiikoomusic@gmail.com';
        $message = "Olet saanut uuden ajanvarauksen! <br> <br>";
        $message .= "Asiakkaan nimi: <br>";
        $message .= $Nimi . "<br> <br> <br>";
        $message .= "Asiakkaan sähköpostiosoite: <br>";
        $message .= $Email . "<br> <br> <br>";
        $message .= "Valittu auto: <br>";
        $message .= $MerkkiMalli . "<br> <br> <br>";
        $message .= "Valittu päivä ja kellonaika: <br>";
        $message .= $Ajankohta;
        $message .= "&nbsp;&nbsp;-&nbsp;&nbsp;";
        $message .= $Ajankohta2 . "<br> <br> <br>";
        $header = "From:sutinenoy@gmail.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail ($to, $subject,$message,$header);


$qry = "INSERT INTO vuokraustiedot (Nimi, Puhelinnumero, Email, MerkkiMalli, Ajankohta, Ajankohta2) VALUES ('$Nimi', '$Puhelinnumero', '$Email', '$MerkkiMalli' , '$Ajankohta', '$Ajankohta2')";
$result = @mysqli_query($link, $qry);




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
        </header>
    
        <!-- Projects-->
        <section class="projects-section bg-light" id="palvelut">
            <div class="autokauppa">
            <div style="text-align: center">
        <h3> Vuokraus tehty onnistuneesti! </h3>
        <a href="index.html"> Tästä takaisin etusivulle </a>

                        </div>
                    </div>
                </div>
                            </div>
                        </div>
            </div>
        </section>
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
