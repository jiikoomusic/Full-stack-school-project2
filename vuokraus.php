<?php
    require_once('config.php');
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
        <link href="css/ajanvaraus.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script>var $j = jQuery.noConflict();</script>
    

    <script src="https://polygit.org/components/webcomponentsjs/webcomponents-lite.js"></script>
    
    <link rel="import" href="frevvo-date-time.html">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.js"></script>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>    
    
    <link rel="stylesheet" type="text/css" href="http://www.w3schools.com/lib/w3.css" />    
    <style>
        input, select, textarea{
    color: #ff0000;
}

textarea:focus, input:focus {
    color: #ff0000;
}
</style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Sivun alkuun</a>
                <button class="navbar-toggler navbar-toggler-right" style="position:relative; right:40px;" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Etusivulle</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="kauppa.php">Autokauppa</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="ajanvaraus.php">Huoltotarjouspyyntö</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="vuokraus.php">Autovuokraus</a></li>
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
                    <a class="btn btn-primary js-scroll-trigger" href="#ajanvaraus">Vuokrauslomake</a>
                </div>
            </div> </header>
            <section class="about-section text-center" id="etusivu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <h2 class="text-white-50"> Auton vuokraus </h2> <br><br><br>
        <h3 class="text-white-50"> Tervetuloa vuokraamaan auto käyttöösi kauttamme! <br><br>
        Tarkistathan, että syöttämäsi varaustiedot ovat oikein, sivusto siirtää sinut 
        Paytrailin palveluun maksamaan varauksen. </h3> <br> <br> <br> </div></div></div>
        
        <?php 



$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
if(!$link) {
    die('Virhe yhdistäessä serverille: ' . mysql_error());
}

mysqli_set_charset($link,"utf8");

//Select database
$db = mysqli_select_db($link, DB_DATABASE);
if(!$db) {
    die("Virhe yhdistäessä tietokantaan");
}


$qry1 = "SELECT Ajokorttiluokka, MerkkiMalli, Vuosimalli, Henkilomaara, Ilmastointi, Vaihteisto, Polttoaine, Lemmikit, Hinta FROM vuokraus";
$seequl = mysqli_fetch_all(mysqli_query($link, $qry1));
?>
        <div class="taulu">
        <h3 class="text-white-50"> Vuokrattavana olevat autot:</h3>
        <table id="table-1">

<th>Ajokorttiluokka</th>
<th>Merkki ja malli</th>
<th>Vuosimalli</th>
<th>Henkilömäärä</th>
<th>Ilmastointi</th>
<th>Vaihteisto</th>
<th>Polttoaine</th>
<th>Lemmikit sallittu</th>
<th>Päivävuokra</th>
</tr>
<tr><?php foreach ($seequl as $file): ?>  
  <td><h4 style="color:white;"><?php echo $file[0];?></h4></td>
  <td><h4 style="color:white;"><?php echo $file[1];?></h4></td>
  <td><h4 style="color:white;"><?php echo $file[2];?></h4></td>
  <td><h4 style="color:white;"><?php echo $file[3];?></h4></td>
  <td><h4 style="color:white;"><?php echo $file[4];?></h4></td>
  <td><h4 style="color:white;"><?php echo $file[5];?></h4></td>
  <td><h4 style="color:white;"><?php echo $file[6];?></h4></td>
  <td><h4 style="color:white;"><?php echo $file[7];?></h4></td>
  <td><h4 style="color:white;"><?php echo $file[8];?> €/pv</h4></td>
</tr>
<?php endforeach;?>
</table></div>
        
        
        
        </div> 
        <!-- Projects-->

<?php


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


        $qry = "SELECT ID, Ajokorttiluokka, MerkkiMalli  FROM `vuokraus` ";
$result = @mysqli_query($link, $qry);
  ?>


			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header"> <br><br><br><br><br><br><br><br><br><br>
                        <section id="ajanvaraus">
							<h3 style="background-color:#64a19d;">Vuokrauslomake</h3>
						</div>
						<form id="ajanvaraus" name="ajanvaraus" method="post" action="vuokraus-exec.php">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nimi</span>
										<input class="form-control" name="Nimi" id="Nimi" type="text" placeholder="Kirjoita nimesi" required>
									</div>
									<div class="form-group">
								<span class="form-label">Puhelinnumero</span>
								<input class="form-control" name="Puhelinnumero" id="Puhelinnumero" type="tel" placeholder="Kirjoita puhelinnumerosi" required>
							</div></div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Sähköpostiosoite</span>
										<input class="form-control" name="Email" id="Email"  type="email" placeholder="Kirjoita sähköpostiosoitteesi" required>
									</div>
								</div>
							</div>
                            <span class="form-label">Haluamasi auto</span>
											<div class="form-group">
												<select name="MerkkiMalli" id="MerkkiMalli" class="form-control">
                                                <?php
    foreach ($result as $postResult) {
            echo '<option value="'.$postResult["MerkkiMalli"].'">'.$postResult["MerkkiMalli"].'</option>';
        }

    ?>
												</select>
												<span class="select-arrow"></span>
											</div> 
                                           

											<div class="form-group">
                                            <span class="form-label">Aloitusaika vuokralle</span>
                                            <input id="myDateTimePicker" name="Ajankohta" class="form-control" required>
											</div>

                                            <div class="form-group">
                                            <span class="form-label">Lopetusaika vuokralle</span>
                                            <input id="myDateTimePicker" name="Ajankohta2" class="form-control" required>
											</div>
	
    
							<div class="form-btn">
								<button name="submit" class="submit-btn">Vahvista varaus ja siirry maksamaan</button>
                                </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><br><br><br><br><br>
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




        <script>
        $j(document).ready(function() {
          flatpickr("#myDatePicker", { 
            "dateFormat":"n/j/Y", 
            "allowInput":true,
            "onOpen": function(selectedDates, dateStr, instance) {
              instance.setDate(instance.input.value, false);
            }
          });
          flatpickr("#myDateTimePicker", { 
            "dateFormat":"j/n/Y H:00", 
            "enableTime":true, 
            "allowInput":true,
            minTime: "08:00",
             maxTime: "17:00",
             time_24hr: true
          });
          flatpickr("#myTimePicker", { 
            "dateFormat":"H:00", 
            "enableTime":true, 
            "allowInput":true,
            "noCalendar": true,
            minTime: "08:00",
             maxTime: "17:00",
             time_24hr: true
          });
        });
      </script>
      
      <script>
        // test moment
        if (moment("12-02-1995", "MM-DD-YYYY", true).isValid())
          console.log('moment date parse is ok');
        else
          console.log('moment date parse is invalid');

        if (moment("1995-12-30T13:59:59+04:00", "YYYY-MM-DDTHH:mm:ssZ", true).isValid())
          console.log('moment dateTime parse is ok');
        else
          console.log('moment dateTime parse is invalid');



      </script>
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
