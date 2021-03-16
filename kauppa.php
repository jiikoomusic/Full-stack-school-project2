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
        <style>
* {
  box-sizing: border-box;
}


table {
  display: inline-block;
}

.container {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 60%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


.responsive {
  width: 100%;
  height: auto;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
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
                </div>
            </div>
        </header>
    
        <!-- Projects-->
        <section class="about-section text-center" id="autokauppa">
        <div class="container">
				<div class="row">
                <div class="booking-form">
						<div class="form-header"> 
            <div class="autokauppa">
                <h3 class="text-white-50" style="text-align:center"><b> Tervetuloa autokauppaamme! </h3>
                <h3 class="text-white-50" style="text-align:center"> Lisäkuvia ja lisätietoja autoistamme saat laittamalla meille sähköpostia tai soittamalla,
                    yhteystiedot löytyvät sivun alaosasta. </b></h3><br><br>

                <!-- Featured Project Row-->

                <?php 
				require_once('config.php');
		  


				$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
				if(!$link) {
					die('Virhe yhdistäessä serverille: ' . mysql_error());
				}

				//Select database
				$db = mysqli_select_db($link, DB_DATABASE);
				if(!$db) {
					die("Virhe yhdistäessä tietokantaan");
				}


				$qry1 = "SELECT * FROM autokauppa";
				$qry2 = "SELECT * FROM autokauppa";
				$qry3 = "SELECT * FROM autokauppa";
				$seequl = mysqli_fetch_all(mysqli_query($link, $qry1));
				$seequl2 = mysqli_fetch_all(mysqli_query($link, $qry2));
				$seequl3 = mysqli_fetch_all(mysqli_query($link, $qry3));
				?>



                    <! Tästä alkaa sivun taulu> 
                    <div class="container d-flex h-100 align-items-center">
                    <div class="table-responsive-lg">
                
                    <table class="table">
                <table>
           
                <tbody>
                <?php foreach ($seequl as $file): ?>
                <tr>
                <td><img class="responsive" src="<?php echo 'uploads/' . $file[7] ?>" width="600" height="400" alt=""></td> </tr> 
                <td><br><br><h6 style="text-align:center" class="text-white-50"><b>Auton merkki:</b>  <?php echo $file[1];?></h6></td> </tr>
                <td><h6 style="text-align:center" class="text-white-50"><b>Auton malli:</b>   <?php echo $file[2];?></h6></td> </tr>
                <td><h6 style="text-align:center" class="text-white-50"><b>Vuosimalli:</b>   <?php echo $file[3];?></h6></td> </tr>
                <td><h6 style="text-align:center" class="text-white-50"><b>Polttoaine:</b>   <?php echo $file[4];?></h6></td> </tr>
                <td><h6 style="text-align:center" class="text-white-50"><b>Vaihteisto:</b>   <?php echo $file[5];?></h6></td> </tr>
                <td><h6 style="text-align:center" class="text-white-50"><b>Mittarilukema:</b>   <?php echo $file[8];?></h6></td> </tr>
                <td><h6 style="text-align:center" class="text-white-50"><b>Rekisterinumero:</b>   <?php echo $file[6];?></h6></td> </tr>
                <td><h6 style="text-align:center" class="text-white-50"><b>Katsastus:</b>   <?php echo $file[9];?></h6></td> </tr>
                <td><h6 style="text-align:center" class="text-white-50"><b>Lisätiedot:</b>   <?php echo $file[11];?></h6><br><br></td> </tr>
                <td><h4 style="text-align:center" class="text-white-50"><b>Hinta:</b>   <?php echo $file[10];?></h5><br><br><br><br><br><br></td> </tr>
            

                
                
                </tr>
                <?php endforeach;
                ?>
</div>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                        </div>
    </div>
                </div>
            </div> </table>  
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
